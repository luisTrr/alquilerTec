<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function Registrar(Request $request){
        $request->validate([
            'nombre'=> 'required',
            'correo'=>'required|email|unique:usuarios',
            'password'=>'required|confirmed',
            'celular'=>'required'
        ]);
        $user= new Usuarios();
        $user -> nombre = $request -> nombre;
        $user -> correo = $request -> correo;
        $user -> password = Hash::make($request -> password);
        $user -> celular = $request -> celular;
        $user -> save();
        
        return response()->json([
            "status"=>1,
            "msg"=>"Registro de usuario exitoso",
        ]);

    } 
    public function Login(Request $request){
        $request->validate([
            'correo'=>'required|email',
            'password'=>'required'
        ]);
        $user = Usuarios::where("correo","=",$request->correo)->first();

        if(isset($user->id)){
            if(Hash::check($request->password, $user->password)){
                $token=$user->createToken("auth_token")->plainTextToken;
                return response()->json([
                    "status"=>1,
                    "msg"=>"El usuario ingreso a su cuenta exitosamente",
                    "Token_de_acceso"=>$token  
                ]);
            }
            else{
                return response()->json([
                    "status"=>0,
                    "msg"=>"La contrasenia es incorrecta"
                ]);
            }
        }
        else{
            return response()->json([
                "status"=>0,
                "msg"=>"Usuario no registrado"
            ]);
        }
    } 
    public function PerfilUsuario(){
        return response()->json([
            "status"=>0,
            "msg"=>"Acerca del perfil de usuario",
            "Datos"=>auth()->user()
        ]);
    } 
    public function LogOut (){
        auth()->user()->tokens()->delete();
        return response()->json([
            "status"=>1,
            "msg"=>"Sesion cerrada con exito"
        ]);
    } 
}


