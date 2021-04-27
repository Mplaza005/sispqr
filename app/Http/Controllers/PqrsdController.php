<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pqrsd;
use App\Models\UserPqrsd;
use Illuminate\Http\Request;
use App\Mail\RespuestaPqrsd;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PqrsdController extends Controller
{   

    
    public function inicio(){
        // Sistema Login
        return view('login.form_login');
    }

    public function login(Request $request){

              
         $credentials =request()->only('email','password');
   
        if (Auth::attempt($credentials)){

            request()->session()->regenerate();
            return redirect()->route('pqrsds.index');
            // return redirect('formulario');

        }

        return view('login.form_login');

    }    


    public function index(){
     // Listar las PQRSD
      
         $pqrsds =  Pqrsd::orderBy('id', 'desc')->get();

        // $pqrsds =  DB::table('pqrsds')
        // ->join('clientes', 'pqrsds.idCliente', '=', 'clientes.id')
        // ->select('pqrsds.*', 'clientes.primerNombre', 'clientes.segundoNombre', 'clientes.numeroIdentificacion', 'clientes.correoElectronico')
        // ->get();
        
        // return $pqrsds;
        
        return view('pqrsd.listarPqrsds', compact('pqrsds'));
       

    }
        
    public function create(){
        //Formulario creacion PQRSD
        return view('pqrsd.create');
    }

    public function store(Request $request){
        // Funcion Para crear otra PQRSD
        $pqrsd = new Pqrsd();

        $imagenes = $request->file('urlPdf')->store('public/imagenes');

        $url= Storage::url($imagenes);
        $pqrsd->urlPdf = $url;

  
        if($request->esAnonima == 'FALSE'){
            
            //DATOS DEL CLIENTE
            $cliente = Cliente::create($request->all());      
            $pqrsd->idCliente = $cliente->id;
        }
            
            //DATOS PQRSD
            $pqrsd->esAnonima = $request->esAnonima;
            $pqrsd->tipoPqrsd = $request->tipoPqrsd;
            $pqrsd->descripcion = $request->descripcion;
            $pqrsd->estado = 'enviado';

            $pqrsd->save();
          
            return redirect()->route('pqrsds.show',$pqrsd->id);
            //  return view('pqrsd.show',compact('$pqrsd->id'));

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
        return redirect()->route('pqrsds.show',$pqrsd->id);
    
    }

public function destroy (Pqrsd $pqrsd){
    $pqrsd->delete();
    return redirect()->route('pqrsds.index');
}


    public function answer(Pqrsd $pqrsd){
        
        $userPqrsd = new UserPqrsd();
        $cliente = new Cliente();
        $id=$pqrsd->idCliente;
        $cliente = Cliente::find($id);
       
        return view('pqrsd.answer',compact('pqrsd','cliente'));

    }

    public function sendAnswer(Request $request){
     
        $userPqrsd= new UserPqrsd();
        $userPqrsd->idcliente = $request->idCliente;
        $userPqrsd->idpqrsd = $request->idPqrsd;
        $userPqrsd->descEstado = $request->descripcion;

        $userPqrsd->save();

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
