<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pqrsd;
use App\Models\UserPqrsd;
use Illuminate\Http\Request;
use App\Mail\RespuestaPqrsd;
use Illuminate\Support\Facades\Mail;

class PqrsdController extends Controller
{
    public function index(){
        //Listar las PQRSD
        $pqrsds =  Pqrsd::orderBy('id', 'desc')-> paginate();
        return view('pqrsd.index', compact('pqrsds'));
    }
        
    public function create(){
        //Formulario creacion PQRSD
        return view('pqrsd.create');
    }

    public function store(Request $request){
        // Funcion Para crear otra PQRSD
        $pqrsd = new Pqrsd();
        $cliente = new Cliente();

        if($request->esAnonima = 'FALSE'){
            // echo"entro al if";
            //DATOS DEL CLIENTE       
            $cliente->primerNombre =$request->primerNombre;
            $cliente->segundoNombre =$request->segundoNombre;
            $cliente->primerApellido =$request->primerApellido;
            $cliente->segundoApellido =$request->segundoApellido;
            $cliente->tipoDocumento =$request->tipoDocumento;
            $cliente->numeroIdentificacion=$request->numeroIdentificacion;
            $cliente->fechaNacimiento=$request->fechaNacimiento;
            $cliente->genero=$request->genero;
            $cliente->direccion=$request->direccion;
            $cliente->correoElectronico=$request->correoElectronico;
        
            $cliente->save();
        }
        //DATOS PQRSD
        $pqrsd->idCliente = $cliente->id;
        $pqrsd->esAnonima = $request->esAnonima;
        $pqrsd->tipoPqrsd = $request->tipoPqrsd;
        $pqrsd->descripcion=$request->descripcion;
        $pqrsd->estado='enviado';
        
        $pqrsd->save();

         return redirect()->route('formulario.show',$pqrsd->id);
        
    }
      //funcion para mostrar una PQRSD Pqrsd, se optimizo   
    public function show(Pqrsd $pqrsd){
        // $pqrsd = Pqrsd::find($id);
        // $pqrsd;
         return view('pqrsd.show',compact('pqrsd'));
    }
    //funcion para editar una PQRSD
    public function edit(Pqrsd $pqrsd){
        // $pqrsd = Pqrsd::find($id);
        // $pqrsd;
        return view('pqrsd.edit',compact('pqrsd'));
    }

    //funcion para update una PQRSD
    public function update(Request $request, Pqrsd $pqrsd){
        $pqrsd->primerNombre = $request->primerNombre;
        
        $pqrsd->save();
        
        return redirect()->route('formulario.show',$pqrsd->id);;
    
    }

    public function answer(Pqrsd $pqrsd){
        
        $userPqrsd = new UserPqrsd();
        $cliente = new Cliente();
        $id=$pqrsd->idCliente;
        $cliente = Cliente::find($id);
       
        return view('pqrsd.answer',compact('pqrsd','cliente'));

        // return redirect()->route('formulario.show',$pqrsd->id);;
    
    }

    public function sendAnswer(Request $request){
     
        // dd($request->all());
        $subject = "es lo que me gusta";
        $for = "mplaza005@gmail.com";
        Mail::send('emails.RespuestaPqrsd',$request->all(), function($msj) use($subject,$for){
            $msj->from("arm@gmail.com","NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        return "enviado";



        // Mail::to('mplaza005@gmail.com')->send(new RespuestaPqrsd());

    }
}
