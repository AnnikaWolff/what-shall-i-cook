@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h2>{{ $finish }}</h2>
        
        <div class="mt-5">
            <a href="{{ route('app.welcome') }}" class="btn">Danke</a>
        </div>
    </div>
@endsection