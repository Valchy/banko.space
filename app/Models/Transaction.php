<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function accountFrom()
    {
        return $this->belongsTo(Account::class, 'account_from');
    }

    public function accountTo()
    {
        return $this->belongsTo(Account::class, 'account_to');
    }
}
