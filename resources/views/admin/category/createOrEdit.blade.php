@extends('admin.layouts.main')

@section('title', 'Category ' . mb_strtolower($type))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST"
                        action="@if ($type == 'create') {{ route('admin.category.store') }}@else{{ route('admin.category.update', $category->id) }} @endif">
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter category name..."
                                value="{{ $category->name ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
