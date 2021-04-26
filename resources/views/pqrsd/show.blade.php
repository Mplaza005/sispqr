@extends('layouts.plantilla')

@section('title','Pqrsd' . $pqrsd->id)

@section('content')

<h1>hola desde show</h1>
<h4>Id Pqrsd:{{$pqrsd->id}}</h4>

<h4>IdCliente:{{$pqrsd->idCliente}}</h4>

<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}
</p>

{{-- <img width="100px" src="{{asset('$pqrsd->urlPdf')}}">  --}}

<div class="scroller" style="height:500px" data-always-visible="1" data-rail-visible="1" data-rail-color="white" data-handle-color="#A44A1B">
    <object data="{{  url('$pqrsd->urlPdf') }} }}" type="application/pdf" width="100%" height="100%">
</div>
       

<a href="{{route('pqrsds.answer',$pqrsd)}}">contestar</a>
<br>
<a href="{{route('pqrsds.index')}}">Volver</a>

<a href="{{route('pqrsds.edit',$pqrsd)}}">Editar PQRSD</a>

