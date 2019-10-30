<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function create(){

        return view('cadastros.new');
    }

   public function store (Request $request){

      $cadastro = new Cadastro();
      $cadastro->name        =request('name');
      $cadastro->email       =request('email');
      $cadastro->telefone    =request('telefone');
      $cadastro->save();
   
   }



}
