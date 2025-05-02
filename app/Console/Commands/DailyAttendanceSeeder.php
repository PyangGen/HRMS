<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class DailyAttendanceSeeder extends Command
{
    protected $signature = 'attendance:seed-daily';
    protected $description = 'Create fresh attendance record for users daily based on Philippine time and skip holidays';

    public function handle()
    {
        // Set Philippine time
        $now = Carbon::now('Asia/Manila');

        // Check if today is a Philippine holiday (optional: use an API or hardcoded list)
        $holidays = [ // Format: YYYY-MM-DD
            '2025-01-01',
            '2025-04-09',
            '2025-04-17', // Maundy Thursday
            '2025-04-18', // Good Friday
            '2025-05-01',
            // Add more holidays...
        ];

        if (in_array($now->toDateString(), $holidays)) {
            $this->info("Today ({$now->toDateString()}) is a holiday. No attendance created.");
            return;
        }

        $users = User::where('usertype', 'user')->get();

        foreach ($users as $user) {
            // Check if there's already an attendance for today
            $existing = Attendance::where('user_id', $user->id)
                ->whereDate('time_in', $now->toDateString())
                ->first();

            if (!$existing) {
                Attendance::create([
                    'user_id' => $user->id,
                    'status' => 'Absent', // default, will be updated if they time in
                    'time_in' => null,
                    'time_out' => null,
                    'request' => 'none',
                    'request_reason' => null,
                    'request_approved' => null,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);

                $this->info("Created attendance record for user ID: {$user->id}");
            }
        }

        $this->info("Daily attendance seeding completed.");
    }
}

