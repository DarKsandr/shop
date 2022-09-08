@extends('admin.layouts.createOrEdit')

@section('title:1', 'Category')

@section('route:store', route('admin.category.store'))
@section('route:update', route('admin.category.update', $category->id ?? ''))

@section('content:1')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter category name..."
            value="{{ $category->name ?? '' }}" required>
    </div>
@endsection
