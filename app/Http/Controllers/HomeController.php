<?php

namespace App\Http\Controllers;

use Nano\Framework\Facades\Auth;
use Nano\Framework\Facades\View;

class HomeController
{
    public function index()
    {
        return View::render('home', ['user' => Auth::user()]);
    }
}
