<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigation extends Controller
{

    public function connexion()
    {
        return view('connexion');
    }
    public function submitForm(Request $req)
    {
        $req->validate([
            'mdp' => "required|min:5",
        ]);

        if($req->input()['mdp']=='connect')//$req->mdp;
        {
            return redirect()->route('home');
        }
        else
        {
            return view('connexion');
        }
    }
    public function home()
    {
        return view('welcome');
    }

    public function actualite()
    {
        return view('actu');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function annuaire()
    {
        return view('annuaire');
    }

    public function forum()
    {
        return view('forum');
    }
}
