@extends('layouts.plantilla')

@section('title')

@section('content')
    <section class="container">
        <h1>Listado PQRSD</h1>

        <a href="{{route('formulario.create')}}">Crear PQR</a>

        <div class="row">

            @foreach ($pqrsds as $pqrsd)
                <div class=" col-md-6 mb-2">
                    <article class="card fl-left">
                        <section class="date">
                            <time datetime="23th feb">
                                <span>{{ $pqrsd->created_at->format('d')}}</span><span>{{date("F", strtotime($pqrsd->created_at)) }}</span>


                                <!-- $pqrsd->created_at->monthName -->

                                
                            </time>
                        </section>
                        <section class="card-cont">
                            <small>{{ $pqrsd->estado}}</small>
                            <h3>{{ $pqrsd->tipoPqrsd}}</h3>
                            <div class="even-date">
                                <i class="fa fa-calendar"></i>
                                <time>
                                    <span>wednesday 28 december 2014</span>
                                    <span>08:55pm to 12:00 am</span>
                                </time>
                            </div>
                            <div class="even-info">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    nexen square for people australia, sydney
                                </p>
                            </div>
                            <a href="#">tickets</a>
                        </section>
                    </article>
                </div>
            @endforeach
        </div>
    </section>



@endsection