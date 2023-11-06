<?php

namespace App\Components\Inc;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class HowWeAreTop extends Component
{
    public $language;
    public function mount()
    {
        // Check if the 'locale' key exists in the session
        if (session()->has('locale')) {
            $this->language = session('locale');
            App::setLocale($this->language);
        } else {
            $this->language = App::getLocale();
        }
    }

    public function render()
    {
        return view('inc.how-we-are-top');
    }
}
