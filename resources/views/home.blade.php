@extends('layouts.app')

@section('title', 'Treni in Partenza Oggi')


@section('content')
    @foreach ($trains as $train)
        <ul class="container d-flex-column mt-5">
            <li>Compagnia: {{ $train->company }}</li>
            <li>Stazione di partenza: {{ $train->departure_station }}</li>
            <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
            <li>Ora di Partenza prevista: {{ $train->departure_time }}</li>
            <li>Ora di Arrivo prevista {{ $train->arrival_time }}</li>
            <li>ID Treno: {{ $train->train_code }}</li>
            <li>Carrozze Disponibili: {{ $train->total_carriages_num }}</li>
            <li>
                Attualemente il treno risulta in orario?:
                @if ($train->in_time)
                    Si
                @else
                    No
                @endif
            </li>

            <li>
                La corsa è stata cancellata?:
                @if ($train->cancelled)
                    Si
                @else
                    No
                @endif
            </li>
        </ul>
    @endforeach
@endsection
