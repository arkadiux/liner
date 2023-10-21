<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nuevo Estudiante 
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
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>correo</th>
            <th>direccion</th>
            <th>Teléfono</th>
            <th>Fecha Nac.</th>
            <th>Programa Estud.</th>
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
    <td><?=$d['nombres']?></td>
    <td><?=$d['apellidos']?></td>
    <td><?=$d['dni']?></td>
    <td><?=$d['correo']?></td>
    <td><?=$d['direccion']?></td>
    <td><?=$d['Telefono']?></td>
    <td><?=$d['fechaNacimiento']?></td>
    <td><?=$d['programa']?></td>
    <td>
    <a data-id="<?=$d["id"]?>" href="?ctrl=CtrlEstudiante&accion=editar&id=<?=$d['id']?>" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["id"]?>" data-nombre="<?=$d["nombre"]?>" href="?ctrl=CtrlEstudiante&accion=editar&id=<?=$d['id']?>" class="btn btn-danger eliminar">
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
