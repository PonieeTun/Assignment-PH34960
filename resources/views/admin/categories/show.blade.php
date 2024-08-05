@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <div>
            <strong>Name:</strong> {{ $category->name }}
        </div>
        <div>
            <strong>Slug:</strong> {{ $category->slug }}
        </div>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
    </div>
@endsection
