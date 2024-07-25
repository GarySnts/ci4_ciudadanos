<?php

namespace App\Controllers;

use App\Models\NivelesAcadModel;
class NIvelAcademicoController extends BaseController{

    public function index():string{

        $nivel = new NivelesAcadModel();
        $datos['datos']=$nivel->findAll();
        return view ('niveles_academicos',$datos);
}
}
?>