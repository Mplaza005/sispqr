@extends('layouts.plantilla')




@section('title','index PQRSD')

@section('content')
<h1>Hola desde Index:</h1>
<a href="{{route('formulario.create')}}">Crear PQR</a>
<ul>
    @foreach ($pqrsds as $pqrsd)
        <li>
            <a href="{{route('formulario.answer',$pqrsd)}}">{{$pqrsd->id}} {{$pqrsd->tipoPqrsd}} </a> 
        </li>
    @endforeach
</ul>

{{$pqrsds->links()}}

@endsection

