@extends('admin.layouts.main')

@section('title', 'Product')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @include('admin.layouts.status')
                    <div class="text-end">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-success">Create</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Sku</td>
                                <td>Description</td>
                                <td>Category</td>
                                <td>Tags</td>
                                <td>Created at</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td title="{{$product->description}}">{{Str::limit($product->description, 150)}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->tags_view()}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                                            <form action="{{route('admin.product.destroy', $product->id)}}" method="post">
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
                </div>
            </div>
        </div>
    </div>
@endsection