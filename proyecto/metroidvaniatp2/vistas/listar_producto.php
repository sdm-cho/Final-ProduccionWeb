<!DOCTYPE html>
<html lang="es">
  <head>

  <?php   require_once ('_boostrap.php') ?> 

    <title>Metroidvania Store</title>

  </head>

  <body>  
   
    <?php   require_once ('_header.php') ?> 
    
                                
             
        <div class="container ">
            <h2 class="textC text-center">Lista de productos</h2>  
            
            <table class="table table-dark bcolor">
  <thead>
    <tr>
      
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Precio</th>      
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if ( count ($productos) > 0 ): ?>
      <?php foreach($productos as $pro): ?>
    <tr>
    
      <td><?php echo $pro->nombre ?> </td>
      <td><?php echo $pro->nombre_categoria ?></td>
      <td><?php echo $pro->descripcion ?></td>
      <td>$<?php echo number_format($pro->precio, 2, ',', '.') ?></td>
      
      <td>
        <a class="text text-primary" href="modificar_producto.php?ide=<?php echo $pro->id ?>">Editar</a>
        |
        <a class="text text-danger" href="#" onclick="eliminarProducto('eliminar_producto.php?ide=<?php echo $pro->id ?>')">Borrar</a>
      </td>
      
    </tr>    
    <?php endforeach ?>
    <?php else: ?>

      <tr>
        <td class="text-center" colspan="5">No hay productos en la lista.</td>
      </tr>

    <?php endif ?>
  </tbody>
</table>

<nav aria-label="...">
      <ul class="pagination">
        <?php if($paginas['anterior']): ?>
          <li class="page-item ">
            <a class="page-link" href="?pag=<?php echo $paginas['primera'] ?>" tabindex="-1"> Primera </a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="?pag=<?php echo $paginas['anterior'] ?>"> <?php echo $paginas['anterior'] ?> </a>
          </li>
        <?php endif ?>
        <li class="page-item ">
          <a class="page-link active" href="#"><?php echo $paginas['actual'] ?></a>
        </li>
        <?php if($paginas['siguiente']): ?>
          <li class="page-item ">
            <a class="page-link" href="?pag=<?php echo $paginas['siguiente'] ?>"> <?php echo $paginas['siguiente'] ?> </a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="?pag=<?php echo $paginas['ultima'] ?>"> Última </a>
          </li>
        <?php endif ?>
      </ul>
    </nav>

        </div>      
            

      <?php require_once ('_footer.php') ?>
      <?php require_once ('_js.php') ?> 

      <script>
        function eliminarProducto(p_url)
        {
         

      Swal.fire({
      title: 'Esta seguro de que quiere eliminar esto?',
      text: "Este registro no se podra recuperar",      
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {        
          location.href = p_url;
  }
});
        }
      </script>
        
    
  </body>
</html>