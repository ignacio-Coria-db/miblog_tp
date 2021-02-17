@extends('layouts.app')

@section('content')

<h1>Posts</h1>


@if(count($posts)>0)

@foreach($posts as $post)
    <div class="card">
    <h1> <a href="/posts/{{$post->id}}">{{$post->titulo}}</a></h1>
        <p>{{$post->contenido}}</p>
    </div>
@endforeach


@endif









@endsection