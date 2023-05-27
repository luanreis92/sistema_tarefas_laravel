@extends('layout.main')
@section('titulo','Sobre')

@section('conteudo')

@if(session('msg'))
<div class="alert alert-danger" role="alert">
    {{session('msg')}}
</div>
@endif

<h1>Editar tarefa</h1>

<form method="POST" action="{{"route('editar.tarefa')"}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nome da tarefa</label>
        <input type="text" name="tarefinha" class="form-control" value="{{$tarefa->nome}}">
    </div>
    <input type="hidden" name="id" value="{{$tarefa->id}}">
    <div class="mb-3">
        <label class="form-label">Descrição da tarefa</label>
        <input type="text" name="descricao" class="form-control" value="{{$tarefa->desctarefa}}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection