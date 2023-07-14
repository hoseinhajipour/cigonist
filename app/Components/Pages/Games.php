<?php

namespace App\Components\Pages;

use App\Models\Game;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class Games extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function route()
    {
        return Route::get('/games')
            ->name('games');
    }


    public function render()
    {
        $games = Game::where("status", "PUBLISHED")->latest()->paginate(12);
        return view('pages.games', ["games" => $games]);
    }
}
