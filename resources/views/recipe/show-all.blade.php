@extends('layouts.app')


@section('content')
<div class="container text-center">
    <h1>Alle Kochvorschläge</h1>
    @if (! $recipes)
        Keine gefunden.
    @else 
        <div class="table">
            <table class="table table-striped table-dark">
                <thead>
                    <th>Name</th>
                    <th>Zusatz</th>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->name }}</td>
                            <td>... {{ $recipe->example }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        {{ $recipes->links() }}
        </div>
    @endif    
</div>
@endsection