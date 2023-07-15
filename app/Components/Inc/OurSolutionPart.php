<?php

namespace App\Components\Inc;

use App\Models\Service;
use Livewire\Component;

class OurSolutionPart extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('inc.our-solution-part', ["services" => $services]);
    }
}
