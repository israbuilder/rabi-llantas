<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\Models\User;

class ConnectController extends Controller
{
    public function __construct(){
            $this->middleware('guest')->except(['getLogout']);
    }
    public function getLogin(){
        return view("connect.login");
    }
    public function postLogin(Request $request){
       $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',

       ];
       $messages = [
        'email.required' => 'Su correo electronico es requerido',
        'email.email' => 'El formato de correo es invalido',
        'password.required' => 'Su password es requerido',
        'password.min' => 'Su password es requerido',

       ];
       $validator = Validator::make($request->all(), $rules, $messages);
       if ($validator->fails()):
           return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert','danger');
       else:
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
                return redirect('/admin');
            else:
                return back()->with('message','Contraseña o Correo es Erroneo .')->with('typealert', 'danger');
            endif;
        endif;

    }
    public function getRegister(){
        return view("connect.register");
    }
    public function postRegister(Request $request){
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',
        ];

        $messages = [
            'name.required' => 'Su nombre es requerido',
            'lastname.required' => 'Su apeido es requerido',
            'phone.required' => 'Su tel es requerido',
            'email.required' => 'Su correo es requerido',
            'email.email' => 'El formato de su correo es inválido',
            'email.unique' => 'Ya existe un usuario con este correo',
            'password.required' => 'Su contraseña es requerida',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'cpassword.required' => 'Es necesario confirmar la contraseña',
            'cpassword.same' => 'Las contraseñas no coinciden',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert','danger');
        else:
            $user = new User;
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastname'));
            $user->email = e($request->input('email'));
            $user->phone = e($request->input('phone'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()):
                return redirect('/login')->with('message','El usuario se ha creado con éxito!')->with('typealert','success');
        endif;
    endif;
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}
