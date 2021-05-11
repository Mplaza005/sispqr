

        // $nombreArchivo = $request->numeroIdentificacion;
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $pqrsd->urlPdf = $nombreArchivo;
        // $prueba = env('URL_RESOURCES', 'hola');




        // $pqrsds =  DB::table('pqrsds')
        // ->join('clientes', 'pqrsds.idCliente', '=', 'clientes.id')
        // ->select('pqrsds.*', 'clientes.primerNombre', 'clientes.segundoNombre', 'clientes.numeroIdentificacion', 'clientes.correoElectronico')
        // ->get();
        
        // return $pqrsds;
        


        if($request->hasFile("urlPdf")){
            
            $file=$request->file("urlPdf");
    
            $nombreArchivo = "pdf_".time().".".$file->guessExtension();
            
            if($file->guessExtension()=="jpg"){
                
                $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
                $pqrsd->urlPdf = $nombreArchivo;
                
            }else{
                dd("NO ES UN PDF");
            }
        }
        

        @if($errors->any()) {{ implode('', $errors->all('<div>:message</div>')) }} @endif






        <form action="{{route('pqrsds.destroy',$pqrsd)}}" method="POST">
         @csrf
         @method('delete')
         <button type="submit">Eliminar</button>
        </form>













        {{-- <h1>Su PQRSD ha sido ingreseda exitosamente</h1>
<h4>Id Pqrsd:{{$pqrsd->id}}</h4>
<h4>Id Cliente:{{$pqrsd->idCliente}}</h4>
<h4>Correo Electronico:{{$pqrsd->correoElectronico}}</h4>
<p><Strong>Descripcion:</Strong>
    {{$pqrsd->descripcion}}
</p>

<p><Strong>Archivo adjunto:</Strong>
    {{$pqrsd->urlPdf}}
</p> --}}

{{-- <iframe width="400" height="400" src="{{'http://localhost/sispqr/public/storage/imagenes/'}}" frameborder="0"></iframe> --}}

{{-- <iframe src="{{ 'http://localhost/sispqr/public/storage/imagenes/' . $pqrsd->urlPdf }}"  frameborder="0"></iframe> --}}

 {{-- <img  width="100px" src="{{ 'http://localhost/sispqr/public/storage/imagenes/' . $pqrsd->urlPdf }}" />  --}}

{{-- <a href="{{route('pqrsds.answer',$pqrsd)}}">contestar</a>
<br>
<a href="{{route('pqrsds.index')}}">Volver</a>

<a href="{{route('pqrsds.edit',$pqrsd)}}">Editar PQRSD</a> --}}

