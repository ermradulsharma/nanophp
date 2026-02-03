<?php

namespace App\Http\Controllers;

use Nano\Framework\Controller;
use Nano\Framework\Facades\DB;
use Nano\Framework\Facades\View;
use App\Services\GreetingService;

class ApiController extends Controller
{
    public function users()
    {
        $users = [
            ['id' => 1, 'name' => 'Nano Developer', 'role' => 'Framework Creator'],
            ['id' => 2, 'name' => 'React Fan', 'role' => 'Frontend Master'],
            ['id' => 3, 'name' => 'Vue Enthusiast', 'role' => 'Component Wizard'],
        ];

        return json([
            'status' => 'success',
            'data' => $users
        ]);
    }

    public function status(GreetingService $greeting)
    {
        return json([
            'framework' => 'NanoPHP',
            'version' => '1.0.0',
            'api_status' => 'operational',
            'fullstack' => true,
            'magic_facades' => true,
            'magic_di' => $greeting->greet('NanoUser')
        ]);
    }

    public function dbTest()
    {
        try {
            // Using DB Magic Facade
            $users = DB::table('users')->get();
            return json($users);
        } catch (\Exception $e) {
            return json(['error' => $e->getMessage()], 500);
        }
    }
}
