@extends('layouts.app')


@section('content')
<div class="container text-center">
    <h1>Wie wär's mit</h1>
    @if (! $recipe)
        Nichts gefunden.
    @else 
        <div class="recipe">
            <div class="recipe-name">
                {{ $recipe->name }}    
            </div>
            
            <div class="recipe-example">
                ... {{ $recipe->example }}
            </div>
        </div>
    @endif
    
    <div class="row mt-5">
        <div class="col"><a href="{{ route('app.recipe.show') }}" class="btn">{{ $no }}</a></div>
        <div class="col"><a href="{{ route('app.finish') }}" class="btn">{{ $yes }}</a></div>
    </div>
</div>
@endsection