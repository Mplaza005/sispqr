@extends('layouts.plantilla')

@section('title','create PQRSD')

@section('content')


    <div class="container">
        <h2 class="display-4 text-center my-5">Formulario</h2>
        
        <!-- FORMULARIO  -->
        
        <form action="{{route('pqrsds.store')}}"  method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-row">
                 <div class="form-group col-md-4">
                     <label>Anonima o no anonima</label>
                     <select name="esAnonima" class="form-control">
                       <option selected value="">Selecione una opcion</option>
                       <option value="TRUE">Anonima</option>
                       <option value="FALSE">No anonima</option>
                     </select>
                     @error('esAnonima')
                       <small class="text-danger">{{$message}}</small>
                     @enderror
                 </div>

                  <div class="form-group col-md-4">
                     <label>Tipo PQRSD</label>
                     <select name="tipoPqrsd" class="form-control">
                        <option selected value="">Selecione una opcion</option>
                        <option value="peticion">Peticion</option>
                        <option value="queja">Queja</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="solicitud">Solicitud</option>
                        <option value="denuncia">Denuncia</option>
                     </select>
                     @error('tipoPqrsd')
                       <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>

                  <div class="form-group col-md-4">
                     <label>Tipo Persona</label>
                     <select name="tipoPersona" class="form-control">
                        <option selected value="">Selecione una opcion</option>
                        <option value="natural">Natural</option>
                        <option value="juridica">Juridica</option>
                        <option value="apoderado">Apoderado</option>
                        <option value="ninos_ninas_adolecentes">niños, niñas, adolecentes</option>
                      </select>
                     @error('tipoPersona')
                       <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
              
              </div>
             <!-- DATOS PERSONALES  -->

             <h2 class="display-7 text-lef my-3">Datos Personales</h2> 
            
             <div class="form-row"> 

             <div class="form-group col-md-6"> 
                    <label>Primer nombre</label>
                    <input name="primerNombre" type="text" class="form-control" value="{{old ('primerNombre')}}"  placeholder="Ejemplo: Juan">
             </div>  
           
             <div class="form-group col-md-6">
                    <label>Segundo nombre</label>
                    <input name="segundoNombre"type="text" class="form-control" value="{{old ('segundoNombre')}}" placeholder="Ejemplo: Carlos">
             </div>  
             <div class="form-group col-md-6">
                    <label>Primer apellido</label>
                    <input name="primerApellido"type="text" class="form-control" value="{{old ('primerApellido')}}" placeholder="Ejemplo: Velez">
             </div>    
            
             <div class="form-group col-md-6">
                    <label>Segundo apellido</label>
                    <input name="segundoApellido"type="text" class="form-control" value="{{old ('segundoApellido')}}" placeholder="Ejemplo: Posada ">
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
                    <input type="number" name="numeroIdentificacion" class="form-control" value="{{old ('numeroIdentificacion')}}" placeholder="Numero identificacion">
             </div>
                    
             <div class="form-group col-md-6">
                    <label>Fecha de nacimiento</label>
                    <input type="Date" name="fechaNacimiento" class="form-control " class="datepicker" data-date-format="mm/dd/yyyy" >
             </div>

             <!-- SELECT GENERO  -->

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
                    <input type="text" class="form-control" name="direccion" value = "{{old ('direccion')}}"  placeholder="Cra 15 # 20n-51 ">
              </div>
               
             <div class="form-group col-md-6">
                    <label>Correo electronico</label>
                    <input type="email" class="form-control" name="correoElectronico" value="{{old ('email')}}"placeholder="Ejemplo: pepe@gmail.com">
                    @error('correoElectronico')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
             </div> 

             <div class="form-group col-md-6">
                    <label>Descripcion Solicitud</label>
                    <textarea type="textarea" class="form-control" name="descripcion">{{old ('descripcion')}}</textarea>
                    @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

             </div>

                <!-- SECCION DE ADJUNTAR ARCHIVOS -->

             </div> 
                <div class="form-group">
                <label >Adjuntar archivo PDF</label>
                <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
             @error('urlPdf')
              <small class="text-danger">{{$message}}</small>
             @enderror
             </div> 
       
       <!-- 
              <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">Acepta terminos y condiciones</label>
                    <div class="invalid-feedback">
                        Debe aceptar antes de enviar el formulario.
                    </div>
                </div>
             </div>  -->
            
       <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
        
        </form>
    </div>

@endsection
