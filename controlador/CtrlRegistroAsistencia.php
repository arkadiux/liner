<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/RegistroAsistenciaa.php';


class CtrlRegistroAsistencia extends Controlador {
    public function index(){
        # echo "Hola Registro de Asistencia";
        
        $obj = new RegistroAsistenciaa;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('registroasistencia/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Registro de Asistencia',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new RegistroAsistenciaa ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Registro de Asistencia',
            'contenido'=>$this->mostrar('registroasistencia/formulario.php',null,true),
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);*/

    $this->mostrar('registroasistencia/formulario.php');
        
    }
    public function editar(){
        
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new RegistroAsistenciaa($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('registroasistencia/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Registro de Asistencia',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu'],
            'msg'=>$msg
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    $this->mostrar('registroasistencia/formulario.php',$datos);
        
    }
    public function guardar(){
        
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $fecha = $_POST['fecha'];
        $hora_ingreso = $_POST['hora_ingreso'];
        $hora_salida = $_POST['hora_salida'];
        $idTrabajador = $_POST['idTrabajador'];
        $idTurno = $_POST['idTurno'];
        $idJustificacion = $_POST['idJustificacion'];
        $idPapeleta = $_POST['idPapeleta'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new RegistroAsistenciaa ($id, $fecha, $hora_ingreso, $hora_salida, $idTrabajador, $idTurno, $idJustificacion, $idPapeleta);

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
