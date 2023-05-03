<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowThreeCells extends Component
{
    public function render()
    {
        $cells = Product::where('category','=','Cellphone')->skip(0)->take(3)->get();

        return view('livewire.show-three-cells', compact('cells'));
    }
}
