@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>{{ config('app.name') }}</h1>
        
        <div class="mt-5">
            <a href="{{ route('app.recipe.show') }}" class="btn">Sag's mir!</a>
        </div>
    </div>
@endsection