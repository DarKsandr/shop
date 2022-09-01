@extends("layout.index")

@section("body")
<div class="main-wrapper">
    <header>
        <!-- Header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <div class="welcome-text">
                            <p>World Wide Completely Free Returns and Shipping</p>
                        </div>
                    </div>
                    <div class="col d-none d-lg-block">
                        <div class="top-nav">
                            <ul>
                                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                                <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                                <li><a href="{{route('my-account')}}"><i class="fa fa-user"></i> Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top area end -->
        <!-- Header action area start -->
        <div class="header-bottom  d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col">
                        <div class="header-logo">
                            <a href="{{route('index')}}"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="search-element">
                            <form action="#">
                                <input type="text" placeholder="Search" />
                                <button><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header action area end -->
        <!-- Header action area start -->
        <div class="header-bottom d-lg-none sticky-nav style-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col">
                        <div class="header-logo">
                            <a href="{{route('index')}}"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="search-element">
                            <form action="#">
                                <input type="text" placeholder="Search" />
                                <button><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header action area end -->
        <!-- header navigation area start -->
        <div class="header-nav-area d-none d-lg-block sticky-nav">
            <div class="container">
                <div class="header-nav">
                    <div class="main-menu position-relative">
                        <ul>
                            <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('index')}}">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li class="dropdown position-static"><a href="{{route('about')}}">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Inner Pages</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="{{route('order-tracking')}}">Order Tracking</a></li>
                                            <li><a href="{{route('faq')}}">Faq Page</a></li>
                                            <li><a href="{{route('coming-soon')}}">Coming Soon Page</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Other Shop Pages</a></li>
                                            <li><a href="{{route('cart')}}">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="{{route('compare')}}">Compare Page</a></li>
                                            <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Related Shop Pages</a></li>
                                            <li><a href="{{route('my-account')}}">Account Page</a></li>
                                            <li><a href="{{route('login')}}">Login & Register Page</a></li>
                                            <li><a href="empty-{{route('cart')}}">Empty Cart Page</a></li>
                                            <li><a href="{{route('thank-you-page')}}">Thank You Page</a></li>
                                        </ul>
                                        <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/menu-banner.png" alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown position-static"><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Shop Page</a></li>
                                            <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                            <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">product Details Page</a></li>
                                            <li><a href="single-product.html">Product Single</a></li>
                                            <li><a href="single-product-variable.html">Product Variable</a></li>
                                            <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                            <li><a href="single-product-group.html">Product Group</a></li>
                                            <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                            <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Single Product Page</a></li>
                                            <li><a href="single-product-slider.html">Product Slider</a></li>
                                            <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                            <li><a href="single-product-gallery-right.html">Product Gallery Right</a> </li>
                                            <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                            </li>
                                            <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                            </li>
                                            <li><a href="{{route('cart')}}">Cart Page</a></li>
                                        </ul>
                                        <ul class="d-block p-0 border-0">
                                            <li class="title"><a href="#">Single Product Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="{{route('compare')}}">Compare Page</a></li>
                                            <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                            <li><a href="{{route('my-account')}}">Account Page</a></li>
                                            <li><a href="{{route('login')}}">Login & Register Page</a></li>
                                            <li><a href="empty-{{route('cart')}}">Empty Cart Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                            <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                            <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                            Blog <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li><a href="blog-single.html">Single Blog</a>
                                            <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header navigation area end -->
        <div class="mobile-search-box d-lg-none">
            <div class="container">
                <!-- mobile search start -->
                <div class="search-element max-width-100">
                    <form action="#">
                        <input type="text" placeholder="Search" />
                        <button><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- mobile search start -->
            </div>
        </div>
    </header>
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="{{route('wishlist')}}" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="{{route('cart')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->
    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="user-panel">
            <ul>
                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                <li><a href="{{route('my-account')}}"><i class="fa fa-user"></i> Account</a></li>
            </ul>
        </div>
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('index')}}"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li>
                        <a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Inner Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="{{route('order-tracking')}}">Order Tracking</a></li>
                                    <li><a href="{{route('faq')}}">Faq Page</a></li>
                                    <li><a href="{{route('coming-soon')}}">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('cart')}}">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="{{route('compare')}}">Compare Page</a></li>
                                    <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('my-account')}}">Account Page</a></li>
                                    <li><a href="{{route('login')}}">Login & Register Page</a></li>
                                    <li><a href="empty-{{route('cart')}}">Empty Cart Page</a></li>
                                    <li><a href="{{route('thank-you-page')}}">Thank You Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="{{route('cart')}}">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-gallery-right.html">Product Gallery
                                            Right</a> </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                    </li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                    </li>
                                    <li><a href="{{route('compare')}}">Compare Page</a></li>
                                    <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                    <li><a href="{{route('my-account')}}">Account Page</a></li>
                                    <li><a href="{{route('login')}}">Login & Register Page</a></li>
                                    <li><a href="empty-{{route('cart')}}">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-list.html">Blog List Page</a></li>
                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    
    @yield('content')
    
    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="{{route('index')}}"><img src="assets/images/logo/footer-logo.png" alt=""></a>
                                </div>
                                <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Services</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="{{route('my-account')}}">My Account</a></li>
                                            <li class="li"><a class="single-link" href="{{route('contact')}}">Contact</a></li>
                                            <li class="li"><a class="single-link" href="{{route('cart')}}">Shopping cart</a></li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                            <li class="li"><a class="single-link" href="{{route('login')}}">Services Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">My Account</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="{{route('my-account')}}">My Account</a></li>
                                            <li class="li"><a class="single-link" href="{{route('contact')}}">Contact</a></li>
                                            <li class="li"><a class="single-link" href="{{route('cart')}}">Shopping cart</a></li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                            <li class="li"><a class="single-link" href="{{route('login')}}">Services Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Contact Info</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">Address: Your Address Goes Here.</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                    <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                    <p class="mail"><a href="https://demo@example.com"> demo@example.com</a></p>
                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="line-shape-top line-height-1">
                        <div class="row flex-md-row-reverse align-items-center">
                            <div class="col-md-6 text-center text-md-end">
                                <div class="payment-mth"><a href="#"><img class="img img-fluid" src="assets/images/icons/payment.png" alt="payment-image"></a></div>
                            </div>
                            <div class="col-md-6 text-center text-md-start">
                                <p class="copy-text"> © 2021 <strong>Hmart</strong> Made With <i class="fa fa-heart" aria-hidden="true"></i> By <a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
                                        <strong> Codecarnival </strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
</div>
@endsection