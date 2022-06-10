@extends('layouts.main')

    @section('content')
    <div class='container text-center'>
        <h1>{{ $random->nameTH }}</h1>
    </div>
    <div class='container text-center'>
        <h1>{{ $random->nameEN }}</h1>
    </div>
    <div class='container text-center'>
        <img src="{{ $random->path }}">
    </div>
    <div class='container text-center'>
        {{ $random->description }}
    </div>
@endsection