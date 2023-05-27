@extends('layout.main')
@section('titulo','Sobre')

@section('conteudo')

@if(session('msg'))
<div class="alert alert-danger" role="alert">
    {{session('msg')}}
</div>
@endif

<h1>Cadastrar tarefa</h1>

<form method="POST" action="/cadtarefa">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome da tarefa</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Descrição da tarefa</label>
        <input type="text" name="desctarefa" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

@endsection