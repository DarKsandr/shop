@extends('admin.layouts.createOrEdit')

@section('title:1', 'Product')

@section('route:store', route('admin.product.store'))
@section('route:update', route('admin.product.update', $product->id ?? ''))

@section('content:1')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name..." value="{{ $product->name ?? '' }}"
            required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sku</label>
        <input type="text" class="form-control" name="sku" placeholder="Enter sku..."
            value="{{ $product->sku ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Enter description..."
            required>{{ $product->description ?? '' }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select" required>
            @foreach (\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}" @if ($category->id == ($product->category_id ?? '')) selected @endif>{{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Tags</label>
        <input type="hidden" name="tags" value="">
        <select name="tags[]" id="tags-select" class="form-select" multiple>
            @foreach (\App\Models\Tag::all() as $tag)
                <option value="{{ $tag->id }}" @if ($product->tags->contains('id', $tag->id))
                    selected
                @endif>{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
@endsection

@section('script:after')
    <script>
        $("#tags-select").select2();
    </script>
@endsection