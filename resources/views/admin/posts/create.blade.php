@extends('admin.master')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">
            <label for="categories_id" class="form-label">Category:</label>
            <select class="form-select" id="categories_id" name="categories_id">
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label for="user_id" class="form-label">User:</label>
            <select class="form-select" id="user_id" name="user_id">
                @foreach ($users as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>

        <div class="mb-3 mt-3">
            <label for="img" class="form-label">Img:</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" placeholder="Enter content" name="content">

            </textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="views" class="form-label">Views:</label>
            <input type="number" class="form-control" id="views" placeholder="Enter views" name="views">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <a class="btn btn-danger" href="{{ route('posts.index') }}">Quay ve trang danh sach</a>

    </form>
@endsection
