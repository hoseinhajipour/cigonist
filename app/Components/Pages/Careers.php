<?php

namespace App\Components\Pages;

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
        return view('pages.careers');
    }
}
