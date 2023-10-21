<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/PapeletaSalida.php';


class CtrlPapeletasSalida extends Controlador {
    public function index(){
        # echo "Hola Peleta de Salida";
        
        $obj = new PapeletaSalida;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('papeletasalida/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Papeleta de Salida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new PapeletaSalida ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Papeleta de Salida',
            'contenido'=>$this->mostrar('papeletasalida/formulario.php',null,true),
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);*/

    $this->mostrar('papeletasalida/formulario.php');
        
    }
    public function editar(){
        
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new PapeletaSalida($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('papeletasalida/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Papeleta de Salida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    $this->mostrar('papeletasalida/formulario.php',$datos);
        
    }
    public function guardar(){
        
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $fecha = $_POST['fecha'];
        $hora_retorno = $_POST['hora_retorno'];
        $hora_salida = $_POST['hora_salida'];
        $sinRetorno = $_POST['sinRetorno'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $idTrabajador = $_POST['idTrabajador'];
        $idJefe = $_POST['idJefe'];
        $idMotivo = $_POST['idMotivo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new PapeletaSalida ($id, $fecha,$hora_retorno,$hora_salida,$sinRetorno,$fecha_ini,$fecha_fin,$idTrabajador,$idJefe,$idMotivo);

        switch ($esNuevo) {
            case 0: # Editar
                $data=$obj->actualizar();
                break;
            
            default: # Nuevo
                $data=$obj->guardar();
                break;
        }
        # var_dump($data);exit;
        $this->index();
    }

    
}
