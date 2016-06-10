<h1>Listado de elementos de la lista <?php echo $lista->getNombre()?></h1>

<table class="table table-striped">
    
    <thead>
        <tr>
            <th>Nombre</th>
            <th></th>
        </tr>
    </thead>
    
    <tfoot>
        <tr>
            <td>
                <form method="POST" action="anyadirElemento.php?idlista=<?php echo $lista->getId()?>">
                    <input type="text" name="nombre" />
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </form>
            </td>
        </tr>
    </tfoot>
    
    <tbody>
        <?php foreach($datostabla as $fila): ?>
        <tr>
            <td <?php if($fila['realizado']) {echo 'class="realizado"';}?>><?php echo $fila['nombre']?></td>
            <td>
                <?php if(!$fila['realizado']): ?>
                <a href="tacharElemento.php?id=<?php echo $fila['id']?>" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </a>
                <?php else: ?>
                <a href="destacharElemento.php?id=<?php echo $fila['id']?>" class="btn btn-warning">
                    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                </a>    
                <?php endif; ?>
                <a href="borrarElemento.php?id=<?php echo $fila['id']?>" type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    
</table>

<a href="index.php" class="btn btn-primary">Volver</a>