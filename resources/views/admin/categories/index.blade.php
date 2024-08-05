@extends('admin.master')

@section('title', 'Quản lý Danh mục Tin tức')

@section('content')
    @include('admin.tab')
    <h2>
        <a class="btn btn-success" href="{{ route('categories.create') }}">Create</a>
    </h2>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mt-1" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $categories->links() }}
@endsection
