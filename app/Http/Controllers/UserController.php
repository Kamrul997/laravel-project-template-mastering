<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $users = User::paginate(2);

            return view('users.index', compact('users'));
        }else{
            return('You dont have permission');
        }
    }

    public function edit(User $userId){
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            return view('users.edit',  ['user' => $userId]);

        }else{
            return('You dont have permission');
        }
    }

    public function create(){
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            return view('users.create');

        }else{
            return('You dont have permission');
        }
    }

    public function store(UserRequest $request){

        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->user_type = $request->user_type;
            $user->save();

            return redirect(route('user.create'));

        }else{
            return('You dont have permission');
        }
    }

    public function update(Request $request){

        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->save();

            return redirect(route('user.index'));

        }else{
            return('You dont have permission');
        }
    }

    public function delete(User $userId){
        if(Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin'){

            if($userId->user_type !== 'super admin'){
                $userId->delete();
                return redirect(route('user.index'));
            }else{
                return('You can not delete super admin');
            }

        }else{
            return('You dont have permission');
        }

    }
}
