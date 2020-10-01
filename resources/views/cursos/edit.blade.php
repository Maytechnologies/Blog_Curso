@extends('layouts.plantilla')

@section('titulo', 'Edit')
    

@section('content')


<h4> Bienvenido se encuentra en la sesion Edicion</h4>


<div class="container mx-auto border-color">
    <h4> Edición de Curso</h4>
    <p>Favor llenar Todos los Campos</p>

<form action="{{route('cursos.update', $curso)}}" method="POST">
@csrf
@method('PUT')

<label>
    Nombre:
    <br> 
<input type="text" name="name" value="{{old('name', $curso->name)}}">
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
<input type="text" name="category" value="{{old('category',$curso->category)}}">
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
<textarea name="description"rows="5">{{old('description',$curso->description)}}</textarea>
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
<input type="text" name="teacher" value="{{old('teacher',$curso->teacher)}}">
</label>
@error('teacher')
    <br>
        <small style="color:rgb(248, 64, 8)">*{{$message}}</small>
    <br>
@enderror
<br>
<button type="submit" name="registrar">Actualizar</button>

</form>
</div>



@endsection