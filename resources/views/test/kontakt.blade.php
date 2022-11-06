@extends('layout')

@section('tekst1')
{{-- "ID: $id Tekst: $tekst" --}}
@endsection
@section('tekst2')
<ol>
    @foreach ($zadania as $zadanie)
        <li>{{ $zadanie }}</li>
    @endforeach
</ol>
@endsection
@section('tekst3')
Treść tekstu 3
@endsection
@section('naglowek')
O nas
@endsection
