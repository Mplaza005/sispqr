<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use App\Models\Pqrsd;
use App\Models\UserPqrsd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePqrsd;
use App\Mail\RespuestaPqrsd;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class PqrsdController extends Controller
{   

    // public function inicio(){
    //     // Sistema Login
    //     return view('login.form_login');
    // }

    // public function login(Request $request){

    //     $credentials =request()->only('email','password');

    //     if (Auth::attempt($credentials)){

    //         request()->session()->regenerate();
    //         return redirect()->route('pqrsds.index');
    //         // return redirect('formulario');

    //     }

    //     return view('login.form_login');

    // }    


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
    //Store
    public function store(StorePqrsd $request){
      
        $cliente = new Cliente();

    
            //Crear una Pqrsd
            $pqrsd = Pqrsd::create($request->all());
            $pqrsd->estado = 'enviado';
            //ADJUNTAR EL PDF
            $file=$request->file("urlPdf");
            $nombreArchivo = "pdf_".time().".".$file->guessExtension();
            $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
            $pqrsd->urlPdf = $nombreArchivo;
    
        if($request->esAnonima == 'FALSE'){
            //DATOS DEL CLIENTE
            $cliente = Cliente::create($request->all());      
            $pqrsd->idCliente = $cliente->id;

        }
            $pqrsd->save();
        
            return view('pqrsd.show',compact('pqrsd','cliente'));
            
    }

    //Show
    public function show(Pqrsd $pqrsd){
        
        if($temp=Cliente::find($pqrsd->idCliente)){
            $cliente=$temp;
             return view('pqrsd.show',compact('pqrsd','cliente'));
        }
        $cliente = new Cliente();
        return view('pqrsd.show',compact('pqrsd','cliente'));
    }

    //Edit
    public function edit(Pqrsd $pqrsd){
        
        if($temp=Cliente::find($pqrsd->idCliente)){
            $cliente=$temp;
             return view('pqrsd.edit',compact('pqrsd','cliente'));
        }
        $cliente = new Cliente();
        return view('pqrsd.edit',compact('pqrsd','cliente'));

    }
    //Update
    public function update(Request $request, Pqrsd $pqrsd){
       
        $pqrsd->primerNombre = $request->primerNombre;
        $pqrsd->save();
        
        
        return redirect()->route('pqrsds.show',$pqrsd->id);
    
    }
    //Destroy
    public function destroy (Pqrsd $pqrsd){
        $pqrsd->delete();
        return redirect()->route('pqrsds.index');
    }


    public function answer(Pqrsd $pqrsd){
        //por optimizar
        $userPqrsd = new UserPqrsd();
        
        if($cliente=Cliente::find($pqrsd->idCliente))
        {
         return view('pqrsd.answer',compact('pqrsd','cliente'));
        }

        $cliente = new Cliente();
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
