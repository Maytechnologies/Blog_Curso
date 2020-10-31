@extends('layouts.plantilla')

@section('titulo', 'Registro | Curso')
    

@section('content')

<div class="container col-xl-auto">
    <h4> Registro de Curso</h4>
    <p>Favor llenar Todos los Campos</p>

<a href="{{route('cursos.index')}}">Volver al Listado</a>

<br>
<br>

<form action="{{route('cursos.store')}}" method="POST">
@csrf

<label>
    Nombre:
    <br> 
<input type="text" name="name" value="{{old('name')}}"> 
</label>
@error('name')
    <br>
        <small style="color:rgb(248, 64, 8)">*{{$message}}</small>
    <br>
@enderror

<br>
<label>
    Categoria:
    <br>
<input type="text" name="category" value="{{old('category')}}">
</label>
@error('category')
    <br>
        <small style="color:rgb(248, 64, 8)">*{{$message}}</small>
    <br>
@enderror

<br>
<label>
    Descripcion:
    <br> 
    <textarea name="description"rows="5">{{old('description')}}</textarea>
</label>
@error('description')
    <br>
        <small style="color:rgb(248, 64, 8)">*{{$message}}</small>
    <br>
@enderror

<br>
<label>
    Profesor:
    <br> 
<input type="text" name="teacher" value="{{old('teacher')}}">
</label>
@error('teacher')
    <br>
        <small style="color:rgb(248, 64, 8)">*{{$message}}</small>
    <br>
@enderror
<br>
<br>
<button type="submit" name="registrar">Registrar</button>

</form>
</div>

@endsection