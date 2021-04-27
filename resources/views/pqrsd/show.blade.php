@extends('layouts.plantilla')

@section('title','Pqrsd' . $pqrsd->id)

@section('content')

<h1>hola desde show</h1>
<h4>Id Pqrsd:{{$pqrsd->id}}</h4>

<h4>IdCliente:{{$pqrsd->idCliente}}</h4>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}
</p>

<p><Strong>Url:</Strong>
    {{$pqrsd->urlPdf}}
</p>


<img width="200px" src = "/storage/imagenes/W8D3rDuR6kix5GPTeehLuGTkBHirn5LpQYYz3CEr.jpg"> 



<a href="{{route('pqrsds.answer',$pqrsd)}}">contestar</a>
<br>
<a href="{{route('pqrsds.index')}}">Volver</a>

<a href="{{route('pqrsds.edit',$pqrsd)}}">Editar PQRSD</a>

