<?php

namespace App\Components\Inc;

use App\Models\Service;
use Livewire\Component;

class OurServices extends Component
{
    public $lefts = [];
    public $rights = [];

    public function mount()
    {
        $this->lefts = Service::where("status", "active")->take(3)->get();
        $this->rights = Service::where("status", "active")->skip(3)->take(3)->get();

    }

    public function render()
    {
        return view('inc.our-services');
    }
}
