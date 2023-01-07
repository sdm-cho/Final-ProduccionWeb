<?php

    require_once('conf/conf.php');
    require_once('modelos/Cnx.php');
    require_once('modelos/Usuario.php');

    try{
        $cnx = new Cnx();
    }catch(PDOException $e){
        echo 'Error';
        exit;
    }

    $usuario = new Usuario();
    $usuario->nombre = 'admin';
    $usuario->email = 'admin@davinci.edu.ar';
    $usuario->hashContrasena('1234');

    $errores = $usuario->validate($cnx);

    $usuario->save($cnx);

    $usuario2 = new Usuario();
    $usuario2->nombre = 'usuario';
    $usuario2->email = 'usuario@davinci.edu.ar';
    $usuario2->hashContrasena('4321');

    $errores = $usuario2->validate($cnx);

    $usuario2->save($cnx);

    unset($cnx);

?>