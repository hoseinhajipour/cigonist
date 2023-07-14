<?php

namespace App\Components\Inc;

use App\Models\Game;
use Livewire\Component;

class LatestGames extends Component
{
    public function render()
    {
        $games = Game::where("status", "PUBLISHED")->latest()->get()->take(4);
        return view('inc.latest-games', ["games" => $games]);
    }
}
