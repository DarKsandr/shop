@extends('admin.layouts.index')

@section('title', 'Product')

@section('route:create', route('admin.product.create'))

@section('table')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Sku</td>
                <td class="w-25">Description</td>
                <td>Category</td>
                <td>Is New</td>
                <td>Price</td>
                <td>Discount</td>
                <td>Tags</td>
                <td>Created at</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td title="{{ $product->description }}">{{ Str::limit($product->description, 150) }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->new ? "True": "False" }}</td>
                    <td>{{ $product->price_view }}</td>
                    <td>{{ $product->discount_view() }}</td>
                    <td>{{ $product->tags_view() }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="post">
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
