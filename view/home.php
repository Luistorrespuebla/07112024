<div class="row m-4 c-datos bg-primary">
        <div class="d-flex justify-content-around align-items-center w-100">
            <h1 class="text-center text-white m-0">Telcel</h1>
            
            <p class="text-center text-white fs-2 m-0">
                <?= $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido']; ?>
            </p>

            <p class="text-center text-white fs-2 m-0">
                <?= $_SESSION['usuario']['email'] ?>
            </p>

            <div>
                <button class="btn btn-danger" id="btn-cerrrar">
                    Finalizar sesión
                </button>
            </div>
        </div>
    </div>
    
    <div class="form-container" style="justify-content: center;">
        <div class="custom-form p-5 bg-light rounded shadow-sm">
            <form action="./index.php" method="post">
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="precio" placeholder="Precio" name="precio_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad_p" value="">
                </div>
                <div class="mt-3 c-button d-flex justify-content-center">
                    <button type="button" id="btn-registrar-producto" class="btn btn-danger text-white fs-4">Registrar</button> 
                </div>
            </form>
        </div>

        <div class="custom-table p-5">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_productos">
                </tbody>
            </table>
        </div>
    </div>