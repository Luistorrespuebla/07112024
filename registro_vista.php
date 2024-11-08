<?php
require_once("./app/config/dependencias.php");
session_start();

//if (isset($_SESSION['usuario'])) {
//    header("location: ./index.php");
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS, SERVIDOR."registro_vista.css";?>">
    <title>Formulario de datos</title>
</head>
<body class="d-flex justify-content-center align-items-center mt-4 p-3">
    
    

    <script src="./public/js/alerts.js"></script>
    
</body>
</html>