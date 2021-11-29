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
            @foreach( $menu as $menus)
                <div class="box col-md-8">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="{{ (!empty($menus->image))? url('upload/menu_images/'.$menus->image):url('upload/no_image.jpg') }}" alt="">
                    <h3>{{$menus->name}}</h3>
                    <a href="{{route('menuitem',$menus->id)}}" class="btn">Order</a>
                </div>
            @endforeach



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
