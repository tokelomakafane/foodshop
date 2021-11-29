@extends('frontend.front_master')
@section('frontend')

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->



    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading">Your Favorates Restaurants</h3>
        <h1 class="heading">Menu</h1>

        <div class="box-container">
            <div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg_1.jpg');">
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-9 ftco-animate text-center">
                            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                            <h1 class="mb-0 bread">My Cart</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="ftco-section ftco-cart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="cart-list">
                                <table class="table">
                                    <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>Product name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (Session::has('cart'))
                                        @foreach ($products as $product )
                                            <tr class="text-center">
                                                <td class="product-remove"><a href="{{route('removeproduct',$product['product_id'])}}"><span class="ion-ios-close"></span></a></td>

                                                <td class="image-prod"><div class="img" style="background-image:url({{ (!empty($product['image']))? url('upload/'.$product['image']):url('upload/no_image.jpg') }});"></div></td>

                                                <td class="product-name">
                                                    <h3>{{$product['name']}}</h3>
                                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                                </td>

                                                <td class="price">M{{$product['price']}}.00</td>
                                                <form action="{{route('updatecart',$product['product_id'])}}" method="POST">
                                                    @csrf
                                                    <td class="quantity">
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="quantity"
                                                                   class="quantity form-control input-number"
                                                                   value="{{$product['qty']}}" min="1" max="100">
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="validate">
                                                    </td>
                                                </form>

                                                <td class="total">M{{$product['qty']*$product['price']}}.00</td>
                                            </tr><!-- END TR-->

                                        @endforeach

                                    @else

                                    @endif
                                    @if(Session::has('status'))
                                        <div class="alert alert-success">
                                            {{Session::get('status')}}

                                        </div>

                                    @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3">
                                <h3>Coupon Code</h3>
                                <p>Enter your coupon code if you have one</p>
                                <form action="#" class="info">
                                    <div class="form-group">
                                        <label for="">Coupon code</label>
                                        <input type="text" class="form-control text-left px-3" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
                        </div>
                        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3">
                                <h3>Estimate shipping and tax</h3>
                                <p>Enter your destination to get a shipping estimate</p>
                                <form action="#" class="info">
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <input type="text" class="form-control text-left px-3" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">State/Province</label>
                                        <input type="text" class="form-control text-left px-3" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Zip/Postal Code</label>
                                        <input type="text" class="form-control text-left px-3" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
                        </div>
                        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3">
                                <h3>Cart Totals</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>$20.60</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>$0.00</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span>$3.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>{{Session::has('cart')? Session::get ('cart')->totalPrice:null}}</span>
                                </p>
                            </div>
                            <p><a href="{{url('/checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                        </div>
                    </div>
                </div>
            </section>




        </div>

    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="{{asset('frontend/images/about-img.png')}}" alt="">
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> today's speciality </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-1.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-2.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-3.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-4.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-5.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-6.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-7.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-8.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('frontend/images/menu-9.jpg')}}" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="{{asset('frontend/images/pic-1.png')}}" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="{{asset('frontend/images/pic-2.png')}}" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="{{asset('frontend/images/pic-3.png')}}" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="{{asset('frontend/images/pic-4.png')}}" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter food name">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="test" placeholder="extra with food">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how musch</span>
                    <input type="number" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="order now" class="btn">

        </form>

    </section>

    <!-- order section ends -->

@endsection
