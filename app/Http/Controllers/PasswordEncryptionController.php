<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordEncryptionController extends Controller
{
    public function encryptPasswords()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($user->password);
                $user->save();
            }
        }

        return view('login');
    }
}
