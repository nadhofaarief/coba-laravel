@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Post Categories : {{ $category }} </h1>

    @foreach ($posts as $p)
    <article>
        <h2><a href="/post/{{ $p->slug }}">{{ $p->title }}</a></h2>
        <p>{{ $p->excerpt }}</p>
    </article>
    @endforeach


@endsection