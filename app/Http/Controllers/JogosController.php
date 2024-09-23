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

    public function edit($id){
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            //  dd($jogos);
            return view('jogos.edit', ['jogos' => $jogos]);

        }
        else{
            return redirect()->route('jogos-index');
        }

    }

    public function update(Request $request, $id){
        // dd($request);
        $data = [
            'nome' => $request->nome,
            'categoria'=> $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }
}
