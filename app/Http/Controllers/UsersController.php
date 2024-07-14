<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name', 'email'])->paginate(10);
        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
