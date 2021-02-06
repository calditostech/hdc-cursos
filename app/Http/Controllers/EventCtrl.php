<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventCtrl extends Controller
{
    public function index() {
        $nome = "Ricardo";
        $idade = 32;

        $arr = [10,20,30,40,50];

        $nomes = ["Ricardo","Maria","João","Saulo"];

        return view('welcome',
        [
          'nome' => $nome,
          'idade' => $idade,
          'profissao' => "Programador",
          'arr' => $arr,
          'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
