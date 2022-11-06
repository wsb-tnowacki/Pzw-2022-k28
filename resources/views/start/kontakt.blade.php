@extends('start.layout')

@section('tresc')
@isset($id,$tekst)
    {{ "ID: $id Tekst: $tekst" }}
@endisset
{{-- "ID: $id Tekst: $tekst" --}}
@isset($zadania)
<ol>
    @foreach ($zadania as $zadanie)
        <li>{{ $zadanie }}</li>
    @endforeach
</ol>
@endisset

@isset($taski)
<ol>
    @foreach ($taski as $task)
        <li>{{ $task }}</li>
    @endforeach
</ol>
@endisset
@endsection
@section('naglowek')
Kontakt
@endsection
