<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">  
    <title>Metroidvania Store</title>
</head>
<body>
 <?php require "header.php" ?> 

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
<div class="d-flex justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center"> 

<?php 

if ($_POST["pass"] == "1234"){
  header("location: index.php");
} else {
  echo '<img src="img/error404.jpg">';
} 

?>
<?php

$archivoLogin = file_get_contents("login.json");
$arraydatos = json_decode($archivoLogin,true);
//armo el arreglo con los datos del formulario
$arrayLogin = array("Usuario"=>$_POST["user"], "Password"=>$_POST["pass"]);
array_push($arraydatos, $arrayLogin);
//agregar este arreglo al arreglo en memoria

//convierto el arreglo a formato JSON  y lo guardo
$salidaJson = json_encode($arraydatos) ;
file_put_contents("login.json", $salidaJson );

?>  

</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
<div class="d-flex justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center tpop"> 
<a href="registro.php">Volver a intentar.</a>
</div>
</div>


<?php require "footer.php" ?>

    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>