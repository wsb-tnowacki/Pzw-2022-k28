@extends('start.layout')
@section('tytul')
Posty
@endsection
@section('tresc')

<form action="/posty" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" name="tytul" value="{{ old('tytul') }}" placeholder="Podaj tytuł posta">
    </div>
    @if ($errors->get('tytul'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tytul') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}"  placeholder="Podaj autora posta">
      </div>
      @if ($errors->get('autor'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('autor') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"  placeholder="Podaj adres email">
      </div>
      @if ($errors->get('email'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('email') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="tresc">Treść posta:</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4">{{ old('tresc') }}</textarea>
    </div>
    @if ($errors->get('tresc'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tresc') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Dodaj post</button>
  </form>
@endsection
@section('naglowek')
Dodaj post
@endsection

