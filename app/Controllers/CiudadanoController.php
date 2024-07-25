<?php 

namespace App\Controllers;
use App\Models\CiudadanosModel;
Class CiudadanoController extends BaseController{

    Public function index():string{

        $ciudadano =new CiudadanosModel();
        $datos['datos']=$ciudadano->findAll();
        return view ('ciudadanos',$datos);
    }

    public function agregarCiudadanos(){

        $datos = [
            'dpi'=>$this->request->getVar('txtDpi'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nomnbre'=>$this->request->getvar('txtNombre'),
            'direccion' =>$this->request->getVar('txtDireccion'),
            'tel_casa'=>$this->request->getVar('txtTelCasa'),
            'tel_movil'=>$this->request->getVar('txt TelMovil'),
            'email'=>$this->request->getVar('txtEmail'),
            'fechanac'=>$this ->request ->getVar('txtFecha'),
            'cod_nivel-acad'=>$this->request->getVar('txtCodNivel'),
            'cod_muni' =>$this->request->getVar('txtCodMuni'),
            'contra' =>$this->request->getVar('txtContra')
        ];
        $ciudadano = new CiudadanosModel();
        $ciudadano->insert($datos);
        return redirect()->route('ver_ciudadanos');
        }


    public function nuevoCiudadano(){

        return view('ciudadanos_nuevos');
    }

    public function eliminarCiudadano($id=null){
        $ciudadano = new CiudadanosModel();
        $ciudadano->delete($id);
        return redirect()->route('ver_ciudadanos');
    }

    public function buscarCiudadanos($id=null){
        $ciudadano=new CiudadanosModel();
        $datos['datos']=$ciudadano->where('dpi', $id)->first();
        return view('form_modificar_ciudadano', $datos);
    }

    public function modificarCiudadano(){
        $datos=[
            'dpi'=>$this->request->getVar('txtDpi'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nomnbre'=>$this->request->getvar('txtNombre'),
            'direccion' =>$this->request->getVar('txtDireccion'),
            'tel_casa'=>$this->request->getVar('txtTelCasa'),
            'tel_movil'=>$this->request->getVar('txt TelMovil'),
            'email'=>$this->request->getVar('txtEmail'),
            'fechanac'=>$this ->request ->getVar('txtFecha'),
            'cod_nivel-acad'=>$this->request->getVar('txtCodNivel'),
            'cod_muni' =>$this->request->getVar('txtCodMuni'),
            'contra' =>$this->request->getVar('txtContra')
        ];
        $ciudadano = new CiudadanosModel();
        $ciudadano->update($datos['dpi'],$datos);
        return redirect()->route('ver_ciudadanos');

    }





}
?>
