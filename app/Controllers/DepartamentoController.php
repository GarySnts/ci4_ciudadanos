<?php 

namespace App\Controllers;
use App\Models\DepartamentosModel;
Class DepartamentoController extends BaseController{

    Public function index():string{

        $departamento =new DepartamentosModel();
        $datos['datos']=$departamento->findAll();
        return view ('departamentos',$datos);
}
}
?>
