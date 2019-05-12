<?php

namespace App\Http\Controllers;

use App\Authentification;

class ConnexionController extends Controller
{
    public function afficherFormulaire() {
      return view('connexion');
    }

    public function traiterFormulaire() {
      // Récupérer la requête et appliquer la méthode de validation
      request()->validate([
        'login' => ['required'],
        'password' => ['required'],
      ]);

      // Système d'authentification de Laravel
      // Permet d'essayer une connexion
      // config/auth.php ligne 70
      $resultat = auth()->attempt([
          'login' => request('login'),
          'password' => request('password'),
      ]);

      // Rediriger vers la page mon-compte si connexion réussie
      if($resultat) {
        flash('Vous êtes maintenant connecté.')->success();
        return redirect('/mon-compte');
      }

      // Sinon retour vers la page précédente et renvoit également les données qui ont été envoyé par l'utilisaterur
      return back()->withInput()->withErrors([
        'login' => 'Vos identifiants sont incorrects.',
      ]);
    }
}
