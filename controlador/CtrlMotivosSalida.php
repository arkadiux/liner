<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/MotivoSalida.php';


class CtrlMotivosSalida extends Controlador {
    public function index(){
        # echo "Hola Motivo de Salida";
        
        $obj = new MotivoSalida;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('motivosalida/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Motivos de Salida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new MotivoSalida ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Motivo de Salida',
            'contenido'=>$this->mostrar('motivosalida/formulario.php',null,true),
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);*/

    $this->mostrar('motivosalida/formulario.php');
        
    }
    public function editar(){
        
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new MotivoSalida($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('motivosalida/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Motivo de Salida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    $this->mostrar('motivosalida/formulario.php',$datos);
        
    }
    public function guardar(){
        
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $motivo = $_POST['motivo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new MotivoSalida ($id, $motivo);

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
