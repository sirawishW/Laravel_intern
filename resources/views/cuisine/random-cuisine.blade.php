@extends('layouts.homepage')

@section('content')
<!-- <div class='container text-center'>
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
</div> -->
<div class="row d-flex ps-5">
    <div class="card mt-4" style="border-radius: 0.5rem; width: 27rem;">
        <h1 class='container text-center pt-5'>Eatomizer</h1>
        <div class='container text-center'>
            Don't know what to eat? , let us decide it for you
        </div>
        
        <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
            <button type="button" id="randomBtn" class="btn btn-dark rounded-pill">
                Random
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
            <button type="button" id="addBtn" class="btn btn-dark rounded-pill">
                Add
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
            <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill">
                <a href="{{ route('cuisines.index') }}" class="text-white" style="text-decoration:none">All Cuisine</a>
            </button>
        </div>
        <br>
    </div>
</div>
@endsection