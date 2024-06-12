<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/lectura.php'); ?>

    <div class="col-md-5">

    <form action="" method="post">
    <div class="card">
        <div class="card-header">Lecturas</div>
        <div class="card-body">
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cedula</label>
            <input
                type="text"
                class="form-control"
                name="cedula"
                id="cedula"
                aria-describedby="helpId"
                placeholder=""/>
        </div>
        <div class="btn-group" role="group" aria-label="Button group name">
            <button
                type="submit"
                name="accion"
                value="buscar"
                class="btn btn-success"
            >
                Buscar
            </button>
        </div>
        
        </div>
        
    </div>
    </form>



    </div>
    
    <div class="col-md-7">

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Consumo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>1</td>
                        <td>Jose</td>
                        <td>200</td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        
    </div>



<?php include('../templates/pie.php'); ?>