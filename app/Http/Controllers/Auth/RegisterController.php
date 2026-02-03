<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Nano\Framework\Facades\Auth;
use Nano\Framework\Facades\View;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\Response\RedirectResponse;

class RegisterController
{
    public function show()
    {
        return View::render('auth.register');
    }

    public function register(ServerRequestInterface $request)
    {
        $data = $request->getParsedBody();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT)
        ]);

        Auth::login($user);

        return new RedirectResponse('/home');
    }
}
