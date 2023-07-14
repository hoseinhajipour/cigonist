<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class WhoWeAre extends Component
{
    public function route()
    {
        return Route::get('/who-we-are')
            ->name('WhoWeAre');
    }
    public function render()
    {
        return view('pages.who-we-are');
    }
}
