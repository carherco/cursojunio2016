<h1>Listado de listas</h1>

<table class="table table-striped">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($datostabla as $fila): ?>
        <tr>
            <td><?php echo $fila['id']?></td>
            <td><?php echo $fila['nombre']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

