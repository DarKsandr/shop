@extends('layouts.main')

@section('title', 'Blog page')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Blog</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- Blog Area Start -->
<div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-last col-md-12 order-md-first">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/3.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Wild Nick</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">The Pros and Cons of Smart Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog ">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/4.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Oaklee Odom</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">20 Insightful Quotes About Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-post-media swiper-container slider-nav-style-1 small-nav">
                                <div class="blog-gallery swiper-wrapper">
                                    <div class="gallery-item swiper-slide">
                                        <a href="#"><img src="assets/images/blog-image/5.webp" alt="blog" /></a>
                                    </div>
                                    <div class="gallery-item swiper-slide">
                                        <a href="#"><img src="assets/images/blog-image/3.webp" alt="blog" /></a>
                                    </div>
                                    <div class="gallery-item swiper-slide">
                                        <a href="#"><img src="assets/images/blog-image/4.webp" alt="blog" /></a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Oslad Den</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">12 coz You Shouldn't Invest in Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog ">
                            <div class="blog-post-media">
                                <div class="blog-post-audio">
                                    <iframe class="ratio ratio-16x9" allow="autoplay"
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i>Odrl sala</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">The Biggest Problem With Smart Product</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-post-media">
                                <div class="blog-post-video position-relative">
                                    <a class="venobox venoboxvid video-icon overflow-hidden vbox-item"
                                        data-gall="gall-video" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/Hx64uvCA_zQ">
                                        <img class="img-responsive w-100 thumb-image ratio ratio-16x9"
                                            src="assets/images/blog-image/5.webp" alt="">
                                        <img class="icon" src="assets/images/icons/icon-youtube-play.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Awesom Suk</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">20 Fabulous Infographics About Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/3.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Dom Aokle</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">This Week's Top Stories About Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/4.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i>Tanvir Boss</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html">The 13 Best Pinterest Boards for Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-md-6 mb-50px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/5.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                aria-hidden="true"></i> Omite Andle</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link"
                                        href="blog-single-left-sidebar.html"> Books About Smart Product You Should
                                        Read</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!--  Pagination Area Start -->
                <div class="pro-pagination-style text-center mt-0 mb-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="pages">
                        <ul>
                            <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="li"><a class="page-link active" href="#">1</a></li>
                            <li class="li"><a class="page-link" href="#">2</a></li>
                            <li class="li"><a class="page-link" href="#">3</a></li>
                            <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--  Pagination Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-4 order-lg-first col-md-12 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
                data-aos-delay="200">
                <div class="blog-sidebar mr-20px">
                    <!-- Sidebar single item -->
                    <div class="search-widget">
                        <form action="#">
                            <input placeholder="Search" type="text" />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Sidebar single item -->
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-group">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="category-post">
                                <ul>
                                    <li><a href="#" class="selected m-0">Accesasories<span>(6)</span> </a></li>
                                    <li><a href="#" class="">Computer<span>(4)</span> </a></li>
                                    <li><a href="#" class="">Covid-19<span>(5)</span> </a></li>
                                    <li><a href="#" class="">Electronics<span>(3)</span> </a></li>
                                    <li><a href="#" class="">Frame Sunglasses<span>(7)</span> </a></li>
                                    <li><a href="#" class="">Furniture<span>(9)</span> </a></li>
                                    <li><a href="#" class="">Genuine Leather<span>(8)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-title">Recent Post</h3>
                            <div class="recent-post-widget">
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="assets/images/blog-image/post-1.webp" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27 jun,
                                            2022</span>
                                        <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                                amet conse adip</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="assets/images/blog-image/post-2.webp" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27 jun,
                                            2022</span>
                                        <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                                amet conse adip</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="assets/images/blog-image/post-3.webp" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27 jun,
                                            2022</span>
                                        <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                                amet conse adip</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="assets/images/blog-image/post-1.webp" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27 jun,
                                            2022</span>
                                        <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                                amet conse adip</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-title">Archives</h3>
                            <div class="category-post">
                                <ul>
                                    <li><a href="#" class="selected m-0">March 2018</a></li>
                                    <li><a href="#" class=""> February 2018</a></li>
                                    <li><a href="#" class="">January 2021</a></li>
                                    <li><a href="#" class="">September 2019</a></li>
                                    <li><a href="#" class="">March 2018</a></li>
                                    <li><a href="#" class="">July 2021</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-title">Popular Tag</h3>
                            <div class="sidebar-widget-tag d-inline-block">
                                <ul>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">Smart TV</a></li>
                                    <li><a href="#">Pendrive</a></li>
                                    <li><a href="#">Smartwatch</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!-- Blag Area End -->
@endsection