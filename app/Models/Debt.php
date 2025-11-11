<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = [
        'debtor_name',
        'amount',
        'interest_rate',
        'due_date',
    ];

    protected $casts = [
        'due_date' => 'date',
        'amount' => 'decimal:2',
        'interest_rate' => 'decimal:2',
    ];

    public function isOverdue(): bool
    {
        return $this->due_date->isPast();
    }

    public function calculateTotalWithInterest(): float
    {
        $interest = ($this->amount * $this->interest_rate) / 100;
        return $this->amount + $interest;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
