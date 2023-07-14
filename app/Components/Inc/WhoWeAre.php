<?php

namespace App\Components\Inc;

use Livewire\Component;
use TCG\Voyager\Models\Page;

class WhoWeAre extends Component
{
    public function render()
    {
        $page = Page::where("slug", "who-we-are")->first();
        return view('inc.who-we-are', ["page" => $page]);
    }
}
