<h1>Listado de tareas</h1>

<table class="table table-striped">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($listas as $lista): ?>
        <tr>
            <td><?php echo $lista['id']?></td>
            <td><?php echo $lista['nombre']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

