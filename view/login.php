<?php
    if(isset($_SESSION['usuario'])){
        header("location:inicio");
        exit();
    }
?>
<form action="./login.php" method="post" class="w-25 p-4">
        <div class="text-center mb-5 c-user">
        </div>
        <div class="input-group mt-3">
            <input type="email" id="email-id" class="form-control" placeholder="Ingrese su email" name="email" value="">
        </div>
        <div class="input-group mt-3">
            <input type="password" id="pass-id" class="form-control" placeholder="Ingrese su contraseña" name="pass" value="">
        </div>
        <div class="mt-5 c-button">
             <button type="button" id="btn-saludar" class="btn btn-danger w-100 text-white fs-4">Ingresar</button>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <p class="">¿No tienes una cuenta?</p> 
            <a href="./registro_vista.php" class="text-white mx-3">Crear ahora</a>
        </div>
    </form>

    <script src="./public/js/main.js"></script>