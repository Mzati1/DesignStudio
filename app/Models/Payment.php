<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tx_ref',
        'reference',
        'event_type',
        'mode',
        'type',
        'status',
        'number_of_attempts',
        'amount',
        'charges',
        'currency',
        'agenda',
        'method',
        'card_brand',
        'card_last4',
        'customization',
        'logs',
        'completed_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'charges' => 'decimal:2',
        'customization' => 'array',
        'logs' => 'array',
        'completed_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors & Helpers
    |--------------------------------------------------------------------------
    */

    // Status checkers
    public function isSuccessful(): bool
    {
        return $this->status === 'success';
    }

    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function isFailed(): bool
    {
        return $this->status === 'failed';
    }

    // Get a nice label for payment method
    public function getMethodLabelAttribute(): string
    {
        if ($this->method === 'Card' && $this->card_brand) {
            return "{$this->card_brand} ({$this->card_last4})";
        }

        return $this->method ?? 'Unknown';
    }

    // Agenda fallback
    public function getAgendaOrTitleAttribute(): string
    {
        return $this->agenda ?? $this->customization['title'] ?? 'N/A';
    }
}

