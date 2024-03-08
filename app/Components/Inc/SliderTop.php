<?php

namespace App\Components\Inc;

use App\Models\Slider;
use Livewire\Component;

class SliderTop extends Component
{
    public $Sliders = [];

    public function mount()
    {
        $this->Sliders = Slider::all();
    }

    public function render()
    {
        return view('inc.slider');
    }
}
