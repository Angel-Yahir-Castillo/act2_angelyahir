<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use ZipArchive;

class ProductosController extends Controller
{
    public function mostrar(){
        return view('productos');
    }

    public function respaldar(){

        
        $nombre = "BancoNacionalDeHuejutla";
        $usuario = "root";
        $password = "";
    
        $fecha = date('Y-m-d_His');
    
        $nombre_sql = $nombre.'-'.$fecha.'.sql';
    
        $dump = "mysqldump --user=$usuario --password=$password $nombre > $nombre_sql";
    
        exec($dump);
    
        //para guardar en .zip
        $zip = new ZipArchive();
    
        $nombre_zip = $nombre.'-'.$fecha.'.zip';
    
        if($zip->open($nombre_zip, ZipArchive::CREATE) === true){
            $zip->addFile($nombre_sql);
            $zip->close();
            unlink($nombre_sql);
            header("Location: $nombre_zip");
            exit();
            //return redirect(route('home'));
        };

        
    }

    public function computadoras(){

        $computadoras = Product::where('categoria', 'computadoras')->get();
        

       // return $computadoras;
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
            abort(500);
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


    public function productoVer($productoVer){

        $producto = Product::where('nombre', $productoVer)->first();
    
        if($producto == null){
            abort(404);
        }

        return view('unProducto', compact('producto'));

    }


    public function busqueda(Request $request){

        $productos = Product::where('nombre',  'Like', '%'.$request->nombre.'%')->get();
    
        $data = [
            'productos' => $productos,
        ];
        if($productos == null){
            return 'No hay productos';
        }

        return view('busqueda', $data);

    }

    public function busquedaAvanzada(Request $request){

        $productos = Product::where('marca',  'Like', '%'.$request->marca.'%')->where('categoria', $request->categoria)->get();
    
        $data = [
            'productos' => $productos,
        ];
        if($productos == null){
            return 'No hay productos';
        }

        
        return view('busqueda', $data);

    }
}
