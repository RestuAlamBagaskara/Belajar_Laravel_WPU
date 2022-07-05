@extends('layout.main')


@include('partials.navbar')

@section('container')

    <h1>category Categories</h1>
    @foreach ($categories as $category)

    <article class="mb-4">
        <h2>
            <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>
        </h2>
    </article>
        
    @endforeach
@endsection

 