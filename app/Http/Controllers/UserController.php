<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    public function index($id) {
        $users = User::with('posts')->paginate(1);
        return response()->json([
            'users' => $users
        ]);
    }

    public function show($id) {
        $user = User::find($id);
        return response()->json([
            'user' => $user
        ]);
    }

    public function create(UserCreateRequest $request) {
        // $user = User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make('123456')
        // ]);
        $avatar = $request->file('avatar');
        $fileName = $avatar->getClientOriginalName();
        $avatar->move('test-imgs', $fileName);

        return redirect('/users');
    }

    public function login(Request $request) {
        // $email = $request->input('email');
        // $password = $request->input('password');
        $credentials = $request->only('email', 'password');
        $user = Auth::attempt($credentials);
        return redirect('/');
    }
}
