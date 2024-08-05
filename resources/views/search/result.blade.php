@extends('layouts.client.main')
@section('content')
<div class="container">
    <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>
    
    @if($posts->count() > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{ $posts->links() }}
    @else
        <p>Không tìm thấy bài viết nào phù hợp.</p>
    @endif
</div>
@endsection