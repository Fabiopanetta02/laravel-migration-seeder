@extends('layouts.main')
@section('title', 'Trains')

@section('content')
    <h1>Treni disponibli</h1>

    @if (empty($trains))
        <h2>Non ci sono treni disponibli</h2>
    @else
    <div class="d-flex flex-wrap">
        @foreach ($trains as $train)
            <div class="card mb-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Partenza: {{ $train->stazione_di_partenza }}</h6>
                    <p class="card-text">Arrivo: {{ $train->stazione_di_arrivo }}</p>
                    <p class="card-text">Orario Partenza: {{ $train->orario_di_partenza }}</p>
                    <p class="card-text">Orario Arrivo: {{ $train->orario_di_arrivo }}</p>
                    <p class="card-text">Codice Treno: {{ $train->codice_treno }}</p>
                    <p class="card-text">Carrozza: {{ $train->numero_carrozze }}</p>
                    <p class="card-text">In Orario: {{ $train->in_orario }}</p>
                    <p class="card-text">Cancellato: {{ $train->cancellato }}</p>
                </div>
            </div>
        @endforeach
    </div>
    </ul> 
    @endif
@endsection