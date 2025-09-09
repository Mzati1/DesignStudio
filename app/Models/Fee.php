<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'amount',
        'currency',
        'duration_months',
        'description',
        'active',
        'created_by',
        'updated_by',
    ];

    protected static function booted()
    {
        static::creating(function ($fee) {
            // Auto-generate slug if not provided
            if (empty($fee->slug)) {
                $fee->slug = Str::slug($fee->name);
            }
        });
    }

    /**
     * Payments associated with this fee
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * User/admin who created this fee
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * User/admin who last updated this fee
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}