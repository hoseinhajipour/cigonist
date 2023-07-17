<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Landing extends Component
{
    public function route()
    {
        return Route::get('/landing0')
            ->name('Landing');
    }
    public function render()
    {
        return view('pages.landing')->layout("layouts.app02");
    }
}
