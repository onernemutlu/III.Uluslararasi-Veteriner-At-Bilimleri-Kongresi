<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseRegistrationTypeController extends Controller
{
    public function index()
    {
        return view('auth.choose');
    }
}
