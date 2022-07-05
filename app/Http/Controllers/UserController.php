<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use App\Http\Requests\StoreUserPost;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return Inertia::render('User/index', compact('users'));
    }


    public function create()
    {
        return Inertia::render('User/create');
    }

    public function store(StoreUserPost $request)
    {
        User::create($request->validated());
        return  redirect(route('users.index'))->with('UsuarioCreado', 'El usuario se ha creado exitosamente');
    }

    public function show(User $user)
    {   
        return Inertia::render('User/show');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(User $user)
    {
        User::destroy($user);
        return redirect(route('user.index'));

    }
}
