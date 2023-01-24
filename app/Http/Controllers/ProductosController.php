<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductosController extends Controller
{
    public function mostrar(){
        return view('productos');
    }


    public function computadoras(){

        $computadoras = Product::where('categoria', 'computadoras')->get();
        
        return view('computadoras', compact('computadoras'));
    }

    public function telefonos(){

        $telefonos = Product::where('categoria', 'smarthphones')->get();

        return view('telefonos', compact('telefonos'));
    }

    public function tablets(){

        $tablets = Product::where('categoria', 'tablets')->get();

        return view('tablets', compact('tablets'));
    }


    
    public function computadorasVer($computadoras){

        $producto = Product::where('nombre', $computadoras)->first();
    
        if($producto == null){
            abort(404);
        }

        return view('computadora', compact('producto'));
    }

    public function telefonosVer($telefonos){

        $producto = Product::where('nombre', $telefonos)->first();
    
        if($producto == null){
            abort(404);
        }

        return view('telefono', compact('producto'));
    }

    public function tabletsVer($tableta){

        $producto = Product::where('nombre', $tableta)->first();
    
        if($producto == null){
            abort(404);
        }

        return view('tableta', compact('producto'));

    }

}
