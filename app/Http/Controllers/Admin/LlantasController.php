<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Category, App\Http\Models\Products;
use Illuminate\Support\Str;

class LlantasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getLlantas(){
    return view('admin.llantas.home');
   }
   public function getLlantasAdd(){
    $cats = Category::where('module','1')->pluck('name','id');
    $data = ['cats' => $cats];

    return view('admin.llantas.add', $data);
   }

   public function postLlantasAdd(Request $request){
    $rules = [
        'modelo' => 'required',
        'img' => 'required|image',
        'precio' => 'required',
        'ancho' => 'required',
        'alto' => 'required',
        'rin' => 'required',

    ];
    $messages = [
        "modelo.required" => "Se requiere un nombre de categoría",
        "img.required" => "Se requiere imagen para producto",
        "img.image" => "El archivo no es una imagen valida",
        "precio.required" => "Se requiere de un ícono para la categoría",
        "alto.required" => "Ingrese un alto",
        "ancho.required" => "Ingrese un ancho",
        "rin.required" => "Ingrese un rin",
    ];

    $validator = Validator::make($request->all(), $rules, $messages);
    if ($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert','danger')->withInput();
    else:
        $path = '/'.date('Y-m-d');
        $fileExt = trim($request->file('img')->getClientOriginalExtension());
        return $fileExt;

        $product= new Products;
        $product -> status = '0';
        $product -> name = e($request->input('modelo'));
        $product -> slug = Str::slug($request->input('modelo'));
        $product -> category_id = $request->input('category');
        $product -> image = "image.png";
        $product -> precio = $request->input('precio');
        $product -> in_discount = $request->input('indiscount');
        $product -> discount = $request->input('discount');
        $product -> alto = $request->input('alto');
        $product -> ancho = $request->input('ancho');
        $product -> rin = $request->input('rin');



        if($product->save()):
            return redirect('/admin/llantas')->with('message', 'Guardado con éxito')->with('typealert', 'success');
        endif;
    endif;

   }
}
