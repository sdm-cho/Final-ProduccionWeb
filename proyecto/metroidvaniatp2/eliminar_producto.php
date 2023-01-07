<?php
require_once('_autoload.php');
require_once('modelos/Cnx.php');
require_once('modelos/Producto.php');
require_once('helpers/helper_input.php');

if(!Auth::isAdministrador())
{
    header('Location: index.php');
}

try{
    $cnx = new Cnx();
    } catch(PDOException $e) {
        echo 'Fallo la conexion';
        exit;
    }

$ide = test_input( $_GET['ide'] ?? null );
$producto = Producto::find($cnx, $ide);

//Si la id existe se elimina

if($producto)
{
    $producto->delete($cnx);
}
header('Location: productos.php?msj=delete');