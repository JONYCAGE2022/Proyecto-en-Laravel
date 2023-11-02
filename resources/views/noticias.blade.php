@extends('layouts.template')
@section('titulo','Noticias')
    @section('contenido')
    <h1>Noticias</h1>
    <a href="{{route('formulario_de_alta')}}">Formulario de alta de noticia</a><br>
    <a href="{{route('formulario_de_baja')}}">Formulario de baja de noticia</a><br>
    <a href="{{route('formulario_de_edicion')}}">Formulario de edicion de noticia</a><br>
@endsection