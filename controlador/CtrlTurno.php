<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Turno.php';


class CtrlTurno extends Controlador {
    public function index(){
        # echo "Hola Turnos";
        
        $obj = new Turno;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('turno/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Turnos',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Turno ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Turno',
            'contenido'=>$this->mostrar('turno/formulario.php',null,true),
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);*/

    $this->mostrar('turno/formulario.php');
        
    }
    public function editar(){
        
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Turno($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('turno/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Turno',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    $this->mostrar('turno/formulario.php',$datos);
        
    }
    public function guardar(){
        
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Turno ($id, $nombre);

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
