<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopUpTable extends Component
{
    public $topUps;

    public function __construct($topUps = null)
    {
        $this->topUps = $topUps ?? [];
    }

    public function render()
    {
        return view('components.top-up-table');
    }
}
