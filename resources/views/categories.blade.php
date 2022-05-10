@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Post by Categories : {{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $cat)
            <div class="col-md-4">
               <a href="/post?category={{ $cat->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x400?{{ $cat->name }}" class="card-img" alt="https://source.unsplash.com/500x400?{{ $cat->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $cat->name }}</h5> 
                        </div>
                    </div>
               </a>
            </div>
            @endforeach
        </div>
    </div>


@endsection