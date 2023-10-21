<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Estado':'Editando Estado';
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
    <form action="?ctrl=CtrlEstado&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Estado:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        <input class="btn btn-primary mb-3"  type="submit" value="Guardar">

    </form>

    <a input class="btn btn-primary mb-3" href="?ctrl=CtrlEstado">Retornar</a>
</body>
</html>