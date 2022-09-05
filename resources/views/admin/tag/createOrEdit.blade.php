@extends('admin.layouts.main')

@section('title', 'Tag ' . mb_strtolower($type))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST"
                        action="@if ($type == 'create') {{ route('admin.tag.store') }}@else{{ route('admin.tag.update', $tag->id) }} @endif">
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name..."
                                value="{{ $tag->name ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ ucfirst($type) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection