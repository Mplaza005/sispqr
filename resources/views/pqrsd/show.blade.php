@extends('layouts.plantilla')

@section('title')

@section('content')

<section class="container">
    <h1 class="mb-5">Su pqrsd ha sido ingresada exitosamante!!</h1>
   
    <div class="row">
            <div class=" col-md-6 mb-2">
                <article class="card fl-left">
                    <section class="date">
                        <time datetime="23th feb">
                          <span>{{ Carbon\Carbon::parse($pqrsd->created_at)->format('d')}}</span><span>{{date("F", strtotime($pqrsd->created_at)) }}</span>
        
                        </time>
                    </section>
                    <section class="card-cont">
                        <small>Estado: {{ $pqrsd->estado}}</small>
                        <h3>{{ $pqrsd->primerNombre}} {{ $pqrsd->segundoNombre}} </h3>
                        <div class="even-date">
                            <time>
                                <span><b>Radicado #:</b>{{ $pqrsd->id}}</span>
                                <span><b>Tipo:  </b>{{ $pqrsd->tipoPqrsd}}</span>
                                <span><b>Correo:</b>{{ $pqrsd->correoElectronico}}</span>
                                <span><b>Nombres:</b>{{ $cliente->primerNombre}} {{ $cliente->segundoNombre}}</span>
                                <span><b>Apellidos:</b>{{ $cliente->primerApellido}} {{ $cliente->segundoApellido}}  </span>
                                <span><b>C.C:  </b>{{ $cliente->numeroIdentificacion}}</span>
                            </time>
                        </div>
                     </section>
                 </article>
            </div>
            <div class="col-md-6 mb-2">
                <label>Descripcion:</label>
                <textarea type="textarea" class="form-control" name="descripcion">
                    {{$pqrsd->descripcion}}
                </textarea>     
            </div>
            <div class="col-md-6">
                <iframe src="{{ 'http://localhost/sispqr/public/storage/imagenes/' . $pqrsd->urlPdf }}"  frameborder="0"></iframe>
            </div>

    </div>
</section>


@endsection


