<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageLanguage extends Component
{
    public $locale;

    public function changePageLanguage($locale)
    {
        app()->setLocale($locale);
    }

    public function render()
    {
        return view('livewire.page-language');
    }
}
