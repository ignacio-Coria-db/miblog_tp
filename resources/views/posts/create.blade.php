@extends('layouts.app')

@section('content')

<h1>Crear entrada Blog</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=>'POST']) !!}

<div class="form-group">
    {{Form::label('titulo', 'titulo')}}

    {{Form::text('titulo', '',['class'=>'form-control'])}} <!--Primer parametro =name, segundo el contenido , 3 el contenido html que va a generar (clase, llamar estilos)-->

    {{Form::label('contenido', 'contenido')}}

    {{Form::textarea('contenido', '',['class'=>'form-control'])}} 
</div> 
    {{Form::submit('Crear', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}










@endsection