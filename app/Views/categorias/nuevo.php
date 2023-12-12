<main>
    <div class="container-fluid px-4">
        <div class="card mb-4" style="margin: 10px;">
            <div class="card-header">
                Nueva categoría
            </div>
            <div class="card-body">
                   
            <form method="post" action="<?php echo base_url();?>categorias/insertar" autocomplete="off">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" 
                            name="nombre" type="text" aotofocus required/>
                        </div>
                    </div>
                        <button type="submit" style="margin-top:10px;" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk"></i>
                        </button>
                        <a style="margin-top:10px;" class="btn btn-primary" 
                        href="<?php echo base_url() ?>categorias">
                        Volver
                        </a>
                </div>
            </form>
                          
            </div>
        </div>
    </div>
</main>