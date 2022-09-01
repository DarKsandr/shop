@extends('layouts.main')

@section('title', 'Login')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Login</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>
                    @include('components.auth-validation-errors')
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <input type="text" name="email" placeholder="Email" />
                                        <input type="password" name="password" placeholder="Password" />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <label>
                                                    <input type="checkbox" name="remember" />
                                                    Remember me
                                                </label>
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <input type="text" name="name" placeholder="Username" required />
                                        <input name="email" placeholder="Email" type="email" required />
                                        <input type="password" name="password" placeholder="Password" required />
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection