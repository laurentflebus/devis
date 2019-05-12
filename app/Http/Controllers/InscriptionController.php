<?php

namespace App\Http\Controllers;

use App\Client;
use App\Authentification;

class InscriptionController extends Controller
{
    public function afficherFormulaire() {
        return view('inscription');
    }

    public function traiterFormulaire() {
      // Validation des champs du formulaire d'inscription
        request()->validate([
          'nom' => ['required'],
          'prenom' => ['required'],
          'email' => ['required', 'email'],
          'telephone' => 'required|numeric|min:8',
        ]);

      // Insertion du client en base de données
        $client = Client::create([
          'nom' => request('nom'),
          'prenom' => request('prenom'),
          'email' => request('email'),
          'telephone' => request('telephone'),
        ]);

        flash('Le nouveau client a bien été enregistré.')->success();
        return redirect('/clients');
      }

      public function visualiserFormulaire() {
        return view('inscriptionAuthentification');
      }

      public function gererFormulaire() {
        request()->validate([
          'login' => ['required'],
          'password' => ['required', 'confirmed', 'min:8'],
          'password_confirmation',
        ]);

        $authentification = new Authentification;
        $authentification->login = request('login');
        $authentification->password = bcrypt(request('password'));

        $authentification->save();

        return "Inscription réussie";
      }
}
