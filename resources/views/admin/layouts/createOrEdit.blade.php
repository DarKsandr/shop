@extends('admin.layouts.main')

@section('title')
    @yield('title:1') {{mb_strtolower($type)}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST"
                        action="@if ($type == 'create') @yield('route:store') @else @yield('route:update') @endif">
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif
                        @csrf
                        
                        @yield('content:1')

                        <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection