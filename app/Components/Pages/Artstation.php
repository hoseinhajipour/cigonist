<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Artstation extends Component
{
    public function route()
    {
        return Route::get('/artstation')
            ->name('Artstation');
    }
    public function render()
    {
        return view('pages.artstation');
    }
}
