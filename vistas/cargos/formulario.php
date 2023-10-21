<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Cargo':'Ed itando Cargo';
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
    <form action="?ctrl=CtrlCargo&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Cargo:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        <input class="btn btn-primary mb-3" type="submit" value="Guardar">

    </form>

    <a class="btn btn-primary mb-3" href="?ctrl=CtrlCargo">Retornar</a>
</body>
</html>