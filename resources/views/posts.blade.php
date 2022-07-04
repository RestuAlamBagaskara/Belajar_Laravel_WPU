@extends('layout.main')


@include('partials.navbar')

@section('container')
    @foreach ($Artikel as $artikel)

    <article class="mb-4">
        <h2>
            <a href="/posts/{{ $artikel["slug"] }}">{{ $artikel['title'] }}</a>
        </h2>
        <h4>By : {{ $artikel['author'] }}</h4>
        <p>{{ $artikel['Body'] }}</p>
    </article>
        
    @endforeach
@endsection

