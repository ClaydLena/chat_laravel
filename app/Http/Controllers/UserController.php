<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function me(){
       $user = auth()->user();

        return view('cliente.perfil', ['user'=>$user]);
    }


    public function edit(){
        $user = auth()->user();

        return view('cliente.edit-perfil', ['user'=>$user]);
    }

    public function update (){

    }
}
