@extends('admin.master')

@section('title', 'Quản lý Tin tức')

@section('content')
    @include('admin.tab')
    <h2>
        <a class="btn btn-success" href="{{ route('posts.create') }}">Create</a>
    </h2>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Img</th>
                        <th>Content</th>
                        <th>Views</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->categories_id }}</td>y
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset($item->img) }}" alt="" width="100px">
                            </td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->views }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('posts.show', $item) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit', $item) }}">Edit</a>

                                <form action="{{ route('posts.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mt-1" onclick="return confirm('Co chac chan xoa khong')" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{ $data->links() }}
@endsection
