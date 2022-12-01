@extends('start.layout')
@section('tytul')
Szczegóły postu
@endsection
@section('tresc')
<form action="{{ route('posty.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
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
      <input type="text" class="form-control" id="tytul" name="tytul" value="@if(old('tytul') !== null) {{ old('tytul') }} @else {{ $post->tytul }}@endif" >
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
        <input type="text" class="form-control" id="autor" name="autor" value="@if(old('autor') !== null) {{ old('autor') }} @else {{ $post->autor }}@endif" >
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
        <input type="email" class="form-control" id="email" name="email" value="@if(old('email') !== null) {{ old('email') }} @else {{ $post->email }}@endif" >
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
      <label for="tresc">Treść postu:</label>
      <textarea class="form-control" id="tresc" name="tresc" rows="4" >@if(old('tresc') !== null) {{ old('tresc') }} @else {{ $post->tresc }}@endif</textarea>
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
    <a href="{{ route('posty.index') }}" ><button type="button" class="btn btn-primary">Powrót do listy</button></a>
    <button type="submit" class="btn btn-success">Wprowadź zmiany</button>
  </form>
@endsection
@section('naglowek')
Szczegóły postu
@endsection

