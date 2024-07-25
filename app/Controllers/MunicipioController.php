<?php

namespace App\Controllers;

use App\Models\MunicipiosModel;
class MunicipioController extends BaseController{

    public function index():string{

        $muni = new MunicipiosModel();
        $datos['datos']=$muni->findAll();
        return view ('municipios',$datos);
}
}
?>