<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'time_in',
        'time_out',
        'status',
        'request',
        'schedule',
        'request_reason',
        'request_approved'
    ];

    protected $casts = [
        'time_in' => 'datetime',
        'time_out' => 'datetime',
        'request_approved' => 'boolean'
    ];

    protected $attributes = [
        'status' => 'absent',
        'request' => 'none',
        'request_approved' => false
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDurationAttribute()
    {
        if (!$this->time_out) {
            return $this->time_in->diff(now())->format('%Hh %Im');
        }
        
        return $this->time_in->diff($this->time_out)->format('%Hh %Im');
    }

    public function getStatusAttribute($value)
    {
        // Automatically determine status if not set
        if (empty($value)) {
            if ($this->time_in && $this->time_out) {
                return 'present';
            }
            return $this->time_in ? 'present' : 'absent';
        }
        return $value;
    }

    public function scopeToday($query)
    {
        return $query->whereDate('time_in', today());
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeWithRequest($query, $type)
    {
        return $query->where('request', $type);
    }

    public function scopePendingRequests($query)
    {
        return $query->where('request', '!=', 'none')
                    ->where('request_approved', false);
    }

    public function isLate()
    {
        if (!$this->time_in || !$this->schedule) {
            return false;
        }

        $expectedTime = $this->getExpectedTimeIn();
        return $this->time_in->gt($expectedTime);
    }

    protected function getExpectedTimeIn()
    {
        $date = $this->time_in->format('Y-m-d');
        
        return match($this->schedule) {
            'morning' => Carbon::parse($date . ' 08:00:00'),
            'afternoon' => Carbon::parse($date . ' 13:00:00'),
            'evening' => Carbon::parse($date . ' 18:00:00'),
            default => null
        };
    }
}   