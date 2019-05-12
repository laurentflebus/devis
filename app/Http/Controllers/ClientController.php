<?php

namespace App\Http\Controllers;

use App\Client;

class ClientController extends Controller
{
    public function liste() {
      $clients = Client::all();

      return view('clients', [
        'clients' => $clients,
      ]);
    }

    public function afficher() {
      // Récupération de la variable GET email
      $email = request('email');

      // Récupération du client en base données qui possède l'email correspondant
      $client = Client::where('email', $email)->first();

      // Passe en paramètre le client à la vue afin d'afficher ses propriétés
      return view('client', [
        'client' => $client,
      ]);
    }
}
