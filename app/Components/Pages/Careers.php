<?php

namespace App\Components\Pages;

use App\Models\Team;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Careers extends Component
{
    public function route()
    {
        return Route::get('/careers')
            ->name('Careers');
    }

    public function render()
    {
        $teams = Team::all();
        return view('pages.careers', ["teams" => $teams]);
    }
}
