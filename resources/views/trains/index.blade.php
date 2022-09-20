@extends('layouts.main')
@section('title', 'Trains')

@section('content')
    <h1>Treni disponibli</h1>

    @if (empty($trains))
        <h2>Non ci sono treni disponibli</h2>
    @else
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->Azienda }}</li>
            <li>{{ $train->Stazione_di_partenza }}</li>
            <li>{{ $train->Stazione_di_arrivo }}</li>
            <li>{{ $train->Orario_di_partenza }}</li>
            <li>{{ $train->Orario_di_arrivo }}</li>
            <li>{{ $train->Codice_treno }}</li>
            <li>{{ $train->Numero_carrozze }}</li>
        @endforeach
    </ul> 
    @endif
@endsection