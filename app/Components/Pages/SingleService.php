<?php

namespace App\Components\Pages;

use Livewire\Component;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

class SingleService extends Component
{
    public $service;

    public function route()
    {
        return Route::get('/service/{slug}')
            ->name('service');
    }

    public function mount($slug)
    {
        $this->service = Service::where("slug", "LIKE", "%$slug%")->first();
    }


    public function render()
    {
        return view('pages.single-service');
    }
}
