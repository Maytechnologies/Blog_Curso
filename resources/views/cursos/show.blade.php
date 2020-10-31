@extends('layouts.plantilla')

@section('titulo','Visualizar')
    

@section('content')
<br>

<a href="{{route('cursos.index')}}">Volver al Listado</a>

<br>

<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

<br>

<h4> Bienvenido se encuentra en la sesion Show</h4>
<p>Donde Mostramos los datos del Curso N° {{$curso->id}} - {{$curso->name}}</p>
<p></i>{{$curso->description}}  Categoria: {{$curso->category}}</p>
<p> Profesor: {{$curso->teacher}}</p>

<br>

<a href="{{route('cursos.destroy', $curso)}}">Eliminar</a>

<br>

@endsection