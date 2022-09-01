@extends('layout.main')

@section('title', 'Order Tracking page')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Order Tracking</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Order Tracking</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!--order-tracking area start-->
<div class="pt-100px pb-100px">
    <div class="container">
        <div class="order-tracking">
            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
                given to you on your receipt and in the confirmation email you should have received.</p>
            <form action="#">
                <div class="row mb-n-30px">
                    <div class="col-12 mb-30px">
                        <label for="orderID">Order ID</label>
                        <input id="orderID" type="text" placeholder="Found in your order confirmation email.">
                    </div>
                    <div class="col-12 mb-30px">
                        <label for="billingEmail">Billing email</label>
                        <input id="billingEmail" type="text" placeholder="Email you used during checkout.">
                    </div>
                    <div class="col-12 text-center mb-30px">
                        <button class="btn btn-dark btn-outline-hover-dark">Track</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--order-tracking Policy area end-->
@endsection