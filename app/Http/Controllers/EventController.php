<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = 'Luis';
        $idade = 21;
        $arr = [10,20,30,40,50];
        $nomes = ["Flavio", "Maria", "Bruno", "Saulo"];

        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => 21, 
                'profissao' => 'Desenvolvedor Back-end',
                'arr' => $arr,
                'nomes' => $nomes,
            ]);
    }

    public function create() {
        return view('events.create');
    }
}
