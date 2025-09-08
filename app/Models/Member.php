<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'membership_number',
        'status',
        'started_at',
        'expires_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    // Function to generate memebership id
    protected static function booted()
    {
        static::creating(function ($member) {
            if (empty($member->membership_number)) {
                $year = now()->year;

                // Find last member for this year
                $lastMember = self::whereYear('created_at', $year)
                    ->orderBy('id', 'desc')
                    ->first();

                $nextNumber = $lastMember
                    ? ((int) substr($lastMember->membership_number, -4)) + 1
                    : 1;

                $member->membership_number = sprintf(
                    "MUST-DESIGN%s-%04d",
                    $year,
                    $nextNumber
                );
            }
        });
    }

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'payable');
    }

    public function isActive(): bool
    {
        return $this->status === 'active' && now()->lt($this->expires_at);
    }

}
