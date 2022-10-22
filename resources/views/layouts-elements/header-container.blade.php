<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-3 col">
            <div class="header-logo">
                <a href="{{ route('index') }}"><img src="/assets/images/logo/logo.png" alt="Site Logo" /></a>
            </div>
        </div>
        @if(isset($search))
        <div class="col-lg-6 d-none d-lg-block">
            <div class="search-element">
                <form id="search-form">
                    <input type="hidden" id="route-product" value="{{route('product', '@id')}}">
                    <input type="text" placeholder="Search..." id="search" class="p-2" autocomplete="off"/>
                    <button><i class="pe-7s-search"></i></button>
                    <ul id="search-list" style="display:none;"></ul>
                </form>
            </div>
        </div>
        @endif
        <div class="col-lg-3 col">
            <div class="header-actions">
                <!-- Single Wedge Start -->
                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                    <i class="pe-7s-like"></i>
                </a>
                <!-- Single Wedge End -->
                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                    <i class="pe-7s-shopbag"></i>
                    <span class="header-action-num">0</span>
                    <!-- <span class="cart-amount">€30.00</span> -->
                </a>
                <a href="#offcanvas-mobile-menu"
                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                    <i class="pe-7s-menu"></i>
                </a>
            </div>
        </div>
    </div>
</div>