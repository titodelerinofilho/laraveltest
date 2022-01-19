<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Pedro';
        $idade = 27;

        $arr = [10, 20, 30, 40, 50];
        $carros = ["Opel", "Volkswagen", "Alfa Romeo", "Dodge"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Programador PHP",
                'arr' => $arr,
                'carros' => $carros
            ]
        );
    }
    public function create() {
        return view('events.create');
    }
}
