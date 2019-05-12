@extends('layout')

@section('contenu')
  <form class="section" method="post">
    {{ csrf_field() }}

    <div class="field">
      <label class="label">Login</label>
      <div class="control">
        <input class="input" type="text"  name="login" value="{{ old('login') }}">
      </div>
    </div>
    @if ($errors->has('login'))
        <p class="help is-danger">{{ $errors->first('login')}}</p>
    @endif


    <div class="field">
      <label class="label">Mot de passe</label>
      <div class="control">
          <input class="input" type="password" name="password">
      </div>
    </div>
    @if ($errors->has('password'))
        <p class="help is-danger">{{ $errors->first('password') }}</p>
    @endif

    <div class="field">
      <label class="label">Mot de passe (confirmation)</label>
      <div class="control">
          <input class="input" type="password" name="password_confirmation">
      </div>
    </div>
    @if ($errors->has('password_confirmation'))
        <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
    @endif


    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">S'inscrire</button>
        </div>
    </div>
  </form>
@endsection
