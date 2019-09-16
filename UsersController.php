<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return view("users", ["users" => User::all()]);
    }

    public function edit($id) {
        $user = User::where('id', $id)->first();
        return view('edit', compact('user'));
    }

    public function update($id, Request $request) {

        $sendData = $request->only(["ime", "prezime", "email", "sifra"]);
        $user = User::where('id', $id)->first();
        $user->name = $sentData['ime'];
        $user->name = $sentData['prezime'];
        $user->name = $sentData['email'];
        $user->name = $sentData['sifra'];
        $user->save();
        redirect('/users');
        return redirect('/users');

    }

    public function delete($id, Request $request) {
        $user = $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/users');
    }
}

