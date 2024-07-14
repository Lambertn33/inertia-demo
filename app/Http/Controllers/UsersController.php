<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index(Request $request)
    {

        $users = User::select(['id', 'name', 'email'])
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->paginate(10)->withQueryString();
        return Inertia::render('Users', [
            'users' => $users,
            'filters' => $request->only(['search'])
        ]);
    }
}
