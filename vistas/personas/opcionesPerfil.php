<h1>Opciones para ti</h1>
<table class="table">
<tr>
    
    <th>Perfil</th>
    <th>Opciones</th>
</tr>


<?php 
foreach ($data as $d) : ?>
    
<tr>
    
    <td><?=$d['perfil']?></td>
    <td>
    <a href="?ctrl=CtrlPersona&accion=accederModulo&id=<?=$d['idpersona']?>&idModulo=<?=$d['idmodulo']?>&idPerfil=<?=$d['idperfil']?>">Acceder</a>
    </td>
</tr>


<?php
    endforeach;
?>
</table>