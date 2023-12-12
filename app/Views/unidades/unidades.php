<main>
    <div class="container-fluid px-4">
        <div class="card mb-4" style="margin: 10px;">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Datos de <?php echo strtoupper($titulo); ?>
            </div>
                <div>
                     <p style="margin:10px;">
                        <a title="Agregar nueva unidad" class="btn btn-info" href="<?php echo base_url(); ?>unidades/nuevo">
                                    Agregar
                        </a>
                        <a title="Ver eliminados" class="btn btn-warning" href="<?php echo base_url(); ?>unidades/eliminados">
                                    Ver eliminados
                        </a>
                        <a title="Ver eliminados" class="btn btn-warning" href="<?php echo base_url(); ?>unidades">
                                    Ver todos
                        </a>
                      </p>
                </div>
                <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Nombre corto</th>

                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Nombre corto</th>

                                            <th>Accion</th>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($datos as $unidad){ ?>
                                        <tr>
                                            <td><?php echo $unidad['id']; ?> </td>
                                            <td><?php echo $unidad['nombre']; ?> </td>
                                            <td><?php echo $unidad['nombre_corto']; ?> </td>

                                            <td> 
                                                <a href="<?php echo base_url(); ?>unidades/eliminar/<?php echo $unidad['id']; ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                                </a>
                                                <a style="margin-left:5px;" href="<?php echo base_url(); ?>unidades/edita/<?php echo $unidad['id']; ?>" class="btn btn-primary">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <a style="margin-top:10px;" class="btn btn-primary" 
                                href="<?php echo base_url() ?>">
                            Volver
                        </a>
                </div>
        </div>
       
    </div>
</main>