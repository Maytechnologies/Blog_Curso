@extends('layouts.plantilla')

@section('titulo', 'index')
    

@section('content')

<div class="container">

    <h4>Bienvenido se encuentra en la sesion principal</h4>
     <br>

    <a href="{{route('cursos.create')}}">Registrar Curso</a>

    <br>

    <ul>
    
        @foreach ($cursos as $curso)
    
          <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->id}} - {{$curso->name}}</a></li>
            
        @endforeach
    </ul>
    
</div>

{{$cursos->links()}}

@endsection