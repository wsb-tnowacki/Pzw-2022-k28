@extends('start.layout')
@section('tytul')
Szczegóły postu
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" name="tytul" value="{{ $post->tytul }}" disabled="disabled">
    </div>
    <div class="form-group">
        Data powstania postu: <b>{{ date('j F Y H:m:i',strtotime($post->created_at)) }}</b><br />
        Data modyfikacji postu: <b>{{ date('j F Y H:m:i',strtotime($post->updated_at)) }}</b>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{ $post->autor }}" disabled="disabled">
      </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="tresc">Treść postu:</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" disabled="disabled">{{ $post->tresc }}</textarea>
    </div>
    <a href="{{ route('posty.edit', $post->id) }}" ><button type="button" class="btn btn-primary m-1">Powrót do listy</button></a>
    @auth
    <a href="{{ route('posty.edit', $post->id) }}" ><button type="button" class="btn btn-success m-1">Edycja</button></a>
    <button type="submit" class="btn btn-danger m-1 inline">Usuń</button>
    @endauth
    
    </form>
@endsection
@section('naglowek')
Szczegóły postu
@endsection

