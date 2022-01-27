<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigation extends Controller
{

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
