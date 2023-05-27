<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\View\View;

class TarefaController extends Controller
{

    public function destroy($id){
        Tarefa::findOrFail($id)->delete();

        return redirect('/');
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        if($request->nome !="" && $request->desctarefa !=""){
            $tarefa->nome = $request->nome;
            $tarefa->desctarefa = $request->desctarefa;
            $tarefa->save();
    
            return redirect('/');
        }else{

            return redirect('/cadastrar')->with('msg','Preencha todos os campos!!!');
        }
      
    }

    public function create()
    {
        return view('cadastrar');
    }

    public function index()
    {
        $procurar = request('search');
        if (isset($procurar)) {
            $tarefas = Tarefa::where('desctarefa','like','%'.$procurar.'%')
            ->orWhere('nome','like','%'.$procurar.'%')
            ->get();
        }else{
            $tarefas = Tarefa::all();
        }

        return view('welcome', [
            'tarefas' => $tarefas
        ]);
    }

    public function sobre()
    {
        $nome = "Wanderson";
        $idade = 18;
        $numeros = [1, 2, 3, 4, 5];

        return view('sobre', [
            'nome' => $nome,
            'idade' => $idade,
            'numeros' => $numeros
        ]);
    }

    /**
     * Faz atualização de um registro
     * dd() é um super var_dump()
     */
    public function edit(int $id):View
    {
        $registro = Tarefa::find($id);

        return view('editar', [
            'tarefa' => $registro,
        ]);

    }

    public function update(Request $request)
    {
        Tarefa::find($request->id)
        ->update([
            'nome' => $request->tarefinha,
            'desctarefa' => $request->descricao
        ]);

        return redirect('/')->with('success','Atualizado com sucesso!!!');

    }

}
