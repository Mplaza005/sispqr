@extends('layouts.plantilla')

@section('title','create PQRSD')

@section('content')


    <div class="container">
        <h2 class="display-4 text-center my-5">Formulario</h2>
        
        {{--FORMULARIO --}}
        
        <form action="{{route('formulario.store')}}"  method="POST">

            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                     <label>Selecione si su peticion es anonima o no anonima</label>
                     <select name="esAnonima" class="form-control">
                     <option selected>Selecione una opcion</option>
                     <option value="TRUE">Anonima</option>
                     <option value="FALSE">No anonima</option>
                     </select>
                     </div>

              <div class="form-group col-md-6">
                     <label>Tipo PQRSD</label>
                     <select name="tipoPqrsd" class="form-control">
                     <option selected>Selecione una opcion</option>
                     <option value="peticion")>Peticion</option>
                     <option value="queja">Queja</option>
                     <option value="reclamo">Reclamo</option>
                     <option value="solicitud">Solicitud</option>
                     <option value="denuncia">Denuncia</option>
                     </select>
                     </div>
              </div>
            {{-- DATOS PERSONALES --}}

             <h2 class="display-7 text-lef my-3">Datos Personales</h2> 
            
             <div class="form-row"> 

             <div class="form-group col-md-6"> 
                    <label>Primer nombre</label>
                    <input name="primerNombre" type="text" class="form-control"  placeholder="Ejemplo: Juan">
             </div>  
           
             <div class="form-group col-md-6">
                    <label>Segundo nombre</label>
                    <input name="segundoNombre"type="text" class="form-control" id=" " placeholder="Ejemplo: Carlos">
             </div>  
             <div class="form-group col-md-6">
                    <label>Primer apellido</label>
                    <input name="primerApellido"type="text" class="form-control" id=" " placeholder="Ejemplo: Velez">
             </div>    
            
             <div class="form-group col-md-6">
                    <label>Segundo apellido</label>
                    <input name="segundoApellido"type="text" class="form-control" id=" " placeholder="Ejemplo: Posada ">
             </div> 
 
             <div class="form-group col-md-6">
                    <label>Tipo Documento</label>
                    <select name="tipoDocumento" class="form-control">
                    <option selected>Cedula de Cuidadania</option>
                    <option>Cedula de Extrangeria</option>
                    <option>Targeta de identidad</option>
                    <option>Nit</option>
                    </select>
             </div>

             <div class="form-group col-md-6">
                    <label>Número Identificacion</label>
                    <input type="number" name="numeroIdentificacion" class="form-control" id=" " placeholder="Numero identificacion">
             </div>
                    
             <div class="form-group col-md-6">
                    <label>Fecha de nacimiento</label>
                    <input type="phone" name="fechaNacimiento" class="form-control" id="inputEmail4" placeholder="año-mes-dia">
             </div>

             {{-- SELECT GENERO --}}

             <div class="form-group col-md-6">
                    <label>Genero</label>
                    <select name="genero" class="form-control">
                    <option selected>Masculino</option>
                    <option>Femenino</option>
                    <option>Otro</option>
                    </select>
             </div>
             
             <div class="form-group col-md-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Cra 15 # 20n-51 ">
              </div>
               
             <div class="form-group col-md-6">
                    <label>Correo electronico</label>
                    <input type="email" class="form-control" name="correoElectronico" placeholder="Ejemplo: pepe@gmail.com">
             </div> 

             <div class="form-group col-md-6">
                    <label>Descripcion Solicitud</label>
                    <textarea type="textarea" class="form-control" name="descripcion"> </textarea>

             </div>

                {{--SECCION DE ADJUNTAR ARCHIVOS--}}

             </div> 
                <div class="form-group">
                <label >Adjuntar archivo PDF</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
             </div> 

             <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">Acepta terminos y condiciones</label>
                    <div class="invalid-feedback">
                        Debe aceptar antes de enviar el formulario.
                    </div>
                </div>
             </div> 
            
            {{--BUTTON DE ENVIAR  --}}
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
        
        </form>
    </div>

@endsection
