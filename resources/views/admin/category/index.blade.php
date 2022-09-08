@extends('admin.layouts.index')

@section('title', 'Category')

@section('route:create', route('admin.category.create'))

@section('table')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Created at</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
