@extends('layouts.app')

@section('content')

<h1>Crear entrada Blog</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id], 'method'=>'PUT']) !!}

<div class="form-group">
    {{Form::label('titulo', 'titulo')}}

    {{Form::text('titulo', $post->titulo,['class'=>'form-control'])}} <!--Primer parametro =name, segundo el contenido , 3 el contenido html que va a generar (clase, llamar estilos)-->

    {{Form::label('contenido', 'contenido')}}

    {{Form::textarea('contenido', $post->contenido,['class'=>'form-control'])}} 
</div> 
    {{Form::submit('Guardar', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}










@endsection