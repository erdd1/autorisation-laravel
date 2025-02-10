<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cylabsController extends Controller
{
    public function index()
    {
        $this->authorize('access-cy-labs');
        return view('acceuil');
    }
}
