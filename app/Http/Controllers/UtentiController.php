<?php

namespace App\Http\Controllers;

use App\Models\User;

class UtentiController extends Controller
{
    public function utenti()
    {
        $data = User::all();
        return view('pages.utenti', ['users' => $data]);
    }
}
