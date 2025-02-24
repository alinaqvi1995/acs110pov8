@extends('frontend.layouts.app')
@section('title', "Indigo - Pakistan's Favorite Grocery Store for Best Prices & Free Delivery")
@section('content')
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <section class="main-slider-three">
        <div class="main-slider-three__bg-shape-2"
            style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-2.png);"></div>
        <div class="main-slider-three__ripped-paper"
            style="background-image: url(frontend/assets/images/shapes/main-slider-three-pipped-paper.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="main-slider-three__categories-box">
                        <div class="main-slider-three__categories">
                            <h3 class="main-slider-three__categories-title">All Categories</h3>
                            <ul class="main-slider-three__categories-list list-unstyled">
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-groceries"></i> Grocery & Forzen<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li class="active"><a href="{{ route('frontend.products') }}"><i class="icon-fruit"></i> Fresh
                                        Fruits<span class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-salad-1"></i> Salads<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-meat"></i> Fresh Meat<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-eggs"></i> Butter & Egg<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-milk-box"></i> Milk Cream<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-vase"></i> Oil & Vinegers<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-french-toast"></i> Bread &
                                        Bakery<span class="fas fa-angle-right"></span></a>
                                </li>
                                <li><a href="{{ route('frontend.products') }}"><i class="icon-corn"></i> Organic<span
                                            class="fas fa-angle-right"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="main-slider-three__right">
                        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                                "effect": "fade",
                                "pagination": {
                                "el": "#main-slider-pagination",
                                "type": "bullets",
                                "clickable": true
                                },
                                "navigation": {
                                "nextEl": "#main-slider__swiper-button-next",
                                "prevEl": "#main-slider__swiper-button-prev"
                                },
                                "autoplay": {
                                "delay": 5000
                                }}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="image-layer-three">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-1.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html"
                                                class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-layer-three image-layer-three--2">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-2.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html"
                                                class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-layer-three image-layer-three--3">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-3.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html"
                                                class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-pagination" id="main-slider-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-three">
        <div class="container">
            <div class="feature-three__inner">
                <ul class="list-unstyled feature-three__list">
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-global-shipping"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Return Policy</h3>
                                <p class="feature-three__subtitle">Money back guarantee</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-free-delivery"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Free shipping</h3>
                                <p class="feature-three__subtitle">On all orders over RS 60.00</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-store"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Store locator</h3>
                                <p class="feature-three__subtitle">Find your nearest store</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                </ul>
            </div>
        </div>
    </section>
    <section class="hot-products-three">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout New Products</span>
                <h2 class="section-title__title">Today’s new hotest products
                    <br> available now</h2>
            </div>
            <div class="row">
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="frontend/assets/images/resources/hot-product-1-1.webp" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Bananas</a></h3>
                                <p class="hot-products__price">RS 18.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="frontend/assets/images/resources/hot-product-1-2.webp" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Potatos</a></h3>
                                <p class="hot-products__price">RS 22.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="frontend/assets/images/resources/hot-product-1-3.webp" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Apples</a></h3>
                                <p class="hot-products__price">RS 16.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="frontend/assets/images/resources/hot-product-1-4.webp" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Lettus</a></h3>
                                <p class="hot-products__price">RS 9.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
            </div>
        </div>
    </section>
    <section class="banner-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="banner-three__left">
                        <div class="banner-three__inner">
                            <div class="banner-three__inner-bg"
                                style="background-image: url(frontend/assets/images/backgrounds/banner-three-bg-1.webp);">
                            </div>
                            <p class="banner-three__tagline">Organic Food</p>
                            <h3 class="banner-three__title">Fresh <br> Avocado</h3>
                            <div class="banner-three__btn-box">
                                <a href="product-details.html" class="banner-three__btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="banner-three__middle">
                        <div class="banner-three__middle-inner">
                            <div class="banner-three__img-2">
                                <img src="frontend/assets/images/resources/banner-three-img-2.webp" alt="">
                            </div>
                            <div class="banner-three__shape-1">
                                <img src="frontend/assets/images/shapes/banner-three-middel-shape-1.png" alt="">
                            </div>
                            <div class="banner-three__middle-offer">
                                <p>off</p>
                            </div>
                            <div class="banner-three__middle-title-box">
                                <p class="banner-three__middle-tagline">20%</p>
                                <h3 class="banner-three__middle-title">on All Healthy
                                    <br> Beverages</h3>
                            </div>
                            <div class="banner-three__middle-btn-box">
                                <a href="product-details.html" class="banner-three__middle-btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="banner-three__right">
                        <div class="banner-three__right-inner">
                            <div class="banner-three__right-shape-1">
                                <img src="frontend/assets/images/shapes/banner-three-right-shape-1.png" alt="">
                            </div>
                            <div class="banner-three__img-3">
                                <img src="frontend/assets/images/resources/banner-three-img-3.webp" alt="">
                            </div>
                            <div class="banner-three__right-title-box">
                                <p class="banner-three__right-tagline">100% Healthy</p>
                                <h3 class="banner-three__right-title">Healthy <br> Organic Food</h3>
                            </div>
                            <div class="banner-three__right-btn-box">
                                <a href="product-details.html" class="banner-three__right-btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-two">
        <div class="why-choose-two__bg"
            style="background-image: url(frontend/assets/images/backgrounds/why-choose-two-bg.webp);"></div>
        <div class="why-choose-two__shape-1 img-bounce">
            <img src="frontend/assets/images/shapes/why-choose-two-shape-1.png" alt="">
        </div>
        <div class="why-choose-two__shape-2 float-bob-x">
            <img src="frontend/assets/images/shapes/why-choose-two-shape-2.png" alt="">
        </div>
        <div class="why-choose-two__shape-3 float-bob-y">
            <img src="frontend/assets/images/shapes/why-choose-two-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="why-choose-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Why Choose Ogenix</span>
                            <h2 class="section-title__title">Few reasons for people
                                choosing ogenix</h2>
                        </div>
                        <p class="why-choose-two__text-1">Aliquam viverra arcu. Donec aliquet blandit enim.
                            Suspendisse id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                            sit amet mattis magna varius non.</p>
                        <div class="why-choose-two__btn-box">
                            <a href="about.html" class="thm-btn why-choose-two__btn">Discover more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="why-choose-two__right">
                        <ul class="list-unstyled why-choose-two__list">
                            <li>
                                <div class="why-choose-two__single">
                                    <div class="why-choose-two__icon-box">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-fresh"></span>
                                        </div>
                                        <p class="why-choose-two__icon-text">100% fresh</p>
                                    </div>
                                    <p class="why-choose-two__text-2">In ree hour when our power choice is and when
                                        nothing prevents.</p>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-two__single">
                                    <div class="why-choose-two__icon-box">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-package-box"></span>
                                        </div>
                                        <p class="why-choose-two__icon-text">Fast deliveries</p>
                                    </div>
                                    <p class="why-choose-two__text-2">In ree hour when our power choice is and when
                                        nothing prevents.</p>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-two__single">
                                    <div class="why-choose-two__icon-box">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-organic-food"></span>
                                        </div>
                                        <p class="why-choose-two__icon-text">Natural products</p>
                                    </div>
                                    <p class="why-choose-two__text-2">In ree hour when our power choice is and when
                                        nothing prevents.</p>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-two__single">
                                    <div class="why-choose-two__icon-box">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-farmer"></span>
                                        </div>
                                        <p class="why-choose-two__icon-text">Best farmers</p>
                                    </div>
                                    <p class="why-choose-two__text-2">In ree hour when our power choice is and when
                                        nothing prevents.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-one">
        <div class="counter-one__bg"
            style="background-image: url(frontend/assets/images/backgrounds/counter-one-bg-img.png);"></div>
        <div class="container">
            <ul class="counter-one__inner list-unstyled">
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-customer-service"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="154" data-speed="1500">00</h3>
                        <p class="counter-one__text">Happy customers</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-farmer-1"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="163" data-speed="1500">00</h3>
                        <p class="counter-one__text">Expert farmers</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-agriculture"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="360" data-speed="1500">00</h3>
                        <p class="counter-one__text">New products</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-trophy"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="22" data-speed="1500">00</h3>
                        <p class="counter-one__text">Awards winning</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="hot-product-three">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout Products</span>
                <h2 class="section-title__title">Hot deals of the day & <br> purchase now</h2>
            </div>
            <div class="hot-product-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": true,
                "autoplay": false,
                "margin": 30,
                "nav": true,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 1
                    },
                    "992": {
                        "items": 2
                    },
                    "1200": {
                        "items": 2
                    }
                }
            }'>
                <!--Hot Product Three Single Start-->
                <div class="item">
                    <div class="hot-product-three__single">
                        <div class="hot-product-three__img-box">
                            <img src="frontend/assets/images/resources/hot-product-three-img-1-1.webp" alt="">
                            <div class="hot-product-three__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="hot-product-three__content">
                            <div class="hot-product-three__title-box">
                                <div class="hot-product-three__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="hot-product-three__title">Red grapes</h4>
                            </div>
                            <p class="hot-product-three__text">There are many new varia of pasages of available
                                text.</p>
                            <div class="hot-product-three__price-box">
                                <h4>RS 86.00 <span>RS 90.00</span></h4>
                            </div>
                            <div class="hot-product-three__btn-box">
                                <a href="cart.html" class="thm-btn hot-product-three__btn">Add to cart</a>
                            </div>
                            <div class="hot-product-three__coundown-box">
                                <div class="default-coundown">
                                    <div class="box">
                                        <div class="countdown time-countdown-two" data-countdown-time="2023/01/01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hot-product-three__single">
                        <div class="hot-product-three__img-box">
                            <img src="frontend/assets/images/resources/hot-product-three-img-1-2.webp" alt="">
                            <div class="hot-product-three__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="hot-product-three__content">
                            <div class="hot-product-three__title-box">
                                <div class="hot-product-three__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="hot-product-three__title">Black grapes</h4>
                            </div>
                            <p class="hot-product-three__text">There are many new varia of pasages of available
                                text.</p>
                            <div class="hot-product-three__price-box">
                                <h4>RS 86.00 <span>RS 90.00</span></h4>
                            </div>
                            <div class="hot-product-three__btn-box">
                                <a href="cart.html" class="thm-btn hot-product-three__btn">Add to cart</a>
                            </div>
                            <div class="hot-product-three__coundown-box">
                                <div class="default-coundown">
                                    <div class="box">
                                        <div class="countdown time-countdown-two" data-countdown-time="2023/02/01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hot-product-three__single">
                        <div class="hot-product-three__img-box">
                            <img src="frontend/assets/images/resources/hot-product-three-img-1-3.jpg" alt="">
                            <div class="hot-product-three__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="hot-product-three__content">
                            <div class="hot-product-three__title-box">
                                <div class="hot-product-three__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="hot-product-three__title">Lemos</h4>
                            </div>
                            <p class="hot-product-three__text">There are many new varia of pasages of available
                                text.</p>
                            <div class="hot-product-three__price-box">
                                <h4>RS 86.00 <span>RS 90.00</span></h4>
                            </div>
                            <div class="hot-product-three__btn-box">
                                <a href="cart.html" class="thm-btn hot-product-three__btn">Add to cart</a>
                            </div>
                            <div class="hot-product-three__coundown-box">
                                <div class="default-coundown">
                                    <div class="box">
                                        <div class="countdown time-countdown-two" data-countdown-time="2023/02/05">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-two">
        <div class="testimonial-two__bg"
            style="background-image: url(frontend/assets/images/backgrounds/testimonial-two-bg.jpg);"></div>
        <div class="testimonial-two__bg-img"
            style="background-image: url(frontend/assets/images/backgrounds/testimonial-two-bg-img.png);"></div>
        <div class="testimonial-two__shape-1">
            <img src="frontend/assets/images/shapes/testimonial-two-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Testimonials</span>
                            <h2 class="section-title__title">What they’re
                                talking about us</h2>
                        </div>
                        <p class="testimonial-two__text-1">Lorem ipsum dolor sit amet, elit sed, ading do eiusmod
                            tempor incididunt labore et dolore elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-two__right">
                        <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                            }
                        }'>
                            <!--Testimonial Two Single Start-->
                            <div class="item">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content-box">
                                        <p>Lorem ipsum is simply free text dolor not sit amet, consectetur notted
                                            adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <h4 class="testimonial-two__client-name">Kevin martin</h4>
                                        <p class="testimonial-two__client-sub-title">Customer</p>
                                    </div>
                                    <div class="testimonial-two__img-box">
                                        <div class="testimonial-two__img">
                                            <img src="frontend/assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__quote">
                                        <img src="frontend/assets/images/icon/testimonial-two-quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Two Single End-->
                            <!--Testimonial Two Single Start-->
                            <div class="item">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content-box">
                                        <p>Lorem ipsum is simply free text dolor not sit amet, consectetur notted
                                            adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <h4 class="testimonial-two__client-name">Jessica brown</h4>
                                        <p class="testimonial-two__client-sub-title">Customer</p>
                                    </div>
                                    <div class="testimonial-two__img-box">
                                        <div class="testimonial-two__img">
                                            <img src="frontend/assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__quote">
                                        <img src="frontend/assets/images/icon/testimonial-two-quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Two Single End-->
                            <!--Testimonial Two Single Start-->
                            <div class="item">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__content-box">
                                        <p>Lorem ipsum is simply free text dolor not sit amet, consectetur notted
                                            adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-two__client-info">
                                        <h4 class="testimonial-two__client-name">Sharah albert</h4>
                                        <p class="testimonial-two__client-sub-title">Customer</p>
                                    </div>
                                    <div class="testimonial-two__img-box">
                                        <div class="testimonial-two__img">
                                            <img src="frontend/assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__quote">
                                        <img src="frontend/assets/images/icon/testimonial-two-quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Two Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="gallery-three">
        <div class="container">
            <div class="gallery-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "nav": false,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 3
                    },
                    "992": {
                        "items": 4
                    },
                    "1200": {
                        "items": 7
                    }
                }
            }'>
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-1.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-2.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-3.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-4.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-5.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-6.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
                <!--Gallery Three Single Start-->
                <div class="item">
                    <div class="gallery-three__single">
                        <div class="gallery-three__img">
                            <img src="frontend/assets/images/gallery/gallery-3-7.jpg" alt="">
                            <div class="gallery-three__icon">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Three Single End-->
            </div>
        </div>
    </section> --}}
    <section class="news-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">From the Blog Posts</span>
                <h2 class="section-title__title">Latest news updates
                    <br> & articles</h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-1.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Which healthy food growth
                                    strategies required</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-2.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Donec aliquet blandit enim
                                    feugiat Suspendisse</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-3.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">luctus sit amet eu nibh tempus
                                    turpis.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <section class="subscribe-one">
        <div class="container">
            <div class="subscribe-one__inner">
                <div class="subscribe-one__shape-1 float-bob-x">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-1.png" alt="">
                </div>
                <div class="subscribe-one__shape-2 float-bob-y">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-2.png" alt="">
                </div>
                <div class="subscribe-one__shape-4 float-bob-y">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-4.png" alt="">
                </div>
                <div class="subscribe-one__shape-5 zoominout">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-5.png" alt="">
                </div>
                <div class="subscribe-one__inner-content">
                    <div class="subscribe-one__shape-3 float-bob-x">
                        <img src="frontend/assets/images/shapes/subscribe-one-shape-3.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="subscribe-one__left">
                                <div class="icon">
                                    <span class="icon-folder"></span>
                                </div>
                                <div class="subscribe-one__title-box">
                                    <span class="subscribe-one__tagline">Quisque vel ortor</span>
                                    <h2 class="subscribe-one__title">Subscribe to newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="subscribe-one__right">
                                <div class="subscribe-one__shape-6 float-bob-x">
                                    <img src="frontend/assets/images/shapes/subscribe-one-shape-6.png" alt="">
                                </div>
                                <div class="subscribe-one__form-box">
                                    <form class="subscribe-one__form mc-form" data-url="MC_FORM_URL">
                                        <div class="subscribe-one__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="subscribe-one__btn"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection