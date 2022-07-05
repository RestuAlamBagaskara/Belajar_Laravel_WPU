@extends('layout.main')

@include('partials.navbar')
@section('container')

    <article>
        <h2>{{ $post->title }}</h2>
        <h5>
            By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
            {!! $post->body !!}
    </article>
    
    <a href="/blog">Back</a>
@endsection