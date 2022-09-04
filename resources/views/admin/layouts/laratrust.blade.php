@extends('admin.layouts.main')

@section('head:before')
    <link href="{{ mix('laratrust.css', 'vendor/laratrust') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @foreach (['error', 'warning', 'success'] as $msg)
                @if (Session::has('laratrust-' . $msg))
                    <div class="alert-{{ $msg }}" role="alert">
                        <p>{{ Session::get('laratrust-' . $msg) }}</p>
                    </div>
                @endif
            @endforeach
            
            @yield('content:1')
        </div>
    </div>
@endsection
