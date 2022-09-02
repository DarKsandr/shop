@extends('layouts.main')

@section('title', '404 page')

@section('content')
<div class="section-404 section" data-bg-image="/assets/images/404/bg-404.webp">
    <div class="container">
        <div class="content-404">
            <h1 class="title">Oops!</h1>
            <h2 class="sub-title">Page not found!</h2>
            <p>You could either go back or go to homepage</p>
            <div class="buttons">
                <a class="btn btn-primary btn-outline-hover-dark" href="{{url()->previous()}}">Go back</a>
                <a class="btn btn-dark btn-outline-hover-dark" href="{{route('index')}}">Homepage</a>
            </div>
        </div>
    </div>
</div>
@endsection