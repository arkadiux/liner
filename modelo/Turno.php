<?php
require_once './core/Modelo.php';

class Turno extends Modelo {
    private $id;
    private $Turno;
    private $_tabla='turnos';

    public function __construct($id=null,$Turno=null){
        $this->id = $id;
        $this->Turno=$Turno;
        parent::__construct($this->_tabla);
    }
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
    public function guardar(){
        $datos = [
            'id'=>$this->id,
            'Turno'=>"'$this->Turno'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'Turno'=>"'$this->Turno'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}