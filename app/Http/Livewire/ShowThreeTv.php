<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowThreeTv extends Component
{
    public function render()
    {
        $tvs = Product::where('category','=','TV')->skip(0)->take(3)->get();

        return view('livewire.show-three-tv', compact('tvs'));
    }
}
