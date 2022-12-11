@extends('start.layout')
@section('tytul')
Posty
@endsection
@section('naglowek')
Lista postów
@endsection
@section('tresc')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Autor</th>
        <th scope="col">Data powstania</th>
        @auth
        <th scope="col">Akcja</th>
        @endauth

      </tr>
    </thead>
    <tbody>
      @php 
        //$lp = 1; 
        $lp=$posty->firstItem();
      @endphp
      @foreach ($posty as $post)
      <tr>
        <th scope="row">{{ $lp++ }} id:{{ $post->id }}</th>
        <td><a href="{{ route('posty.show', $post->id) }}"> {{ $post->tytul }}</a></td>
        <td>{{ $post->autor }} / {{ $post->user->name }}</td>
        <td>{{ date('j F Y',strtotime($post->created_at)) }}</td>
        @auth
        <td>
          <form class="form-inline" method="POST" action="{{ route('posty.destroy', $post->id) }}">
          <a href="{{ route('posty.edit', $post->id) }}" ><button type="button" class="btn btn-success">E</button></a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger m-1 inline">X</button>
          </form>
        </td>
        @endauth

      </tr>       
      @endforeach
    </tbody>
  </table>
  {{ $posty->links() }}
  {{-- dump($posty) --}}
@endsection


