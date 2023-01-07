<!DOCTYPE html>
<html lang="es">
  <head>

  <?php   require_once ('_boostrap.php') ?> 

    <title>Metroidvania Store</title>

  </head>

  <body>  
   
    <?php   require_once ('_header.php') ?>    
             
                  
        <div class="container ">
            <h2 class="textC text-center">Editar Producto</h2> 
            <ul>

       <?php foreach($errores as $error): ?>

       <li class="text text-danger"> <?php echo $error ?> </li>

       <?php endforeach ?>

            </ul>
            <form action="<?php echo $action ?>" method="post">
        <div class="form-group mb-3">
            <label class="textC" for="nombre"> Nombre </label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de producto" value="<?php echo $producto->nombre ?>">
        </div>
        <div class="form-group mb-3">
            <label class="textC" for="descripcion"> Descripción </label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción del producto"><?php echo $producto->descripcion ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label class="textC" for="precio"> Precio </label>
            <input type="number" min="0" max="1000000" class="form-control" name="precio" id="precio" placeholder="Precio del producto" style="width: 20em;" value="<?php echo $producto->precio ?>">
        </div>
        <div class="form-group mb-3">
            <label class="textC" for="categoria"> Categoría </label>
            <select class="form-control" name="id_categoria" id="id_categoria">
                <option value="">Categoría del producto </option>
                <?php foreach($categorias as $c): ?>
                    <option <?php if($producto->id_categoria == $c->id){ echo 'selected'; } ?> value="<?php echo $c->id ?>"> <?php echo $c->nombre ?> </option>
                <?php endforeach ?>
            </select>
        </div>
        <input type="hidden" name="ide" value="<?php echo $producto->id ?>">
        <button type="submit" class="btn btn-success" name="submit"> Guardar </button>
        <a class="btn btn-danger" href="productos.php"> Cancelar </a>
      </form>     
        </div>
        
            

      <?php require_once ('_footer.php') ?>
      <?php require_once ('_js.php') ?> 
        
    
  </body>
</html>