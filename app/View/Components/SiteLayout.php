<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SiteLayout extends Component {
    public $title;

    public function __construct($title = null) {
        $this->title = $title ?? 'My App';
    }

    public function render() {
        return view('layouts.site-layout');
    }
}
