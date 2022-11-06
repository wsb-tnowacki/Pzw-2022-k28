@extends('layout')

@section('tekst1')
@isset($id,$tekst)
    {{ "ID: $id Tekst: $tekst" }}
@endisset
{{-- "ID: $id Tekst: $tekst" --}}
@endsection
@section('tekst2')
@isset($zadania)
<ol>
    @foreach ($zadania as $zadanie)
        <li>{{ $zadanie }}</li>
    @endforeach
</ol>
@endisset
@endsection
@section('tekst3')
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
