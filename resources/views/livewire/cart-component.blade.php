<div>
    <br/>
 <!-- Start Bradcaump area -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="bradcaump-inner">
                    <a class="breadcrumb-item" href="i{{route('home')}}"">Home</a>
                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                    <span class="breadcrumb-item active">shopping cart</span>
                </nav>
            </div>
        </div>
    </div>
        <!-- End Bradcaump area -->
    <div class="cart-main-area ptb--50 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('cart')->content() as $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}" /></a></td>
                                            <td class="product-name"><a href="{{ route('product.details', ['slug'=>$item->model->slug]) }}">{{$item->model->name}}</a>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize">${{$item->model->regular_price}}</li>
                                                    <li>${{$item->model->sale_price}}</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">${{$item->model->sale_price}}</span></td>
                                            <td class="product-quantity">
                                                <a class="btn" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fa fa-minus-circle"></i></a>
                                                <input type="text" value="{{$item->qty}}" min="1" max="100" pattern="[0-9]*"/>
                                                <a class="btn" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fa fa-plus-circle"></i></a>
                                            </td>
                                            <td class="product-subtotal">${{$item->subtotal}}</td>
                                            <td class="product-remove"><a href="#" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="{{ route('shop') }}">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="#">update</a>
                                            <a href="{{ route('checkout') }}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                    <div class="htc__cart__total">
                                        <h6>cart total</h6>
                                        <div class="cart__desk__list">
                                            <ul class="cart__desc">
                                                <li>cart total</li>
                                                <li>tax</li>
                                                <li>shipping</li>
                                            </ul>
                                            <ul class="cart__price">
                                                <li>${{Cart::instance('cart')->subtotal()}}</li>
                                                <li>${{Cart::instance('cart')->tax()}}</li>
                                                <li>0</li>
                                            </ul>
                                        </div>
                                        <div class="cart__total">
                                            <span>order total</span>
                                            <span>${{Cart::instance('cart')->total()}}</span>
                                        </div>
                                        <ul class="payment__btn">
                                            <li class="active"><a href="#">payment</a></li>
                                            <li><a href="{{ route('shop') }}">continue shopping</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
