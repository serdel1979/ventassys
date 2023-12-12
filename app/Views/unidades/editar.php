<main>
    <div class="container-fluid px-4">
        <div class="card mb-4" style="margin: 10px;">
            <div class="card-header">
                Edita unidad
              <!--  <?= print_r($dato) ?> -->
            </div>
            <div class="card-body">
                   
            <form method="post" action="<?php echo base_url();?>unidades/modificar" autocomplete="off">
                <input type="hidden" name="id" value="<?php echo $dato['id'] ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" value="<?= $dato['nombre']; ?>"
                            name="nombre" type="text" aotofocus required/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre Corto</label>
                            <input class="form-control" id="nombre_corto" value="<?= $dato['nombre_corto']; ?>"
                            name="nombre_corto" type="text" required/>
                        </div>
                    </div>
                        <button type="submit" style="margin-top:10px;" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk"></i>
                        </button>
                        <a style="margin-top:10px;" class="btn btn-primary" 
                            href="<?php echo base_url() ?>unidades">
                            Volver
                        </a>
                </div>
            </form>
                          
            </div>
        </div>
    </div>
</main>