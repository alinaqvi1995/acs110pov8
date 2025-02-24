@extends('frontend.layouts.app')
@section('title', 'Home Page')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="page-header__ripped-paper"
        style="background-image: url(frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Shop</li>
            </ul>
            <h2>Wishlist</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Cart Page-->
<section class="wishlist-page">
    <div class="container">
        <div class="table-responsive-box">
            <table class="wishlist-table">
                <tbody>
                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/wishlist-page-img-1.jpg" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="product-name-select-box">
                                <div class="product-name">
                                    <h4>Brown bread</h4>
                                    <p>$23.00</p>
                                </div>
                                <div class="product-select">
                                    <a href="wishlist.html" class="thm-btn product-select-btn">Select
                                        options</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/wishlist-page-img-2.jpg" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="product-name-select-box">
                                <div class="product-name">
                                    <h4>Broccoli</h4>
                                    <p>$9.00</p>
                                </div>
                                <div class="product-select">
                                    <a href="wishlist.html" class="thm-btn product-select-btn">Select
                                        options</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/wishlist-page-img-3.jpg" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="product-name-select-box">
                                <div class="product-name">
                                    <h4>Apples</h4>
                                    <p>$16.00</p>
                                </div>
                                <div class="product-select">
                                    <a href="wishlist.html" class="thm-btn product-select-btn">Select
                                        options</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/wishlist-page-img-4.jpg" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="product-name-select-box">
                                <div class="product-name">
                                    <h4>Red grapes</h4>
                                    <p>$17.00</p>
                                </div>
                                <div class="product-select">
                                    <a href="wishlist.html" class="thm-btn product-select-btn">Select
                                        options</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--End Cart Page-->

<!--Subscribe One Start-->
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
<!--Subscribe One End-->
@endsection