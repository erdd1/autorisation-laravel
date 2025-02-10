<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('formulaire'); // Assurez-vous d'avoir une vue 'login.blade.php'
    }

    // Traiter la connexion
    public function login(Request $request)
    {
        // Valider les données
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentative de connexion
        if (Auth::attempt($credentials))  {
            $request->session()->regenerate();

            // Récupérer l'utilisateur connecté
            $user = Auth::user();

            // Récupérer les rôles de l'utilisateur
            $roles = $user->roles;

            // Vous pouvez maintenant utiliser les rôles pour rediriger l'utilisateur ou effectuer d'autres actions
            foreach ($roles as $role) {
                if ($role->name === 'useradmin') {
                    return redirect()->intended(route('acceuil'));
                } elseif ($role->name === 'usersimple') {
                    return redirect()->intended(route('acceuil'));
                }
            }

            // Redirection par défaut si aucun rôle spécifique n'est trouvé
            return redirect()->intended(route('acceuil'));
        }

        // Si la connexion échoue, retourner avec une erreur
        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}