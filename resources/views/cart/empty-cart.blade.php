@extends('layout.main')

@section('title', 'Empty Cart page')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Empty Cart</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Empty Cart</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- Empty Cart area start -->
<div class="empty-cart-area pb-100px pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-heading">
                    <h2>Your cart item</h2>
                </div>
                <div class="empty-text-contant text-center">
                    <i class="pe-7s-shopbag"></i>
                    <h3>There are no more items in your cart</h3>
                    <a class="empty-cart-btn" href="shop-4-column.html">
                        <i class="fa fa-arrow-left"> </i> Continue shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Empty Cart area end -->
@endsection