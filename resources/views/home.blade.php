@extends('layout.app')

@section('main_content')
   <section>
        @foreach ($trip as $single_trip)
            <h3>Lugo di partenza</h3>
            <span>{{ $single_trip->partenza }}</span>
            <h3>Lugo di destinazione</h3>
            <span>{{ $single_trip->destinazione }}</span>
            <h4>Partenza:</h4>
            <span>{{ $single_trip->data_partenza }}</span>
            <h4>Ritorno:</h4>
            <span>{{ $single_trip->data_ritorno }}</span>
            <h4>Passeggeri: {{ $single_trip->persone }}</h4>
            <h3>Prezzo: {{ $single_trip->prezzo }}€</h3>
        @endforeach
   </section>
@endsection