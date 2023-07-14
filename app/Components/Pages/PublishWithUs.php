<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class PublishWithUs extends Component
{
    public function route()
    {
        return Route::get('/publish-with-us')
            ->name('PublishWithUs');
    }
    public function render()
    {
        return view('pages.publish-with-us');
    }
}
