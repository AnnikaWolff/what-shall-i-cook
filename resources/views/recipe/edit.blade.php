@extends('layouts.app')

@section('content')
<div class="container text-center">    
    <div class="row justify-content-center">
        <h1>
            @if (request('id')) Kochvorschlag bearbeiten
            @else Neuer Kochvorschlag
            @endif
        </h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('app.recipe.store') }}">
                        @csrf
                        <input type="hidden" name="edit" value="{{ $recipe->id }}">
                        <input type="hidden" name="foundSimilar" value="{{ $foundSimilar ?? '' }}">

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $recipe->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example" class="col-md-3 col-form-label text-md-right">Zusatz</label>

                            <div class="col-md-8">
                                <input id="example" type="text" class="form-control" name="example" value="{{ $recipe->example }}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    
                                    @if (isset($foundSimilar) && $foundSimilar === 1) 
                                        Ja, trotzdem 
                                    @endif    
                                    Speichern
                                    @if (request('id'))  
                                        und zurück
                                    @else 
                                        und neuen eintragen
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
