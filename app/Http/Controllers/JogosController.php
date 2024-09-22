<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
// dentro do controller vamos passar toda a logica
class JogosController extends Controller
{
    public function index(){
        // $nome = 'FiFA';
        // $id = 5;
        $jogos= Jogo::all();
        // dd($jogos);
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        // dd($request);
        Jogo::create($request->all());
        return redirect()->route('jogos-index');

    }
}
