@extends('layouts.app')


@section('content')
<div class="container text-center">
    <h1>Eigene Kochvorschläge</h1>
    @if (! $recipes)
        Du hast noch keine eingetragen.
    @else 
        <div class="table">
            <table class="table table-striped table-dark">
                <thead>
                    <th>Name</th>
                    <th>Zusatz</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->name }}</td>
                            <td>... {{ $recipe->example }}</td>
                        <td><a href="{{ route('app.recipe.edit', ['id' => $recipe->id]) }}"><i class="fas fa-pencil-alt purple"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        {{ $recipes->links() }}
        </div>
    @endif    
</div>
@endsection