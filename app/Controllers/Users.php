<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'name' => 'Juan Cruz', 'role' => 'Administrator'],
            ['username' => 'maria', 'name' => 'Maria Santos', 'role' => 'Manager'],
            ['username' => 'pedro', 'name' => 'Pedro Reyes', 'role' => 'Cashier'],
            ['username' => 'ana', 'name' => 'Ana Garcia', 'role' => 'Cashier'],
            ['username' => 'carlo', 'name' => 'Carlo Mendoza', 'role' => 'Staff']
        ];

        return view('users', ['users' => $users]);
    }
}