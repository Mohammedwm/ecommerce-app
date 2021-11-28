<div>
<br/>
    <!-- Start Bradcaump area -->

    <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <a class="breadcrumb-item" href="#">Shop</a>
                                </nav>
                        </div>
                    </div>
                </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Grid -->
    <section class="htc__product__grid bg__white ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div class="htc__product__rightidebar">
                        <div class="htc__grid__top">
                            <div class="htc__select__option">
                                <select class="ht__select" wire:model="sorting">
                                    <option>Default softing</option>
                                    <option value="date">Sort by popularity</option>
                                    <option value="price">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                </select>
                                <select class="ht__select">
                                    <option>Show by</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by newness</option>
                                </select>
                            </div>
                            <div class="ht__pro__qun">
                                <span>Showing 1-{{$products->count()}} of {{$products->count()}} products</span>
                            </div>
                            <!-- Start List And Grid View -->
                            <ul class="view__mode" role="tablist">
                                <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                            </ul>
                            <!-- End List And Grid View -->
                        </div>
                        <!-- Start Product View -->
                        <div class="row">
                            <div class="shop__grid__view__wrap">
                                <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                    @foreach ($products as $product)
                                    <!-- Start Single Product -->
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="{{ route('product.details', ['slug'=>$product->slug]) }}">
                                                        <img src="{{ asset('assets/images/products') }}/{{$product->image}}"
                                                            alt="{{$product->name}}">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"><i class="icon-handbag icons"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="{{ route('product.details', ['slug'=>$product->slug]) }}">{{$product->name}}</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize">${{$product->regular_price}}</li>
                                                        <li>${{$product->sale_price}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Single Product -->
                                    @endforeach
                                </div>
                                <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                    <div class="col-xs-12">
                                        <div class="ht__list__wrap">
                                            @foreach ($products as $product)
                                            <!-- Start List Product -->
                                            <div class="ht__list__product">
                                                <div class="ht__list__thumb">
                                                    <a href="{{ route('product.details', ['slug'=>$product->slug]) }}"><img src="{{ asset('assets/images/products') }}/{{$product->image}}"
                                                        alt="{{$product->name}}" width="385" height="290"></a>
                                                </div>
                                                <div class="htc__list__details">
                                                    <h2><a href="{{ route('product.details', ['slug'=>$product->slug]) }}">{{$product->name}}</a></h2>
                                                    <ul  class="pro__prize">
                                                        <li class="old__prize">${{$product->regular_price}}</li>
                                                        <li>${{$product->sale_price}}</li>
                                                    </ul>
                                                    <ul class="rating">
                                                        <li><i class="icon-star icons"></i></li>
                                                        <li><i class="icon-star icons"></i></li>
                                                        <li><i class="icon-star icons"></i></li>
                                                        <li class="old"><i class="icon-star icons"></i></li>
                                                        <li class="old"><i class="icon-star icons"></i></li>
                                                    </ul>
                                                    <p>{{$product->short_description}}</p>
                                                    <div class="fr__list__btn">
                                                        <a class="fr__btn" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Product -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product View -->
                    </div>
                    <!-- Start Pagenation -->
                    <div class="row">
                        <div class="col-xs-12">
                        {{$products->links()}}
                            <ul class="htc__pagenation">
                               <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                               <li><a href="#">1</a></li>
                               <li class="active"><a href="#">3</a></li>
                               <li><a href="#">19</a></li>
                               <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Pagenation -->
                </div>
                <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="htc__product__leftsidebar">
                        <!-- Start Prize Range -->
                        <div class="htc-grid-range">
                            <h4 class="title__line--4">Price</h4>
                            <div class="content-shopby">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="GET">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span>Price :</span><input type="text" id="amount" readonly>
                                                </div>
                                                <div class="price--filter">
                                                    <a href="#">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Prize Range -->
                        <!-- Start Category Area -->
                        <div class="htc__category">
                            <h4 class="title__line--4">categories</h4>
                            <ul class="ht__cat__list">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('product.category', ['category_slug'=> $category->slug]) }}" class="cate-link">{{$category->name}}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <!-- End Category Area -->

                        <!-- Start Pro Color -->
                        <div class="ht__pro__color">
                            <h4 class="title__line--4">color</h4>
                            <ul class="ht__color__list">
                                <li class="grey"><a href="#">grey</a></li>
                                <li class="lamon"><a href="#">lamon</a></li>
                                <li class="white"><a href="#">white</a></li>
                                <li class="red"><a href="#">red</a></li>
                                <li class="black"><a href="#">black</a></li>
                                <li class="pink"><a href="#">pink</a></li>
                            </ul>
                        </div>
                        <!-- End Pro Color -->
                        <!-- Start Pro Size -->
                        <div class="ht__pro__size">
                            <h4 class="title__line--4">Size</h4>
                            <ul class="ht__size__list">
                                <li><a href="#">xs</a></li>
                                <li><a href="#">s</a></li>
                                <li><a href="#">m</a></li>
                                <li><a href="#">reld</a></li>
                                <li><a href="#">xl</a></li>
                            </ul>
                        </div>
                        <!-- End Pro Size -->
                        <!-- Start Tag Area -->
                        <div class="htc__tag">
                            <h4 class="title__line--4">tags</h4>
                            <ul class="ht__tag__list">
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">bag</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Aceessories</a></li>
                                <li><a href="#">Store</a></li>
                                <li><a href="#">Watch</a></li>
                                <li><a href="#">Other</a></li>
                            </ul>
                        </div>
                        <!-- End Tag Area -->
                        <!-- Start Compare Area -->
                        <div class="htc__compare__area">
                            <h4 class="title__line--4">compare</h4>
                            <ul class="htc__compare__list">
                                <li><a href="#">White men’s polo<i class="icon-trash icons"></i></a></li>
                                <li><a href="#">T-shirt for style girl...<i class="icon-trash icons"></i></a></li>
                                <li><a href="#">Basic dress for women...<i class="icon-trash icons"></i></a></li>
                            </ul>
                            <ul class="ht__com__btn">
                                <li><a href="#">clear all</a></li>
                                <li class="compare"><a href="#">Compare</a></li>
                            </ul>
                        </div>
                        <!-- End Compare Area -->
                        <!-- Start Best Sell Area -->
                        <div class="htc__recent__product">
                            <h2 class="title__line--4">best seller</h2>
                            <div class="htc__recent__product__inner">
                                <!-- Start Single Product -->
                                <div class="htc__best__product">
                                    <div class="htc__best__pro__thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product-2/sm-smg/1.jpg') }}" alt="small product">
                                        </a>
                                    </div>
                                    <div class="htc__best__product__details">
                                        <h2><a href="product-details.html">Product Title Here</a></h2>
                                        <ul class="rating">
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                        </ul>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class="htc__best__product">
                                    <div class="htc__best__pro__thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product-2/sm-smg/2.jpg') }}" alt="small product">
                                        </a>
                                    </div>
                                    <div class="htc__best__product__details">
                                        <h2><a href="product-details.html">Product Title Here</a></h2>
                                        <ul class="rating">
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                        </ul>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <!-- Start Single Product -->
                                <div class="htc__best__product">
                                    <div class="htc__best__pro__thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/images/product-2/sm-smg/1.jpg') }}" alt="small product">
                                        </a>
                                    </div>
                                    <div class="htc__best__product__details">
                                        <h2><a href="product-details.html">Product Title Here</a></h2>
                                        <ul class="rating">
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                            <li class="old"><i class="icon-star icons"></i></li>
                                        </ul>
                                        <ul  class="pro__prize">
                                            <li class="old__prize">$82.5</li>
                                            <li>$75.2</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                        </div>
                        <!-- End Best Sell Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Grid -->
    <!-- Start Brand Area -->
    <div class="htc__brand__area bg__cat--4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ht__brand__inner">
                        <ul class="brand__list owl-carousel clearfix">
                            <li><a href="#"><img src="{{ asset('assets/images/brand/1.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/2.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/3.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/4.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/5.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/5.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/1.png') }}" alt="brand images"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/brand/2.png') }}" alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->
    <!-- Start Banner Area -->
    <div class="htc__banner__area">
        <ul class="banner__list owl-carousel owl-theme clearfix">
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/1.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/2.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/3.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/4.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/5.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/6.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/1.jpg') }}" alt="banner images"></a></li>
            <li><a href="product-details.html"><img src="{{ asset('assets/images/banner/bn-3/2.jpg') }}" alt="banner images"></a></li>
        </ul>
    </div>
    <!-- End Banner Area -->

</div>
