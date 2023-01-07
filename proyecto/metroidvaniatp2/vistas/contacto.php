<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once "boostrap.php" ?>
    <title>Metroidvania Store</title>
</head>
<body>

    <?php require "header.php" ?> 
    <main>
    <section>
     
     <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 seccion1">
                <h1 class="tpop marg">Contacto</h1>
            </div>
         </div>
           <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 ">

               <h2 class="m1">Si querés publicar tu juego en Metroidvania, no dudes en dejarnos tu mensaje. Un representante se comunicará a la brevedad.</h2>   

               <?php
// define variables and set to empty values
$nameErr = $emailErr =  $telErr = $mensErr = "";

$name = $email =  $tel = $mens = "";

/*
echo  "<pre>";
var_dump($_SERVER);
echo "</pre>";
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nombre es obligatorio";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Se requiere un email";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["tel"])) {
    $telErr = "Se requiere un telefono";
  } else {
    $tel = test_input($_POST["tel"]);
  }

  if (empty($_POST["mens"])) {
    $mensErr = "Se requiere un mensaje";
  } else {
    $mens = test_input($_POST["mens"]);
  }

  $archivo = file_get_contents("datos.json");
$arreglodatos = json_decode($archivo,true);
//armo el arreglo con los datos del formulario
$miarreglo = array("nombre"=>$name, "email"=>$email, "telefono"=>$tel, "mensaje"=>$mens);
array_push($arreglodatos, $miarreglo);
//agregar este arreglo al arreglo en memoria

//convierto el arreglo a formato JSON  y lo guardo
$salidaJson = json_encode($arreglodatos) ;
file_put_contents("datos.json", $salidaJson );
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>                         

               <form method="post" class="was-validated">                 
  
               <div class="form-group">               
               <label for="name"> </label>
               <input type="text" id="name" name="name" class="form-control caja nombre col-sm-12 " title="name" placeholder="Nombre..." required >
               <span class="error"> <?php echo $nameErr;?></span> 
               <div class="valid-feedback"> Completado! </div> 
               <div class="invalid-feedback"> * Campo obligatorio </div>               
               </div>
               <div class="form-group"> 
               <label for="email" ></label>
               <input type="Email" id="email" name="email" class="form-control caja nombre col-sm-12  " title="email" placeholder="Email..." required >
               <span class="error"> <?php echo $emailErr;?></span>
               <div class="valid-feedback"> Completado! </div> 
               <div class="invalid-feedback"> * Campo obligatorio </div>              
               </div>
                  
                  <div class="form-group"> 
               <label for="tel" ></label>
               <input type="tel" id="tel" name="tel" class="form-control caja nombre col-sm-12" title="tel" placeholder="Telefono..." required >
               <span class="error"> <?php echo $telErr;?></span>
               <div class="valid-feedback"> Completado! </div> 
               <div class="invalid-feedback"> * Campo obligatorio </div>               
               </div> 
               
               
                 <div class="form-group"> 
               <label for="mens"  ></label><br>
               <textarea name="mens" id="mens" cols="40" rows="5" maxlength="240" class="form-control caja mensaje col-sm-12" title="mens" placeholder="Mensaje..." required ></textarea> 
               <span class="error"> <?php echo $mensErr;?></span>
               <div class="valid-feedback"> Completado! </div>  
               <div class="invalid-feedback"> * Campo obligatorio </div>                         
               </div>
               
               <input type="submit" class="envv" value="Enviar">
               
               </form>
               </div>
                    
               
                <div class="col-lg-2 d-none d-lg-block espacio"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 info">
              
                <p class="titulo">Teléfono: </p>
                <p class="contenido">0800-777-METROID</p>
                <p class="titulo">E-mail: </p>
                <p class="contenido">info@metroidvania.com </p>
                <p class="titulo">Facebook: </p>
                <p class="contenido1">/MetroidvaniaStore </p>
                <p class="titulo">Instagram: </p>
                <p class="contenido1">@MetroidvaniaStore </p>
                
               </div>               
            
            </div>
           
               </div>
        </section>
               </main>
            
             
<?php require_once "footer.php" ?>

<?php require_once "jscript.php" ?>
</body>
</html>