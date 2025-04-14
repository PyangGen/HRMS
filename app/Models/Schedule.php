<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shift',
        'shift_start',
        'shift_end',
        'status',
        'status',
        'request',
        'schedule',
        'request_reason',
        'request_approved',
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
