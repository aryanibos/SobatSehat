<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.user.index', compact('users'));
    }

    public function validasiUser($id)
    {
        $user = User::find($id);
        $user->update([
            'status' => 'a'
        ]);
        return redirect()->route('user')->with('success', 'User berhasil di validasi');
    }
}
