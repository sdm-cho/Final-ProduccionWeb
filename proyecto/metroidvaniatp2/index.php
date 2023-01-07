<?php 

require_once('_autoload.php');

if(!Auth::validate())
{
    header('Location: registro.php');
}

$nombre = Auth::getNombre();

require_once('vistas/index.php');

?>