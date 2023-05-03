<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowThreeTablet extends Component
{
    public function render()
    {
        $tablets = Product::where('category','=','Tablet')->skip(0)->take(3)->get();

        return view('livewire.show-three-tablet', compact('tablets'));
    }
}
