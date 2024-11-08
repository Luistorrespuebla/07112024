<?php
require_once("./app/config/dependencias.php");

//session_start();
//if (!isset($_SESSION['usuario'])) {
//    header("location: ./login.php");
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS,SERVIDOR."inicio.css";?>">
    <link rel="stylesheet" href="./public/css/dt.css">

    <title>Formulario de datos</title>
    <style>
        .form-container {
            margin-top: 80px; 
        }

        .custom-form, .custom-table {
            max-width: 600px;
            margin: 0 auto;
        }

        .custom-table {
            margin-top: 30px; 
        }
    </style>
</head>
<body class="vh-100">
    
    <?php
    if(isset($_REQUEST['view'])){
        $vista=$_REQUEST['view'];

    }else{
        $vista="inicio";
    }

        switch($vista){
            case "inicio":{

                require_once './view/home.php';
                break;
            }
            case "login":{

                require_once './view/login.php';
                break;
            }
            case "registro":{

                require_once './view/registro.php';
                break;
            }
            default:{
                require_once './error.php';
                break;
            }
        }
    
    ?>

    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/dt.js"></script>
    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/registro_productos.js"></script>
    <script src="./public/js/cerrar_session.js"></script>
</body>
</html>
