@extends('layouts.template')
@section('titulo','Autores')
    @section('contenido')
    <h1>Autores</h1>
    <a href="{{route('formulario_de_alta_autores')}}">Formulario de alta de autores</a><br>
    <a href="{{route('formulario_de_baja_autores')}}">Formulario de baja de autores</a><br>
    <a href="{{route('formulario_de_edicion_autores')}}">Formulario de edicion de autores</a><br>
@endsection
