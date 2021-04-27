@extends('layouts.plantilla')

@section('title','Pqrsd' . $pqrsd->id)

@section('content')

<h1>hola desde show</h1>
<h4>Id Pqrsd:{{$pqrsd->id}}</h4>

<h4>IdCliente:{{$pqrsd->idCliente}}</h4>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}
</p>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->urlPdf}}
</p>

<img  width="100px" src="{{ url($pqrsd->urlPdf) }}" alt="" title="" />

<a href="{{route('pqrsds.answer',$pqrsd)}}">contestar</a>
<br>
<a href="{{route('pqrsds.index')}}">Volver</a>

<a href="{{route('pqrsds.edit',$pqrsd)}}">Editar PQRSD</a>

