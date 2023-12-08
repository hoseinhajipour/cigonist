<?php

namespace App\Components\Inc;

use App\Models\Text;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class HowWeAreTop extends Component
{
    public $language;

    public $title;
    public $info;

    public function mount()
    {
        // Check if the 'locale' key exists in the session
        if (session()->has('locale')) {
            $this->language = session('locale');
            App::setLocale($this->language);
        } else {
            $this->language = App::getLocale();
        }


        $this->title = Text::where("key","HOW WE ARE")->first();
        $this->info = Text::where("key","HOWWEARE_INFO")->first();
    }

    public function render()
    {
        return view('inc.how-we-are-top');
    }
}
