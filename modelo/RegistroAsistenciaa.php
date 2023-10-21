<?php
require_once './core/Modelo.php';

class RegistroAsistenciaa extends Modelo {
    private $id;
    private $fecha;
    private $hora_ingreso;
    private $hora_salida;
    private $idTrabajador;
    private $idTurno;
    private $idJustificacion;
    private $idPapeleta;
    private $_tabla='registros_asistencia';

    public function __construct($id=null,$fecha=null, $hora_ingreso=null,$hora_salida=null,$idTrabajador=null, $idTurno=null,$idJustificacion=null,$idPapeleta=null){
        $this->id = $id;
        $this->fecha=$fecha;
        $this->hora_ingreso=$hora_ingreso;
        $this->hora_salida=$hora_salida;
        $this->idTrabajador=$idTrabajador;
        $this->idTurno=$idTurno;
        $this->idJustificacion=$idJustificacion;
        $this->idPapeleta=$idPapeleta;
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
            'fecha'=>"'$this->fecha'",
            'hora_ingreso'=>"'$this->hora_ingreso'",
            'hora_salida'=>"'$this->hora_salida'",
            'idTrabajador'=>"'$this->idTrabajador'",
            'idTurno'=>"'$this->idTurno'",
            'idJustificacion'=>"'$this->idJustificacion'",
            'idPapeleta'=>"'$this->idPapeleta'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'fecha'=>"'$this->fecha'",
            'hora_ingreso'=>"'$this->hora_ingreso'",
            'hora_salida'=>"'$this->hora_salida'",
            'idTrabajador'=>"'$this->idTrabajador'",
            'idTurno'=>"'$this->idTurno'",
            'idJustificacion'=>"'$this->idJustificacion'",
            'idPapeleta'=>"'$this->idPapeleta'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}