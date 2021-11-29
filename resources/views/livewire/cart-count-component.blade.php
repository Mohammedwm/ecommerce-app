 <div class="htc__shopping__cart">
    <a class="cart__menu" href="{{ route('product.cart') }}"><i class="icon-handbag icons"></i></a>
    <a href="#"><span class="htc__qua">{{Cart::instance('cart')->count()}}</span></a>
</div>
