<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // if($request->hasFile("urlPdf")){
            
    //     $file=$request->file("urlPdf");

    //     $nombre = "pdf_".time().".".$file->guessExtension();

    //     $ruta = public_path("pdf/".$nombre);

    //     if($file->guessExtension()=="pdf"){
            
    //         copy($file, $ruta);
    //         $pqrsd->urlPdf=$ruta;
    //         $pqrsd->save();
           
    //         return redirect()->route('pqrsds.show',$pqrsd->id);
            
    //     }else{
    //         dd("NO ES UN PDF");
    //     }
    // }
}
