@extends('layout')

@section('contenu')
  <form class="section" method="post">
    {{ csrf_field() }}

    <div class="field">
      <label class="label">Nom</label>
      <div class="control">
        <input class="input" type="text"  name="nom" value="{{ old('nom') }}">
      </div>
    </div>
    @if ($errors->has('nom'))
        <p class="help is-danger">{{ $errors->first('nom')}}</p>
    @endif


    <div class="field">
      <label class="label">Prénom</label>
      <div class="control">
          <input class="input" type="text" name="prenom" value="{{ old('prenom') }}">
      </div>
    </div>
    @if ($errors->has('prenom'))
        <p class="help is-danger">{{ $errors->first('prenom') }}</p>
    @endif

    <div class="field">
      <label class="label">E-mail</label>
      <div class="control">
          <input class="input" type="email" name="email" value="{{ old('email') }}">
      </div>
    </div>
    @if ($errors->has('email'))
        <p class="help is-danger">{{ $errors->first('email') }}</p>
    @endif

    <div class="field">
      <label class="label">Téléphone</label>
      <div class="control">
          <input class="input" type="text" name="telephone" value="{{ old('telephone') }}">
      </div>
    </div>
    @if ($errors->has('telephone'))
        <p class="help is-danger">{{ $errors->first('telephone') }}</p>
    @endif

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Inscrire</button>
        </div>
    </div>
  </form>
@endsection
