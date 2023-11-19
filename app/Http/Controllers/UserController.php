<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function edit(User $userId){
        return view('users.edit',  ['user' => $userId]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(UserRequest $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return redirect(route('user.create'));
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = $request->user_type;
        $user->save();

        return redirect(route('user.index'));
    }

    public function delete(User $userId){
        $userId->delete();
        return redirect(route('user.index'));
    }
}
