@if(count($errors)>0)  <!--si la cantidad de errores es mayor a cero-->

@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>

@endforeach

@endif

<!--mensaje de exito-->
@if(session('succes'))
<div class="alert alert-success">
    {{session('succes')}}
</div>

@endif

<!--Personalisar mensajes de error-->
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>

@endif

