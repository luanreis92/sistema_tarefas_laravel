@extends('layout.main')
@section('titulo','Sobre')

@section('conteudo')

<h1>Sobre</h1>
<h2>Nome: {{$nome}} </h2>
<h2>Idade: {{$idade}} </h2>
<p>Nome = {{$nome}} e idade = {{$idade}}</p>

@for($i = 0; $i < count($numeros) ; $i++)
<p>{{$i}} - {{$numeros[$i]}}</p>
@endfor

@foreach($numeros as $x)
<p>{{$x}}</p>
@endforeach

@php
    echo "teste";
@endphp

@endsection