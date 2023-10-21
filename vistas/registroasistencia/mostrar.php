<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nuevo Registro de Asistencia 
</a>
<a>
<button id="boton-imprimir">Imprimir</button>

<script>
    document.getElementById("boton-imprimir").addEventListener("click", function () {
        window.print();
    });
</script>
</a>

    <table class="table">
      <thead>
        <tr>
            <th>Id</th>
            <th>fecha</th>
            <th>hora_ingreso</th>
            <th>hora_salida</th>
            <th>idTrabajador</th>
            <th>idTurno</th>
            <th>idJustificacion</th>
            <th>idPapeleta</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td>
        <?=$d['fecha']?>
    </td>
    <td>
        <?=$d['hora_ingreso']?>
    </td>
    <td>
        <?=$d['hora_salida']?>
    </td>
    <td>
        <?=$d['idTrabajador']?>
    </td>
    <td>
        <?=$d['idTurno']?>
    </td>
    <td>
        <?=$d['idJustificacion']?>
    </td>
    <td>
        <?=$d['idPapeleta']?>
    </td>
    <td>
    <a data-id="<?=$d["id"]?>" href="?ctrl=CtrlRegistroAsistencia&accion=editar&id=<?=$d['id']?>" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["id"]?>" data-nombre="<?=$d["nombre"]?>" href="?ctrl=CtrlRegistroAsistencia&accion=editar&id=<?=$d['id']?>" class="btn btn-danger eliminar">
          <i class="fa fa-trash"></i>  
          Eliminar
        </a>
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
