@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/post?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
            @if ($post->image)
                <div style="max-height:350px;overflow:hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}." class="img-fluid" alt="{{ $post->category->name }}">
            @endif
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/post">Back to Posts</a>
        </div>
    </div>
</div>
@endsection