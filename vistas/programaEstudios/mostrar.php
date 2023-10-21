<a href="#" class="btn btn-primary nuevo">
    <i class="fa fa-plus"></i> 
    Nuevo Programa de Estudios 
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
            <th>Nombre</th>
            <th>logo</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($data))
foreach ($data as $d) {
    ?>
    <tr>
        <td>
            <?=$d['id']?>
        </td>
        <td>
            <?=$d['nombre']?>
        </td>
        <td>
            <?=$d['logo']?>
        </td>
        <td>
            
        <a data-id="<?=$d["id"]?>" href="?ctrl=CtrlProgramaEstudio&accion=editar&id=<?=$d['id']?>" class="btn btn-success editar">
            <i class="fa fa-edit"></i> 
            Editar
        </a>
        <a data-id="<?=$d["id"]?>" data-nombre="<?=$d["nombre"]?>" href="?ctrl=CtrlProgramaEstudio&accion=editar&id=<?=$d['id']?>" class="btn btn-danger eliminar">
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