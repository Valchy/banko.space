<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TransactionTable extends Component
{
    public $transactions;

    public function __construct($transactions = null)
    {
        $this->transactions = $transactions ?? [];
    }

    public function render()
    {
        return view('components.transaction-table');
    }
}
