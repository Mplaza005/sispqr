@extends('layouts.plantilla')

@section('title','Pqrsd' . $pqrsd->id)

@section('content')

<h1>hola desde show</h1>
<h4>Id Pqrsd:{{$pqrsd->id}}</h4>

<h4>IdCliente:{{$pqrsd->idCliente}}</h4>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}
</p>
{{-- <a href="{{route('formulario.answer',$pqrsd)}}">contestar</a> --}}
<br>
<a href="{{route('formulario.index')}}">Volver</a>

{{-- <a href="{{route('formulario.edit',$pqrsd)}}">Editar PQRSD</a> --}}

