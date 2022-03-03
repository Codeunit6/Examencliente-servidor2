<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unidad2Model;

class unidad2Controller extends Controller
{
    public function mostrarinformacion1(){
        $variable=1;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-1',['informacion'=>$informacion]);
    }
    public function mostrarinformacion2(){
        $variable=2;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-2',['informacion'=>$informacion]);
    }
    public function mostrarinformacion3(){
        $variable=3;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-3',['informacion'=>$informacion]);
    }
    public function mostrarinformacion4(){
        $variable=4;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-4',['informacion'=>$informacion]);
    }
    public function mostrarinformacion5(){
        $variable=5;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-5',['informacion'=>$informacion]);
    }
    public function mostrarinformacion6(){
        $variable=6;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-6',['informacion'=>$informacion]);
    }
    public function mostrarinformacion7(){
        $variable=7;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-7',['informacion'=>$informacion]);
    }
    public function mostrarinformacion8(){
        $variable=8;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-8',['informacion'=>$informacion]);
    }
    public function mostrarinformacion9(){
        $variable=9;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-9',['informacion'=>$informacion]);
    }
    public function mostrarinformacion10(){
        $variable=10;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-10',['informacion'=>$informacion]);
    }
    public function mostrarinformacion11(){
        $variable=11;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-11',['informacion'=>$informacion]);
    }
    public function mostrarinformacion12(){
        $variable=12;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-12',['informacion'=>$informacion]);
    }
    public function mostrarinformacion13(){
        $variable=13;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-13',['informacion'=>$informacion]);
    }
    public function mostrarinformacion14(){
        $variable=14;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-14',['informacion'=>$informacion]);
    }
    public function mostrarinformacion15(){
        $variable=15;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-15',['informacion'=>$informacion]);
    }
    public function mostrarinformacion16(){
        $variable=16;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-16',['informacion'=>$informacion]);
    }
    public function mostrarinformacion17(){
        $variable=17;
        $informacion = unidad2Model::find($variable);
        return view('blog.unidad2-17',['informacion'=>$informacion]);
    }
    public function menu(){
        $variable=1;
        $variable2=2;
        $variable3=3;
        $variable4=4;
        $informacion = unidad2Model::find($variable);
        $informacion2 = unidad2Model::find($variable2);
        $informacion3 = unidad2Model::find($variable3);
        $informacion4 = unidad2Model::find($variable4);
        return view('blog.home7',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function menu2(){
        $variable=5;
        $variable2=6;
        $variable3=7;
        $variable4=8;
        $informacion = unidad2Model::find($variable);
        $informacion2 = unidad2Model::find($variable2);
        $informacion3 = unidad2Model::find($variable3);
        $informacion4 = unidad2Model::find($variable4);
        return view('blog.home8',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function menu3(){
        $variable=9;
        $variable2=10;
        $variable3=11;
        $variable4=12;
        $informacion = unidad2Model::find($variable);
        $informacion2 = unidad2Model::find($variable2);
        $informacion3 = unidad2Model::find($variable3);
        $informacion4 = unidad2Model::find($variable4);
        return view('blog.home9',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function menu4(){
        $variable=13;
        $variable2=14;
        $variable3=15;
        $variable4=16;
        $informacion = unidad2Model::find($variable);
        $informacion2 = unidad2Model::find($variable2);
        $informacion3 = unidad2Model::find($variable3);
        $informacion4 = unidad2Model::find($variable4);
        return view('blog.home10',['informacion'=>$informacion,'informacion2'=>$informacion2,'informacion3'=>$informacion3,'informacion4'=>$informacion4]);
    }
    public function menu5(){
        $variable=17;
        $informacion = unidad2Model::find($variable);
        return view('blog.home11',['informacion'=>$informacion]);
    }
    public function tablaprogramador(){
        $informacion = unidad2Model::all();
        return view('blog.tablap',['informacion'=>$informacion]);
    }
    public function tablausuario(){
        $informacion = unidad2Model::all();
        return view('blog.tablau',['informacion'=>$informacion]);
    }


}
