<div>
    <br/>
 <!-- Start Bradcaump area -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="bradcaump-inner">
                    <a class="breadcrumb-item" href="{{route('home')}}"">Home</a>
                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                    <span class="breadcrumb-item active">Wishlist</span>
                </nav>
            </div>
        </div>
    </div>
        <!-- wishlist-area start -->
        <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="nobr">Remove</span></th>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name"><span class="nobr">Product Name</span></th>
                                                <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::instance('wishlist')->content() as $item)
                                            <tr>
                                                <td class="product-remove"><a href="#" wire:click.prevent="removeFromWishlist('{{$item->rowId}}')">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}" /></a></td>
                                                <td class="product-name"><a href="{{ route('product.details', ['slug'=>$item->model->slug]) }}">{{$item->model->name}}</a></td>
                                                <td class="product-price"><span class="amount">${{$item->model->sale_price}}</span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock">{{$item->model->stock_status}}</span></td>
                                                <td class="product-add-to-cart"><a href="#" wire:click.prevent="moveProductFromWishlistToCart('{{$item->rowId}}')"> Add to Cart</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- wishlist-area end -->
