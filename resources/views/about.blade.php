
@extends('layout.main')


@include('partials.navbar')

@section('container')
    <h1>Halo</h1>
    <h2>Nama Saya {{ $name }}</h2>
    <p>{{ $email }}</p>
@endsection
