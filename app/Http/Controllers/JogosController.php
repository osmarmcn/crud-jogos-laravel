<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// dentro do controller vamos passar toda a logica
class JogosController extends Controller
{
    public function index(){
        $nome = 'FiFA';
        $id = 5;
        return view('jogos', ['nome' => $nome, 'id' => $id]);
    }
}
