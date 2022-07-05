@extends('layout.main')


@include('partials.navbar')

@section('container')
    @foreach ($posts as $post)

    <article class="mb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>
            By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}">Read More</a>
    </article>
        
    @endforeach
@endsection

