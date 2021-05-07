@extends('layouts.plantilla')

@section('title')

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

{{-- <iframe width="400" height="400" src="{{'http://localhost/sispqr/public/storage/imagenes/'}}" frameborder="0"></iframe> --}}

<iframe src="{{ 'http://localhost/sispqr/public/storage/imagenes/' . $pqrsd->urlPdf }}"  frameborder="0"></iframe>

 {{-- <img  width="100px" src="{{ 'http://localhost/sispqr/public/storage/imagenes/' . $pqrsd->urlPdf }}" />  --}}

{{-- <a href="{{route('pqrsds.answer',$pqrsd)}}">contestar</a>
<br>
<a href="{{route('pqrsds.index')}}">Volver</a>

<a href="{{route('pqrsds.edit',$pqrsd)}}">Editar PQRSD</a> --}}


@endsection
