<?php
$id = isset($datos['id'])?$datos['id']:'';
$fecha = isset($datos['fecha'])?$datos['fecha']:'';
$hora_ingreso = isset($datos['hora_ingreso'])?$datos['hora_ingreso']:'';
$hora_salida = isset($datos['hora_salida'])?$datos['hora_salida']:'';
$idTrabajador = isset($datos['idTrabajador'])?$datos['idTrabajador']:'';
$idTurno = isset($datos['idTurno'])?$datos['idTurno']:'';
$idJustificacion = isset($datos['idJustificacion'])?$datos['idJustificacion']:'';
$idPapeleta = isset($datos['idPapeleta'])?$datos['idPapeleta']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo registro asistencia':'Editando registro asistencia';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlRegistroAsistencia&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        fecha:
        <input class="form-control" type="date" name="fecha" value="<?=$fecha?>">
        <br>
        hora_ingreso:
        <input class="form-control" type="time" name="hora_ingreso" value="<?=$hora_ingreso?>">
        <br>
        hora_salida:
        <input null  class="form-control" type="time" name="hora_salida" value="<?=$hora_salida?>">
        <br>
        idTrabajador:
        <input class="form-control" type="text" name="idTrabajador" value="<?=$idTrabajador?>">
        <br>
        idTurno:
        <input class="form-control" type="text" name="idTurno" value="<?=$idTurno?>">
        <br>
        idJustificacion:
        <input class="form-control" type="text" name="idJustificacion" value="<?=$idJustificacion?>">
        <br>
        idPapeleta:
        <input class="form-control" type="text" name="idPapeleta" value="<?=$idPapeleta?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a class="btn btn-primary mb-3" href="?ctrl=CtrlRegistroAsistencia">Retornar</a>
</body>
</html>