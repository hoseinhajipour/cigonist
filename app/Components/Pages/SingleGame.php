<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SingleGame extends Component
{
    public function route()
    {
        return Route::get('/game/{slug}')
            ->name('game');
    }
    public function render()
    {
        return view('pages.single-game');
    }
}
