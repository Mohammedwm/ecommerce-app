<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\HomeSlider;
use Cart;

class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        return redirect()->route('wishlist');
    }

    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $bsproducts = Product::where('featured',true)->inRandomOrder()->limit(4)->get();
        $trproducts = Product::inRandomOrder()->limit(3)->get();
        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'bsproducts'=>$bsproducts,'trproducts'=>$trproducts])->layout('layouts.base');
    }
}
