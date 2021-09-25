<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CreateUserAction
{

    public function execute(string $name, string $email, string $password): User
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }
}
