<div>
    <!-- Start Slider Area -->
    <div class="slider__container slider--one bg__cat--3">
        <div class="slide__container slider__activation__wrap owl-carousel">
            <!-- Start Single Slide -->
            @foreach ($sliders as $slider)
             <div class="single__slide animation__style01 slider__fixed--height">
                <div class="container">
                    <div class="row align-items__center">
                        <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                            <div class="slide">
                                <div class="slider__inner">
                                    <h2>{{$slider->subtitle}}</h2>
                                    <h1>{{$slider->title}}</h1>
                                    <div class="cr__btn">
                                        <a href="{{ route('shop') }}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                            <div class="slide__thumb">
                                <img src="{{ asset('assets/images/sliders') }}/{{$slider->image}}" alt="{{$slider->title}}"
                                    width="628" height="472">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    @endforeach
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- Start Slider Area -->
    <!-- Start Category Area -->
    <section class="htc__category__area ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="htc__product__container">
                <div class="row">
                    <div class="product__list clearfix mt--30">
                        @foreach ($lproducts as $lproduct)
                        <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="{{ route('product.details', ['slug'=>$lproduct->slug]) }}">
                                            <img src="{{ asset('assets/images/products') }}/{{$lproduct->image}}"
                                            alt="{{$lproduct->name}}" width="385" height="290">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="#" wire:click.prevent="store({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->sale_price}})"><i class="icon-handbag icons"></i></a></li>

                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="{{ route('product.details', ['slug'=>$lproduct->slug]) }}">{{$lproduct->name}}</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">${{$lproduct->regular_price}}</li>
                                            <li>${{$lproduct->sale_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <!-- End Single Category -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category Area -->

    <!-- Start Product Area -->
    <section class="ftr__product__area ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">Best Seller</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Category -->
                    @foreach ($bsproducts as $bsproduct)
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="{{ route('product.details', ['slug'=>$bsproduct->slug]) }}">
                                    <img src="{{ asset('assets/images/products') }}/{{$bsproduct->image}}"
                                            alt="{{$bsproduct->name}}">
                                </a>

                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="#" wire:click.prevent="store({{$bsproduct->id}},'{{$bsproduct->name}}',{{$bsproduct->sale_price}})"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="{{ route('product.details', ['slug'=>$bsproduct->slug]) }}">{{$bsproduct->name}}</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">${{$bsproduct->regular_price}}</li>
                                    <li>${{$bsproduct->sale_price}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area -->
    <!-- Start Testimonial Area -->
    <section class="htc__testimonial__area bg__cat--4">
        <div class="container">
            <div class="row">
                <div class="ht__testimonial__activation clearfix">
                    <!-- Start Single Testimonial -->
                    <div class="col-lg-6 col-md-6 single__tes">
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="{{ asset('assets/images/test/client/1.png') }}" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4><a href="#">Mr.Mike Band</a></h4>
                                <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                    <!-- Start Single Testimonial -->
                    <div class="col-lg-6 col-md-6 single__tes">
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="{{ asset('assets/images/test/client/2.png') }}" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4><a href="#">Ms.Lucy Barton</a></h4>
                                <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                    <!-- Start Single Testimonial -->
                    <div class="col-lg-6 col-md-6 single__tes">
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="{{ asset('assets/images/test/client/1.png') }}" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4><a href="#">Ms.Lucy Barton</a></h4>
                                <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                    <!-- Start Single Testimonial -->
                    <div class="col-lg-6 col-md-6 single__tes">
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="{{ asset('assets/images/test/client/2.png') }}" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <h4><a href="#">Ms.Lucy Barton</a></h4>
                                <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->
    <!-- Start Top Rated Area -->
    <section class="top__rated__area bg__white pt--100 pb--110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">Top Rated</h2>
                        <p>But I must explain to you</p>
                    </div>
                </div>
            </div>
            <div class="row mt--20">
                <!-- Start Single Product -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="htc__best__product">
                        <div class="htc__best__pro__thumb">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product-2/sm-img-2/1.jpg') }}" alt="small product">
                            </a>
                        </div>
                        <div class="htc__best__product__details">
                            <h2><a href="product-details.html">dummy Product title</a></h2>
                            <ul class="rating">
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                            </ul>
                            <ul  class="top__pro__prize">
                                <li class="old__prize">$82.5</li>
                                <li>$75.2</li>
                            </ul>
                            <div class="best__product__action">
                                <ul class="product__action--dft">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                <!-- Start Single Product -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="htc__best__product">
                        <div class="htc__best__pro__thumb">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product-2/sm-img-2/2.jpg') }}" alt="small product">
                            </a>
                        </div>
                        <div class="htc__best__product__details">
                            <h2><a href="product-details.html">dummy Product title</a></h2>
                            <ul class="rating">
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                            </ul>
                            <ul  class="top__pro__prize">
                                <li class="old__prize">$82.5</li>
                                <li>$75.2</li>
                            </ul>
                            <div class="best__product__action">
                                <ul class="product__action--dft">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                <!-- Start Single Product -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="htc__best__product">
                        <div class="htc__best__pro__thumb">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product-2/sm-img-2/3.jpg') }}" alt="small product">
                            </a>
                        </div>
                        <div class="htc__best__product__details">
                            <h2><a href="product-details.html">dummy Product title</a></h2>
                            <ul class="rating">
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                            </ul>
                            <ul  class="top__pro__prize">
                                <li class="old__prize">$82.5</li>
                                <li>$75.2</li>
                            </ul>
                            <div class="best__product__action">
                                <ul class="product__action--dft">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
        </div>
    </section>
    <!-- End Top Rated Area -->
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
</div>
