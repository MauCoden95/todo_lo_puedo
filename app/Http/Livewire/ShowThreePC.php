<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowThreePC extends Component
{
    public function render()
    {
        $computers = Product::where('category','=','Computer')->skip(0)->take(3)->get();

        return view('livewire.show-three-p-c', compact('computers'));
    }
}
