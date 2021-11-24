<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Frota;

class FrotaController extends Controller
{

    public function criar()
    {
        return view('criar')->with([]);
    }

    public function inserir(Request $request)
    {
        $mensagem = [
            'required' => 'Preencha todos os campos obrigatórios!',
        ];

        $request->validate([
            'marca' => 'required',
            'ano' => 'required',
            'modelo' => 'required'
        ], $mensagem);

        try {
            Frota::create([
                'marca' => $request->get('marca'),
                'ano' => $request->get('ano'),
                'modelo' => $request->get('modelo'),
                'observacao' => $request->get('observacao') ? $request->get('observacao') : null,
                'usuario' => Auth::user()->id
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('resposta', [
                'status' => 500,
                'mensagem' => 'Aconteceu algum erro, contate o administrador!'
            ]);
        }

        return redirect()->route('home')->with('create', 'O veículo foi adicionado com sucesso!');
    }

    public function editar($id)
    {
        $frota = Frota::where("id",$id)->get();

        if ($frota->isEmpty()) {
            return redirect()->route('home')->with('resposta', [
                'status' => 400,
                'mensagem' => 'Acesso indevido!'
            ]);
        }

        return view("editar")->with([
            "frota"=>$frota[0]
        ]);
    }

    public function atualizar(Request $request, $id)
    {
        $mensagem = [
            'required' => 'Preencha todos os campos obrigatórios!',
        ];

        $request->validate([
            'marca' => 'required',
            'ano' => 'required',
            'modelo' => 'required'
        ], $mensagem);

        try {
            Frota::find($id)->update([
                'marca' => $request->get('marca'),
                'ano' => $request->get('ano'),
                'modelo' => $request->get('modelo'),
                'observacao' => $request->get('observacao') ? $request->get('observacao') : null
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('resposta', [
                'status' => 500,
                'mensagem' => 'Aconteceu algum erro, contate o administrador!'
            ]);
        }

        return redirect()->route('home')->with('update', 'O veículo foi atualizado com sucesso!');
    }

    public function excluir($id)
    {
        try {
            Frota::find($id)->delete();
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('resposta', [
                'status' => 500,
                'mensagem' => 'Aconteceu algum erro, contate o administrador!'
            ]);
        }

        return redirect()->route('home')->with('delete', 'O veículo foi excluído com sucesso!');
    }

    // public function consulta()
    // {
    //     Frota::all();
    // }

}
