<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once "_boostrap.php" ?> 
    <title>Metroidvania Store</title>

    <?php require_once "_header.php" ?>
     
</head>
<body>
<div class="container">

<h1 class="text-left tpop mt-lg-3"> Iniciar Sesion </h1>

<?php if($error): ?>
    <div class="alert alert-danger"> <?php echo $error ?> </div>
<?php endif; ?>
<form action="registro.php" method="post">
    <div class="form-group mb-3 tpop ">
        <label for="email"> Email </label>
        <input type="email" class="form-control envv col-lg-6" name="email" id="email" placeholder="Ingrese su correo electrónico">
    </div>
    <div class="form-group mb-3 tpop ">
        <label for="contrasena"> Contraseña </label>
        <input type="password" class="form-control envv col-lg-6" name="contrasena" id="contrasena">
    </div>
    <button type="submit" class="btn btn-success mt-4 envv2 tpop"> Enviar </button>
</form>

</div>

<?php require_once('_footer.php') ?>
  </body>
</html>