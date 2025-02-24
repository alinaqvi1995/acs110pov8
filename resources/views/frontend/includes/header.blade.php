<header class="main-header-three">
    <div class="main-header-three__wrapper">
        <div class="container">
            <div class="main-header-three__wrapper-inner clearfix">
                <div class="main-header-three__logo">
                    <a href="{{ route('frontend.home') }}"><img src="https://indigoshopify.com/assets/img/logo.png" alt=""></a>
                </div>
                <div class="main-header-three__right">
                    <div class="main-header-three__top">
                        <div class="main-header-three__top-inner">
                            <div class="main-header-three__top-right">
                                <ul class="list-unstyled main-header-three__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-mobile"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:923076806860">+ 92 ( 307 ) 68 - 06860</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-header-three__menu-box">
                                <ul class="list-unstyled main-header-three__menu">
                                    <li><a href="contact.html">Support</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-three__bottom">
                        <nav class="main-menu main-menu-three">
                            <div class="main-menu-three__wrapper">
                                <div class="main-menu-three__wrapper-inner">
                                    <div class="main-menu-three__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="{{ route('frontend.products') }}">All Categories</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('frontend.products') }}"> Grocery & Forzen</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Fresh Fruits</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Salads</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Fresh Meat</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Butter & Egg</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Milk Cream</a></li>
                                                    <li><a href="{{ route('frontend.products') }}">Oil & Vinegers</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Bread & Bakery</a></li>
                                                    <li><a href="{{ route('frontend.products') }}"> Organic</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('frontend.products') }}">Products</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('frontend.wishlist') }}">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu-three__right">
                                        <div class="main-menu-three__login-box">
                                            <div class="main-menu-three__login-icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <ul class="list-unstyled main-menu-three__login-menu">
                                                <li><a href="#">Login</a></li>
                                                <li><span>/</span></li>
                                                <li><a href="#">Register</a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu-three__search-cart-box">
                                            <div class="main-menu-three__search-box">
                                                <a href="#"
                                                    class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                                            </div>
                                            <div class="main-menu-three__cart-box">
                                                <a href="cart.html"
                                                    class="main-menu-three__cart icon-shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->