@extends('layouts.template')
@section('titulo','Noticias')
@section('contenido')
<h1>Pantalla Principal</h1>
<a href="{{route('noticias')}}">Ir a noticias</a><br>
<a href="{{route('autores')}}">Ir a autores</a>
@endsection