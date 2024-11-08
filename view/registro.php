<form action="./registro_vista.php" method="post" class="w-25 p-4">
        <div class="text-center mb-4 c-user">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="text" class="form-control" placeholder="Apellidos" id="apellido" name="apellido" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="email" class="form-control" placeholder="Correo electronico" id="email" name="email" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="password" class="form-control" placeholder="Contraseña" id="pass" name="pass" value="">
        </div>
        <div class="mt-3 c-button">
            <button type="button" id="btn-registrar" class="btn btn-danger w-100 text-white fs-4">Registrar</button> 

        </div>
    </form>
    <script src="./public/js/main.js"></script>