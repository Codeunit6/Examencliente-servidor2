<?php

namespace App\Http\Controllers;

use App\Models\basedataModel;
use Illuminate\Http\Request;

class basedataController extends Controller
{
    //
    public function mostrarinformacion1(){
        $variable=1;
        $informacion = basedataModel::find($variable);
        
        /*echo "<table border='1'";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Contenido</th>";
        echo "</tr>";
       
            echo "<tr>";
            echo "<td>".$informacion->id."</td>";
            echo "<td>".$informacion->titulo."</td>";
            echo "<td>".$informacion->contenido."</td>";
        
        echo "</table";*/
        return view('blog.unidad1-1',['informacion'=>$informacion]);
        
    }
    public function mostrarinformacion2(){
        $variable=2;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-2',['informacion'=>$informacion]);
    }
    public function mostrarinformacion3(){
        $variable=3;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-3',['informacion'=>$informacion]);
    }
    public function mostrarinformacion4(){
        $variable=4;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-4',['informacion'=>$informacion]);
    }
    public function mostrarinformacion5(){
        $variable=5;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-5',['informacion'=>$informacion]);
    }
    public function mostrarinformacion6(){
        $variable=6;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-6',['informacion'=>$informacion]);
    }
    public function mostrarinformacion7(){
        $variable=7;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-7',['informacion'=>$informacion]);
    }
    public function mostrarinformacion8(){
        $variable=8;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-8',['informacion'=>$informacion]);
    }
    public function mostrarinformacion9(){
        $variable=9;
        $informacion = basedataModel::find($variable);
        return view('blog.unidad1-9',['informacion'=>$informacion]);
    }
    public function menu(){
        $variable=1;
        $variable2=2;
        $variable3=3;
        $variable4=4;
        $informacion = basedataModel::find($variable);
        $informacion2 = basedataModel::find($variable2);
        $informacion3 = basedataModel::find($variable3);
        $informacion4 = basedataModel::find($variable4);
        return view('blog.home3',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function menu2(){
        $variable=5;
        $variable2=6;
        $variable3=7;
        $variable4=8;
        $informacion = basedataModel::find($variable);
        $informacion2 = basedataModel::find($variable2);
        $informacion3 = basedataModel::find($variable3);
        $informacion4 = basedataModel::find($variable4);
        return view('blog.home4',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function tablaprogramador(){
        $informacion = basedataModel::all();
        return view('blog.home5',['informacion'=>$informacion]);    
    }
    public function tablausuario(){
        $informacion = basedataModel::all();
        return view('blog.home6',['informacion'=>$informacion]);    
    }

}
