@extends('layouts.plantilla')

@section('title')

@section('content')
    <section class="container">
        <h1>lista Pqrsd´s</h1>
       
        <a href="{{route('pqrsds.create')}}">Crear PQR</a>

        <div class="row">

            @foreach ($pqrsds as $pqrsd)
                <div class=" col-md-6 mb-2">
                    <article class="card fl-left">
                        <section class="date">
                            <time datetime="23th feb">
                              <span>{{ Carbon\Carbon::parse($pqrsd->created_at)->format('d')}}</span><span>{{date("F", strtotime($pqrsd->created_at)) }}</span>


                                <!-- $pqrsd->created_at->monthName -->

                                
                            </time>
                        </section>
                        <section class="card-cont">
                            <small>{{ $pqrsd->estado}}</small>
                            <h3>{{ $pqrsd->primerNombre}} {{ $pqrsd->segundoNombre}} </h3>
                            <div class="even-date">
                                <i class="fa fa-calendar"></i>
                                <time>
                                    <span><b>EMAIL: </b> {{ $pqrsd->correoElectronico}}</span>
                                    <span><b>C.C: </b>{{ $pqrsd->numeroIdentificacion}}</span>
                                    <span><b>TIPO </b>{{ $pqrsd->tipoPqrsd}}</span>
                                </time>
                            </div>
                            <div class="even-info">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                {{ $pqrsd->descripcion}}
                                </p>
                            </div>
                            <a href="{{route('pqrsds.answer',$pqrsd->id)}}">Responder</a>
                        </section>
                    </article>
                </div>
            @endforeach
        </div>
    </section>



@endsection