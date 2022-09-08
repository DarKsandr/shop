@extends('admin.layouts.main')

@section('title', 'Product')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @include('admin.layouts.status')
                    <div class="text-end">
                        <a href="@yield('route:create')" class="btn btn-success">Create</a>
                    </div>
                    @yield('table')
                </div>
            </div>
        </div>
    </div>
@endsection