@extends('layouts.main')

@section('title', 'Product page')

@section('script.after')
    <script src="{{ asset('assets/shop/filter.js') }}"></script>

    @foreach (config('filter.items') as $item)
        {!! app($item)->script() !!}
    @endforeach
@endsection

@section('style.after')
    <link rel="stylesheet" href="{{ asset('/assets/shop/filter.css') }}">
@endsection

@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Product Page</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="shop-view-type @if(!isset($_COOKIE["shop-view-type"]) || $_COOKIE["shop-view-type"] == '#shop-grid')active @endif" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab" class="shop-view-type @if(($_COOKIE["shop-view-type"] ?? '') == '#shop-list')active @endif">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="form-floating">
                            <select class="form-select" id="sort" aria-label="Floating label select example">
                                @foreach ([
                                    (object) ['value' => '', 'title' => 'Default'], 
                                    (object) ['value' => 'search[sort]=name&search[sort_type]=asc', 'title' => 'Name, A to Z'], 
                                    (object) ['value' => 'search[sort]=name&search[sort_type]=desc', 'title' => 'Name, Z to A'], 
                                    (object) ['value' => 'search[sort]=real_price&search[sort_type]=asc', 'title' => 'Price, low to high'], 
                                    (object) ['value' => 'search[sort]=real_price&search[sort_type]=desc', 'title' => 'Price, high to low']
                                ] as $item)
                                    <option value="{{ $item->value }}" @if ($item->value ==
                                        'search[sort]=' . request()->get('sort') . '&search[sort_type]=' . request()->get('sort_type')) selected @endif>
                                        {{ $item->title }}</option>
                                @endforeach
                            </select>
                            <label for="sort">Sort By:</label>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area" id="product_container">
                        @include('shop.products')
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <form id="filter">
                        <div class="shop-sidebar-wrap">
                            @foreach (config('filter.items') as $item)
                                {{app($item)->template()}}
                            @endforeach
                            <!-- Sidebar single item -->
                            {{-- <div class="sidebar-widget">
                        <h4 class="sidebar-title">Color</h4>
                        <div class="sidebar-widget-color">
                            <ul class="d-flex flex-wrap">
                                <li><a href="#" class="color-1"></a></li>
                                <li><a href="#" class="color-2"></a></li>
                                <li><a href="#" class="color-3"></a></li>
                                <li><a href="#" class="color-4"></a></li>
                                <li><a href="#" class="color-5"></a></li>
                                <li><a href="#" class="color-6"></a></li>
                                <li><a href="#" class="color-7"></a></li>
                                <li><a href="#" class="color-8"></a></li>
                                <li><a href="#" class="color-9"></a></li>
                                <li><a href="#" class="color-10"></a></li>
                                <li><a href="#" class="color-11"></a></li>
                                <li><a href="#" class="color-12"></a></li>
                                <li><a href="#" class="color-13"></a></li>
                                <li><a href="#" class="color-14"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Size</h4>
                        <div class="sidebar-widget-size">
                            <ul>
                                <li><a href="#" class="selected m-0"> All
                                        <span>(6)</span> </a></li>
                                <li><a href="#" class=""> S <span>(12)</span> </a>
                                </li>
                                <li><a href="#" class=""> M <span>(21)</span> </a>
                                </li>
                                <li><a href="#" class=""> L <span>(16)</span> </a>
                                </li>
                                <li><a href="#" class=""> XL <span>(22)</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Brands</h4>
                        <div class="sidebar-widget-brand">
                            <ul>
                                <li><a href="#" class="selected m-0"> Lakmeeto<span>(65)</span> </a></li>
                                <li><a href="#" class=""> Beautifill <span>(14)</span></a></li>
                                <li><a href="#" class=""> Made In GD <span>(21)</span></a></li>
                                <li><a href="#" class=""> Pecifico <span>(16)</span></a></li>
                                <li><a href="#" class=""> Xlovgtir<span>(12)</span></a></li>
                            </ul>
                        </div>
                    </div> --}}
                            <!-- Sidebar single item -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection
