<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nueva Papeleta de Salida 
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
            <th>hora_retorno</th>
            <th>hora_salida</th>
            <th>sinRetorno</th>
            <th>fecha_ini</th>
            <th>fecha_fin</th>
            <th>idTrabajador</th>
            <th>idJefe</th>
            <th>idMotivo</th>
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
        <?=$d['hora_retorno']?>
    </td>
    <td>
        <?=$d['hora_salida']?>
    </td>
    <td>
        <?=$d['sinRetorno']?>
    </td>
    <td>
        <?=$d['fecha_ini']?>
    </td>
    <td>
        <?=$d['fecha_fin']?>
    </td>
    <td>
        <?=$d['idTrabajador']?>
    </td>
    <td>
        <?=$d['idJefe']?>
    </td>
    <td>
        <?=$d['idMotivo']?>
    </td>
    <td>
    <a data-id="<?=$d["id"]?>" href="?ctrl=CtrlPapeletasSalida&accion=editar&id=<?=$d['id']?>" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["id"]?>" data-nombre="<?=$d["nombre"]?>" href="?ctrl=CtrlPapeletasSalida&accion=editar&id=<?=$d['id']?>" class="btn btn-danger eliminar">
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
</body>
</html>