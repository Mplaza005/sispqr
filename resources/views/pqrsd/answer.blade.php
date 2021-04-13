@extends('layouts.plantilla')

@section('title','Pqrsd' . $pqrsd->id)

@section('content')

<h5>Contestar Solicitud PQRSD</h5>

<h4>Id Pqrsd:{{$pqrsd->id}}</h4>

<h4>IdCliente:{{$pqrsd->idCliente}}</h4>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}

<form action="{{route('formulario.sendAnswer')}}"  method="POST">

    @csrf
    <div class="form-row">

        <div class="form-group col-md-6">
            <label>Id PQRSD</label>
            <input name="idPqrsd"type="text" class="form-control" value="{{$pqrsd->id}}">
       </div>


        <div class="form-group col-md-6">
            <label>Id Cliente</label>
            <input name="idCliente"type="text" class="form-control" value="{{$cliente->id}}">
       </div>

        <div class="form-group col-md-6">
            <label>Correo cliente</label>
            <input name="correoElectronico"type="text" class="form-control" value="{{$cliente->correoElectronico}}"  placeholder=" ">
       </div>
        
        <div class="form-group col-md-6">
            <label>Contestacion</label>
            <textarea type="textarea" class="form-control" name="descripcion"> </textarea>

        </div>

        <br>
       
      
    </div> 
            
    {{--BUTTON DE ENVIAR  --}}
    <a href="{{route('formulario.index')}}">Volver</a>

    <button class="btn btn-primary mb-3" type="submit">Enviar</button>

</form>

@endsection