@extends('admin.master')

@section('title', 'Quản lý Tin tức')

@section('content')
    @include('admin.tab')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Img</th>
                        <th>Content</th>
                        <th>Views</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <img src="{{ $post->img }}" alt="" width="100px">
                        </td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->views }}</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a class="btn btn-danger" href="{{ route('posts.index') }}">Quay ve trang danh sach</a>
@endsection
