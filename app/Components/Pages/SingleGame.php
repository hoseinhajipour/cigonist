<?php

namespace App\Components\Pages;

use App\Models\Game;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use TCG\Voyager\Models\Post;

class SingleGame extends Component
{
    public $game;
    public function route()
    {
        return Route::get('/game/{slug}')
            ->name('game');
    }
    public function mount($slug)
    {
        $this->game = Game::where("slug", "LIKE", "%$slug%")->first();
    }
    public function render()
    {
        return view('pages.single-game');
    }
}
