<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $bsproducts = Product::where('featured',true)->inRandomOrder()->limit(4)->get();
        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'bsproducts'=>$bsproducts])->layout('layouts.base');
    }
}
