<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mascotas extends Controller
{
    //
    public function perros(){
        $productos = [
            array('id'=> '111', 'nombre' => 'Alimento para perros', 'precio' => 16900 , 'foto' =>'1.jpg'),
            array('id'=> '222', 'nombre' => 'Comedero Antideslizante', 'precio' => 35900 , 'foto' =>'2.jpg'),
            array('id'=> '333', 'nombre' => 'Snack Dental Vengano', 'precio' => 8700 , 'foto' => '3.jpg'),
            array('id'=> '444', 'nombre' => 'Correa Solaris', 'precio' => 21900 , 'foto' =>'4.jpg'),
            array('id'=> '555', 'nombre' => 'Alimento Humedo', 'precio' => 17000 , 'foto' =>'5.jpg'),
            array('id'=> '666', 'nombre' => 'Juguete para Perro', 'precio' => 22600 , 'foto' =>'6.jpg')
        ];
        return view('perros.productos', compact('productos'));
    }

    public function gatos(){
        $productos = [
            array('id'=> '999', 'nombre' => 'Alimento Humedo', 'precio' => 16900 , 'foto' =>'7.jpg'),
            array('id'=> '996', 'nombre' => 'Alimento para gatos', 'precio' => 21900 , 'foto' =>'8.jpg'),
            array('id'=> '995', 'nombre' => 'Juguete para gatos', 'precio' => 8700 , 'foto' => '9.jpg'),
            array('id'=> '878', 'nombre' => 'Cama para gatos', 'precio' => 211900 , 'foto' =>'10.jpg'),
            array('id'=> '879', 'nombre' => 'Correa Solaris', 'precio' => 17000 , 'foto' =>'11.jpg'),
            array('id'=> '880', 'nombre' => 'Arenera para gatos', 'precio' => 250000 , 'foto' =>'12.jpg')
        ];
        return view('gatos.productos', compact('productos'));
    }
}
