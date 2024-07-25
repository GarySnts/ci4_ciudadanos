<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        //findAll() = select * from regiones;
        //print_r ($region->findAll());
        return view('regiones',$datos);
    }
}
