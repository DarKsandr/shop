@extends('layouts.main')

@section('title', 'One')

@section('content')
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                data-bg-image="/assets/images/hero/bg/hero-bg-2-1.webp">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Easy Your Life <br>
                                    For Smart Device </h2>
                                <span class="price">
                                    <span class="mini-title">Only</span>
                                    <span class="amount">$24.00</span>
                                </span>
                                <a href="{{route('shop')}}" class="btn btn-primary text-capitalize">Shop All
                                    Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                            <div class="show-case">
                                <div class="hero-slide-image slider-2">
                                    <img src="/assets/images/hero/inner-img/hero-2-1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                data-bg-image="/assets/images/hero/bg/hero-bg-2-1.webp">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Easy Your Life <br>
                                    For Smart Device </h2>
                                <span class="price">
                                    <span class="mini-title">Only</span>
                                    <span class="amount">$24.00</span>
                                </span>
                                <a href="{{route('shop')}}" class="btn btn-primary text-capitalize">Shop All
                                    Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                            <div class="show-case">
                                <div class="hero-slide-image slider-2">
                                    <img src="/assets/images/hero/inner-img/hero-2-1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->
<!-- Banner Area Start -->
<div class="banner-area style-two pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-banner nth-child-2 mb-lm-30px">
                    <img src="/assets/images/banner/6.webp" alt="">
                    <div class="banner-content nth-child-3">
                        <h3 class="title">Speaker</h3>
                        <span class="category">From $69.00</span>
                        <a href="{{route('shop')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-banner nth-child-2">
                    <img src="/assets/images/banner/7.webp" alt="">
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Smartphone</h3>
                        <span class="category">From $95.00</span>
                        <a href="{{route('shop')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Product Area Start -->
<div class="product-area pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">New Products</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="row mb-n-30px">
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/1.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Modern Smart Phone
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-10%</span>
                                <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/2.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/2.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Bluetooth Headphone
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$48.50</span>
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/3.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/3.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Smart Music Box
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/4.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Air Pods 25Hjkl Black
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/5.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/5.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Smart Hand Watch
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-8%</span>
                                <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/6.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/6.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Smart Table Camera
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$138.50</span>
                                    <span class="new">$112.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/7.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Round Pocket Router
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-5%</span>
                            </span>
                            <div class="thumb">
                                <a href="{{route('product', 1)}}" class="image">
                                    <img src="/assets/images/product-image/8.webp" alt="Product" />
                                    <img class="hover-image" src="/assets/images/product-image/8.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="{{route('product', 1)}}">Power Bank 10000Mhp
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$260.00</span>
                                    <span class="new">$238.50</span>
                                </span>
                            </div>
                            <div class="actions">
                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                <button class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="pe-7s-look"></i></button>
                                <button class="action compare" title="Compare" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
<!-- Banner Area Start -->
<div class="banner-area style-three pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-banner mb-lm-30px">
                    <img src="/assets/images/banner/8.webp" alt="">
                    <div class="banner-content nth-child-3">
                        <h3 class="title">Smart Watch For <br>
                            Your Hand</h3>
                        <span class="category">From $69.00</span>
                        <a href="{{route('shop')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-banner">
                    <img src="/assets/images/banner/9.webp" alt="">
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Smart Watch For <br>
                            Your Hand</h3>
                        <span class="category">From $95.00</span>
                        <a href="{{route('shop')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Feature product area start -->
<div class="feature-product-area pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">Featured Offers</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <div class="feature-product-slider swiper-container slider-nav-style-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide feature-right-content">
                    <div class="image-side">
                        <img src="/assets/images/feature-image/2.webp" alt="">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="{{route('product', 1)}}">Ladies Smart Watch</a></h5>
                            <span class="price">
                                <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide feature-right-content">
                    <div class="image-side">
                        <img src="/assets/images/feature-image/3.webp" alt="">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="{{route('product', 1)}}">Ladies Smart Watch</a></h5>
                            <span class="price">
                                <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide feature-right-content">
                    <div class="image-side">
                        <img src="/assets/images/feature-image/2.webp" alt="">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="{{route('product', 1)}}">Ladies Smart Watch</a></h5>
                            <span class="price">
                                <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide feature-right-content">
                    <div class="image-side">
                        <img src="/assets/images/feature-image/3.webp" alt="">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="{{route('product', 1)}}">Ladies Smart Watch</a></h5>
                            <span class="price">
                                <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Feature product area End -->
<!-- Fashion Area Start -->
<div class="fashion-area" data-bg-image="/assets/images/fashion/fashion-bg.webp">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 text-center">
                <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                <a href="{{route('shop')}}" class="btn btn-primary text-capitalize m-auto">Shop All Devices</a>
            </div>
        </div>
    </div>
</div>
<!-- Fashion Area End -->
<!-- Feature Area Srart -->
<div class="feature-area pt-100px pb-100px">
    <div class="container">
        <div class="feature-wrapper">
            <div class="single-feture-col mb-md-30px mb-lm-30px">
                <!-- single item -->
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/1.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free Shipping</h4>
                        <span class="sub-title">Capped at $39 per order</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="single-feture-col mb-md-30px mb-lm-30px">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/2.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Card Payments</h4>
                        <span class="sub-title">12 Months Installments</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="single-feture-col">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/3.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Returns</h4>
                        <span class="sub-title">Shop With Confidence</span>
                    </div>
                </div>
                <!-- single item -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End -->
<!-- Blog area start from here -->
<div class="main-blog-area pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30px0px">
                    <h2 class="title">Latest Blog</h2>
                    <p> There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 mb-xs-30px">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('blog')}}"><img src="/assets/images/blog-image/1.webp"
                                class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                            <span><a class="blog-author" href="{{route('blog')}}"><i class="fa fa-user"
                                        aria-hidden="true"></i> Wild Nick</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="{{route('blog-single', 1)}}">10
                                Quick Tips About Smart Product</a></h5>
                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                        <a href="{{route('blog-single', 1)}}" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            <div class="col-lg-6 col-sm-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('blog-single', 1)}}"><img src="/assets/images/blog-image/2.webp"
                                class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                            <span><a class="blog-author" href="{{route('blog')}}"><i class="fa fa-user"
                                        aria-hidden="true"></i> Oaklee Odom</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="{{route('blog-single', 1)}}">5
                                Real-Life Lessons About Smart Product</a></h5>
                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                        <a href="{{route('blog-single', 1)}}" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
        </div>
    </div>
</div>
<!-- Blog area end here -->
@endsection

@section('modal')
    @include('product.modal')
@endsection