

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
        