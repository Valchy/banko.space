<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'status',
        'action_by',
        'account_from',
        'account_to',
        'amount',
    ];

    public function accountFrom()
    {
        return $this->belongsTo(Account::class, 'account_from');
    }

    public function accountTo()
    {
        return $this->belongsTo(Account::class, 'account_to');
    }
}
