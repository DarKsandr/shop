@extends('admin.layouts.createOrEdit')

@section('title:1', 'Tag')

@section('route:store', route('admin.tag.store'))
@section('route:update', route('admin.tag.update', $tag->id ?? ''))

@section('content:1')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name..." value="{{ $tag->name ?? '' }}"
            required>
    </div>
@endsection
