<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class roleController extends Controller
{
        // la methode qi permet de creer un utilisateur
        public function create(){
        
            return view('role.create');
        }
    
        // la methode store  permet d'enregister 
        public function store(Request $request){
    
            $role= new Role();
            $role->intitule=$request->intitule;
    
    
            $role->save();
             return redirect()->route('roleIndex')->with('sucess', 'Role enregistrer avec success');
        }
}
