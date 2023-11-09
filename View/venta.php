<h1 class="page-header">Tabla Venta-Tienda de comics</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=venta&a=Crud">Agregar venta</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>idComic</th>
            <th>NomComic</th>
            <th>Proveedor</th>
            <th >Editorial</th>
            <th >Tipo</th>
            <th>Costo</th>
            <th>Inclusiones</th>
            <th>Img</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idcomic ?></td>
            <td><?php echo $r->nomcomic; ?></td>
            <td><?php echo $r->proveedor; ?></td>
            <td><?php echo $r->editorial; ?></td>
            <td><?php echo $r->tipo; ?></td>
            <td><?php echo $r->costo; ?></td>
            <td><?php echo $r->inclusiones; ?></td>
            <td><img height="100" width="72" src="img/<?php echo $r->img; ?>"></td>

            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Venta&a=Crud&idcomic=<?php echo $r->idcomic; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Venta&a=Eliminar&idcomic=<?php echo $r->idcomic; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
