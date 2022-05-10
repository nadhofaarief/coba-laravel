@extends('layouts.main')

@section('container') 
    
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/post">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}" />
          @endif
          @if (request('user'))
              <input type="hidden" name="user" value="{{ request('user') }}" />
          @endif

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

@if ($post->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="{{ $post[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h3>
      <p>
          <small class="text-muted">
            By. <a href="/post?user={{ $post[0]->user->username }}" class="text-decoration-none">{{ $post[0]->user->name }}</a> in <a href="/post?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a> {{ $post[0]->created_at->diffForHumans() }}
          </small>
      </p>
      <p class="card-text">{{ $post[0]->excerpt }}</p>
      <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read More..</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $p)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                    <a href="/post?category={{ $p->category->slug }}" class="text-decoration-none text-white">{{ $p->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $p->title }}</h5>
                  <p class="card-text">{{ $p->excerpt }}</p>
                  <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read More..</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else 
<p class="text-center fs-4">No Post Found.</p>   
@endif

<div class="d-flex justify-content-center">
  {{ $post->links() }}
</div>


@endsection