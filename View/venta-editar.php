<h1 class="page-header">
    <?php echo $alm->idcomic != null ? $alm->nomcomic : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Venta">Tabla venta-Tienda de comics</a></li>
  <li class="active"><?php echo $alm->idcomic != null ? $alm->nomcomic : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Venta&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcomic" value="<?php echo $alm->idcomic; ?>" />
    
    <div class="form-group">
        <label>Nomcomic</label>
        <input type="text" name="nomcomic" value="<?php echo $alm->nomcomic; ?>" class="form-control" placeholder="Ingresa el nombre del comic" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Proveedor</label>
        <input type="text" name="proveedor" value="<?php echo $alm->proveedor; ?>" class="form-control" placeholder="Ingrese el proveedor del comic" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Editorial</label>
        <input type="text" name="editorial" value="<?php echo $alm->editorial; ?>" class="form-control" placeholder="Ingrese la editorial del comic" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Tipo</label>
        <input type="text" name="tipo" value="<?php echo $alm->tipo; ?>" class="form-control" placeholder="Ingrese el tipo de comic" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Costo</label>
        <input type="text" name="costo" value="<?php echo $alm->costo; ?>" class="form-control" placeholder="Ingrese el costo del comic" data-validacion-tipo="requerido|decimal" />
    </div>

    <div class="form-group">
        <label>inclusiones</label>
        <input type="text" name="inclusiones" value="<?php echo $alm->inclusiones; ?>" class="form-control" placeholder="Ingrese inclusiones o detalles del comic" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>Img</label>
        <input type=text name="img" value="<?php echo $alm->img; ?>" class="form-control" placeholder="Ingrese el nombre de la imagen con su extension" data-validacion-tipo="requerido|text" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
