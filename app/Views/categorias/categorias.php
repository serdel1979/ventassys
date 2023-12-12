<main>
    <div class="container-fluid px-4">
        <div class="card mb-4" style="margin: 10px;">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Datos de <?php echo strtoupper($titulo); ?>
            </div>
                <div>
                     <p style="margin:10px;">
                        <a title="Agregar nueva unidad" class="btn btn-info" href="<?php echo base_url(); ?>categorias/nuevo">
                                    Agregar
                        </a>
                        <a title="Ver eliminados" class="btn btn-warning" href="<?php echo base_url(); ?>categorias/eliminados">
                                    Ver eliminados
                        </a>
                        <a title="Ver eliminados" class="btn btn-warning" href="<?php echo base_url(); ?>categorias">
                                    Ver no eliminados
                        </a>
                      </p>
                </div>
                <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>

                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>Id</th>
                                            <th>Nombre</th>

                                            <th>Accion</th>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($datos as $categoria){ ?>
                                        <tr>
                                            <td><?php echo $categoria['id']; ?> </td>
                                            <td><?php echo $categoria['nombre']; ?> </td>

                                            <td> 
                                                <?php if($categoria['activo'] == 1) {?>
                                                    <a title="Eliminar" href="<?php echo base_url(); ?>categorias/eliminar/<?php echo $categoria['id']; ?>" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                    <a title="Editar"  style="margin-left:5px;" href="<?php echo base_url(); ?>categorias/edita/<?php echo $categoria['id']; ?>" class="btn btn-primary">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                <?php } ?>
                                                <?php if($categoria['activo'] == 0){ ?>
                                                    <a title="Restaurar" href="<?php echo base_url(); ?>categorias/restaurar/<?php echo $categoria['id']; ?>" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-arrow-up"></i>
                                                    </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <a style="margin-top:10px;" class="btn btn-primary" 
                                href="<?php echo base_url()?>">
                            Volver
                        </a>
                </div>
        </div>
       
    </div>
</main>