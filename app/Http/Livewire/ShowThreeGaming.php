<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowThreeGaming extends Component
{
    public function render()
    {
        $games = Product::where('category','=','Gaming')->skip(0)->take(3)->get();

        return view('livewire.show-three-gaming', compact('games'));
    }
}
