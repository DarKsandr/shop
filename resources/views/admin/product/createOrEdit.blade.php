@extends('admin.layouts.main')

@section('title', 'Product ' . mb_strtolower($type))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST"
                        action="@if ($type == 'create') {{ route('admin.product.store') }}@else{{ route('admin.product.update', $product->id) }} @endif">
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name..."
                                value="{{ $product->name ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sku</label>
                            <input type="text" class="form-control" name="sku" placeholder="Enter sku..."
                                value="{{ $product->sku ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Enter description..." required>{{$product->description ?? ''}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-select" required>
                                @foreach (\App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}" @if ($category->id == ($product->category_id ?? ''))
                                        selected
                                    @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <select name="tags[]" class="form-select" multiple>
                                @foreach (\App\Models\Tag::all() as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection