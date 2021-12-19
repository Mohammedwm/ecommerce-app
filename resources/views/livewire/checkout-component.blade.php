<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
<br/>
    <!-- Start Bradcaump area -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="bradcaump-inner">
                    <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                    <a class="breadcrumb-item" href="{{route('checkout')}}">checkout</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="checkout-wrap ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout__inner">
                        <div class="accordion-list">
                            <div class="accordion">
                                <div class="accordion__title">
                                    Billing Information
                                </div>
                                <div class="accordion__body">
                                    <div class="bilinfo">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="First name" name="fname" wire:model="firstname">
                                                        @error('firstname') <span class="text-danger">{{$message}}</span>  @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="text" name="lname" value="" placeholder="Last name" wire:model="lastname">
                                                        @error('lastname') <span class="text-danger">{{$message}}</span>  @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="email" placeholder="Email address" name="email" wire:model="email">
                                                        @error('email') <span class="text-danger">{{$message}}</span>  @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="number" class="col-md-12" name="phone" value="" placeholder="Phone number" wire:model="mobile">
                                                            @error('mobile') <span class="text-danger">{{$message}}</span>  @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="Line1" name="add" wire:model="line1">
                                                        @error('line1') <span class="text-danger">{{$message}}</span>  @enderror
                                                    </div>
                                                </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Line2" name="add" wire:model="line2">
                                                            @error('line2') <span class="text-danger">{{$message}}</span>  @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="country" placeholder="Country" name="add" wire:model="country">
                                                            @error('country') <span class="text-danger">{{$message}}</span>  @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="province" placeholder="Province" wire:model="province">
                                                            @error('province') <span class="text-danger">{{$message}}</span>  @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="city" placeholder="City" wire:model="city">
                                                            @error('city') <span class="text-danger">{{$message}}</span>  @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="zip-code" placeholder="Postcode / ZIP" wire:model="zipcode">
                                                            @error('zipcode') <span class="text-danger">{{$message}}</span>  @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        shipping information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipinfo">
                                            <h3 class="shipinfo__title">Shipping Address</h3>
                                            <p><b>Address :</b> {{$country}}, {{$province}}, {{$city}}, {{$zipcode}}</p>
                                            <a href="#" class="ship-to-another-trigger" wire:click.prevent="Change_ShipToDifferent"><i class="zmdi zmdi-long-arrow-right"></i>Ship to another address</a>
                                            <div class="ship-to-another-content" @if ($ship_to_different) style="display: block;" @endif>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="First name" name="fname" wire:model="s_firstname">
                                                                @error('s_firstname') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" name="lname" value="" placeholder="Last name" wire:model="s_lastname">
                                                                @error('s_lastname') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="email" placeholder="Email address" name="email" wire:model="s_email">
                                                                @error('s_email') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="number" class="col-md-12" name="phone" value="" placeholder="Phone number" wire:model="s_mobile">
                                                                    @error('s_mobile') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Line1" name="add" wire:model="s_line1">
                                                                @error('s_line1') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Line2" name="add" wire:model="s_line2">
                                                                @error('s_line2') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="country" placeholder="Country" name="add" wire:model="s_country">
                                                                @error('s_country') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="province" placeholder="Province" wire:model="s_province">
                                                                @error('s_province') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="city" placeholder="City" wire:model="s_city">
                                                                @error('s_city') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="zip-code" placeholder="Postcode / ZIP" wire:model="s_zipcode">
                                                                @error('s_zipcode') <span class="text-danger">{{$message}}</span>  @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="accordion__title">
                                        shipping method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipmethod">
                                            <form action="#">
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-fast">
                                                        <label for="ship-fast">First shipping</label>
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum quaerat totam hic suscipit quam repellat debitis ad sed aperiam quisquam quibusdam enim labore, ipsa illo, natus ipsam temporibus officia.</p>
                                                </div>
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-normal">
                                                        <label for="ship-normal">Normal shipping</label>
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam maxime, eaque eos! Quidem officia similique, fuga consequatur vero? Quis autem dicta voluptatibus veniam temporibus rem reprehenderit placeat quaerat sunt ducimus.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                    <div class="accordion__title">
                                        payment information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            {{-- <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Check/ Money Order</a>
                                            </div> --}}
                                            <div class="single-method">
                                                <a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                            </div>
                                            <div class="paymentinfo-credit-content">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input mt-0">
                                                                <input type="text" placeholder="Name on card">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <select name="bil-country" id="payment-info-type">
                                                                    <option value="select">Card type</option>
                                                                    <option value="card-1">Card type 1</option>
                                                                    <option value="card-2">Card type 2</option>
                                                                    <option value="card-3">Card type 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Credit Card Number*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Month</option>
                                                                    <option>Jan</option>
                                                                    <option>Feb</option>
                                                                    <option>Mar</option>
                                                                    <option>Apr</option>
                                                                    <option>May</option>
                                                                    <option>Jun</option>
                                                                    <option>Jul</option>
                                                                    <option>Aug</option>
                                                                    <option>Sep</option>
                                                                    <option>Oct</option>
                                                                    <option>Nov</option>
                                                                    <option>Dec</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Year</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Card verification number*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="order-details">
                        <h5 class="order-details__title">Your Order</h5>
                        <div class="order-details__item">
                        @foreach (Cart::instance('cart')->content() as $item)
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="{{ asset('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="{{ route('product.details', ['slug'=>$item->model->slug]) }}">{{$item->model->name}}</a>
                                        <span class="price">${{$item->model->sale_price}}</span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="wire:click.prevent="destroy('{{$item->rowId}}')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                        @endforeach
                        </div>
                        <div class="order-details__count">
                            <div class="order-details__count__single">
                                <h5>sub total</h5>
                                <span class="price">${{Cart::instance('cart')->subtotal()}}</span>
                            </div>
                            <div class="order-details__count__single">
                                <h5>Tax</h5>
                                <span class="price">${{Cart::instance('cart')->tax()}}</span>
                            </div>
                            <div class="order-details__count__single">
                                <h5>Shipping</h5>
                                <span class="price">0</span>
                            </div>
                        </div>
                        <div class="ordre-details__total">
                            <h5>Order total</h5>
                            <span class="price">${{Cart::instance('cart')->total()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
</div>
