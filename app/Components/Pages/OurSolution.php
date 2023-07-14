<?php

namespace App\Components\Pages;

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class OurSolution extends Component
{
    public function route()
    {
        return Route::get('/our-solution')
            ->name('OurSolution');
    }
    public function render()
    {
        $services = Service::all();
        return view('pages.our-solution', ["services" => $services]);
    }
}
