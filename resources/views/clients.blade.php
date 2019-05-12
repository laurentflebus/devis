@extends('layout')

@section('contenu')
  <div class="section">
      <h1 class="title is-1">Les clients</h1>
      <ul>
        @foreach ($clients as $client)
          <a href="/{{$client->email}}"><li>{{$client->email}}</li></a>
        @endforeach
      </ul>
  </div>


@endsection
