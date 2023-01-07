<?php 

require_once('_autoload.php');
require_once('modelos/Cnx.php');
require_once('modelos/Categoria.php');
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


$id = $_REQUEST['ide'] ?? null;  

$producto = Producto::find($cnx, $id);
$errores = array();


if ( isset($_POST['submit']) ){

    $producto->nombre = test_input( $_POST['nombre'] ?? null );
    $producto->descripcion =  test_input( $_POST['descripcion'] ?? null ) ;
    $producto->precio = test_input( $_POST['precio'] ?? null );
    $producto->id_categoria = test_input( $_POST['id_categoria'] ?? null );

    $errores = $producto->validate();

    if ( count($errores) == 0) {
        $producto->save($cnx);

        header('Location: productos.php');
    }

}

$categorias = Categoria::all($cnx);
$action = 'modificar_producto.php';

// Vista
require_once('vistas/modificar_producto.php');

unset($cnx);

?>