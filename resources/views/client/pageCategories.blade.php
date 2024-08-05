
@extends('layouts.client.main')
@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="row g-4">
                    @foreach($posts as $post)
                        <div class="col-md-6">
                            <div class="position-relative overflow-hidden rounded">
                                <img src="{{ $post->img }}" class="img-fluid rounded img-zoomin w-100" alt="{{ $post->title }}">
                                
                                <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> {{ number_format($post->views / 1000, 1) }}k Views</a>
                                    
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <a href="{{url('/detail/'.$post->id)}}" class="h4 text-dark mb-0 link-hover">{{ $post->title }}</a>
                            </div>
                            <p class="mt-3 mb-4">{{ Str::limit($post->content, 150) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection