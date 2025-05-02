<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $table = 'payrolls';
    protected $fillable = [
        'user_id',
        'total_hours',
        'salary_per_hour',
        'salary',
        'sss',
        'pagibig',
        'philhealth',
        'other_deduction',
        'total_deductions',
        'net_salary',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

    
}

