@extends('layouts.plantilla')

@section('title','Edit PQRSD')

@section('content')


    <div class="container">
        <h2 class="display-4 text-center my-5">Editar pqrsd</h2>
        
        {{--FORMULARIO --}}
        
        <form action="{{route('formulario.update', $pqrsd)}}"  method="POST">

            @csrf
            @method('put')

            {{-- DATOS PERSONALES --}}

             <h2 class="display-7 text-lef my-3">Datos Personales</h2> 
            
             <div class="form-row"> 

             <div class="form-group col-md-6"> 
                    <label>Primer nombre</label>
                    <input name="primerNombre" type="text" class="form-control" value="{{$pqrsd->primerNombre}}" placeholder="Ejemplo: Juan">
             </div>  
           
             <div class="form-group col-md-6">
                    <label>Segundo nombre</label>
                    <input name="segundoNombre"type="text" class="form-control" value= "{{$pqrsd->segundoNombre}}" placeholder="Ejemplo: Carlos">
             </div>  
             <div class="form-group col-md-6">
                    <label>Primer apellido</label>
                    <input name="primerApellido"type="text" class="form-control"value="{{$pqrsd->primerApellido}}" placeholder="Ejemplo: Velez">
             </div>    
            
             <div class="form-group col-md-6">
                    <label>Segundo apellido</label>
                    <input name="segundoApellido"type="text" class="form-control" value="{{$pqrsd->segundoApellido}}"  placeholder="Ejemplo: Posada ">
             </div> 
 
             <div class="form-group col-md-6">
                    <label>Número Identificacion</label>
                    <input type="number" name="numeroIdentificacion" class="form-control" id=" " placeholder="Numero identificacion">
             </div>
                    
             
             <div class="form-group col-md-6">
                    <label>Correo electronico</label>
                    <input type="email" class="form-control" name="correoElectronico" placeholder="Ejemplo: pepe@gmail.com">
             </div> 

             <div class="form-group col-md-6">
                    <label>Descripcion Solicitud</label>
                    <textarea type="textarea" class="form-control" name="descripcion">
                        {{$pqrsd->descripcion}}
                    </textarea>

             </div>

            
            {{--BUTTON DE ENVIAR  --}}
           
            <button class="btn btn-primary mb-3" type="submit">Actualizar PQRSD</button>
        
        </form>
    </div>

@endsection
