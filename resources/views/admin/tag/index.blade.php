@extends('admin.layouts.main')

@section('title', 'Tag')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @include('admin.layouts.status')
                    <div class="text-end">
                        <a href="{{ route('admin.tag.create') }}" class="btn btn-success">Create</a>
                    </div>
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
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.tag.edit', $tag->id)}}" class="btn btn-primary">Edit</a>
                                            <form action="{{route('admin.tag.destroy', $tag->id)}}" method="post">
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection