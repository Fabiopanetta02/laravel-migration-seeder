@extends('layouts.main')
@section('title', 'Trains')

@section('content')
    <h1>Treni disponibli</h1>

    @if (empty($trains))
        <h2>Non ci sono treni disponibli</h2>
    @else
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->azienda }}</li>
        @endforeach
    </ul> 
    @endif
@endsection