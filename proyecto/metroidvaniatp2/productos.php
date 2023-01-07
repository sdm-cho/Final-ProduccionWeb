<?php 

require_once('_autoload.php');
require_once('modelos/Cnx.php');
require_once('modelos/Producto.php');
require_once('helpers/helper_paginador.php');

if(!Auth::isAdministrador())
{
    header('Location: index.php');
}

$pag = $_GET['pag'] ?? 1;
$registros_por_pagina = 8;

try{
$cnx = new Cnx();
} catch(PDOException $e) {
    echo 'Fallo la conexion';
    exit;
}


$cantidad_registros = Producto::countAll($cnx);


$productos = Producto::paginate($cnx, $pag, $registros_por_pagina);
$paginas = paginador($pag, $cantidad_registros, $registros_por_pagina);



require_once('vistas/listar_producto.php');

?>