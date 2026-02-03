<?php

namespace App\Http\Controllers;

use Nano\Framework\Controller;
use Psr\Http\Message\ServerRequestInterface;

class ValidationController extends Controller
{
    public function store(ServerRequestInterface $request)
    {
        try {
            $data = $this->validate($request, [
                'email' => 'required|email',
                'name' => 'required|min:3'
            ]);

            return json(['success' => true, 'data' => $data]);
        } catch (\Exception $e) {
            return json(['error' => $e->getMessage()], 422);
        }
    }
}
