<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View; 
class UserController extends Controller
{
    public function show(string $id): View
    {
        $user = User::findOrFail($id); // Find the user by ID
        return view('user.profile', [
            'user' => $user
        ]);
    }
}
