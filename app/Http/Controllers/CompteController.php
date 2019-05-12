<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil() {

      return view('mon-compte');
    }

    public function deconnexion() {
      // Déconnecter l'utilisateur
      auth()->logout();

      flash('Vous êtes maintenant déconnecté.')->success();

      return redirect('/');
    }
    public function modificationMotDePasse() {

      request()->validate([
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
      ]);

      // Récupérer l'utilisateur connecté grâce au système d'authentification de Laravel
      // $utilisateur = auth()->user();
      // $utilisateur->password = bcrypt(request('password'));
      // $utilisateur->save();

      auth()->user()->update([
        'password' => bcrypt(request('password')),
      ]);

      flash('Votre mot de passe a bien été mis à jour')->success();

      return redirect('/mon-compte');
    }
}
