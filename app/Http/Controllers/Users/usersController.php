<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function login(){

        return view('Auth.login');
    }

    public function register(){

        return view('Auth.register');
    }
    // la methode qi permet de creer un utilisateur
    public function create(){
        $roles=Role::get();
        
        return view('User.create', compact('roles'));
    }

    // la methode store  permet d'enregister 
    public function store(Request $request){

        $user= new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->tel=$request->tel;
        $user->password=Hash::make("123456789");
        $user->adresse=$request->adresse;
        $user->id_role=$request->id_role;

        $user->save();
         return redirect()->route('userIndex')->with('sucess', 'utilisateur enregistrer avec success');
    }
}
