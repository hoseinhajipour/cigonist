<?php

namespace App\Components\Inc;

use App\Models\Service;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class OurServices extends Component
{
    public $lefts = [];
    public $rights = [];

    public $language;

    public function mount()
    {
        $this->lefts = Service::where("status", "active")->take(3)->get();
        $this->rights = Service::where("status", "active")->skip(3)->take(3)->get();

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
        return view('inc.our-services');
    }
}
