<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    </head>
    <body>
      <nav class="navbar is-light">
          <div class="navbar-menu">
             {{-- Partie gauche --}}
            <div class="navbar-start">
              @if (auth()->check())
                <a href="/inscription" class="navbar-item {{ request()->is('inscription') ? 'is-active' : '' }}">Inscription Client</a>
                <a href="/clients" class="navbar-item {{ request()->is('inscription') ? 'is-active' : '' }}">Clients</a>                
              @endif

            </div>
             {{-- Partie droite --}}
            <div class="navbar-end">
              {{--  Si l'utilisateur est connecté --}}
              @if (auth()->check())
                  <a href="/mon-compte" class="navbar-item {{ request()->is('mon-compte') ? 'is-active' : '' }}">Mon compte</a>
                  <a href="/deconnexion" class="navbar-item">Déconnexion</a>
              @else
                  <a href="/" class="navbar-item {{ request()->is('/') ? 'is-active' : '' }}">Connexion</a>
                  <a href="/inscriptionAuthentification" class="navbar-item {{ request()->is('inscriptionAuthentification') ? 'is-active' : '' }}">Inscription Utilisateur</a>
              @endif


            </div>
          </div>
      </nav>
        <div class="container">

              {{-- Affiche le message flash --}}
                @include('flash::message')

                @yield('contenu')
        </div>
    </body>
