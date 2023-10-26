<?php

namespace App\Components\Inc;

use App\Models\Service;
use Livewire\Component;

class OurSolutionPart extends Component
{
    public function render()
    {
        $services = Service::all()->take(6);
        return view('inc.our-solution-part', [
                "services" => $services]
        );
    }
}
