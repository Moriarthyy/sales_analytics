<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService {

    public function register_user($data) {

        $data['password'] = Hash::make($data['password']);

        return User::create($data);

    }
}
