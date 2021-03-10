<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index($nome)
    {
        return view('teste.index', ['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5',
        ];

        return view('teste.notas', compact('notas'));
    }
}
