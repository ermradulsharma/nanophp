<?php

namespace App\Http\Controllers\Auth;

use Nano\Framework\Facades\Auth;
use Nano\Framework\Facades\View;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\Response\RedirectResponse;

class LoginController
{
    public function show()
    {
        return View::render('auth.login');
    }

    public function login(ServerRequestInterface $request)
    {
        $data = $request->getParsedBody();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return new RedirectResponse('/home');
        }

        return new RedirectResponse('/login');
    }

    public function logout()
    {
        Auth::logout();
        return new RedirectResponse('/login');
    }
}
