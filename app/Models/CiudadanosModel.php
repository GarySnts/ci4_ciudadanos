<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanosModel extends Model{

    protected $table         = 'ciudadanos';
    protected $primaryKey    = 'dpi';
    protected $allowedFields = [
        'dpi', 'apellido', 'nombre', 'direccion', 'tel_movil', 'email','cod_nivel_acad', 'cod_muni', 'fechanac',
    ];
}
?>