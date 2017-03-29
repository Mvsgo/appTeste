@extends('layout.principal')

@section('titulo','Usuario')
@section('conteudo')
	<p>Aqui e o conteudo da usuario</p>

	Usuario: {{$user}}<br>
	Lista: {{$lista}}

@endsection