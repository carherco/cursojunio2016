<h1>Listado de listas</h1>

<table class="table table-striped">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($datostabla as $fila): ?>
        <tr>
            <td><?php echo $fila['id']?></td>
            <td><?php echo $fila['nombre']?></td>
            <td>
                <a href="verLista.php?id=<?php echo $fila['id']?>" class="btn btn-default">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

