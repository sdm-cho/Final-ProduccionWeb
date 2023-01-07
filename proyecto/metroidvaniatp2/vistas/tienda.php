<!doctype html>
<html lang="es">
  <head>
  <?php   require_once ('_boostrap.php') ?>      
    <title>Metroidvania Store</title>
  </head>
  <body>
   
  <?php   require_once ('_header.php') ?>  
     
     <div class="container ">
     <div class="row margenn">
          <div class="col-lg-12 col-md-4 col-sm-4 col-4">
          <div class="tpop"><span>Catalogo</span></div>
             
          </div>
     </div>
</div>

     <div class="container ">
     <div class="row ">
     <?php   require_once ('_arrayjuegospopulares.php') ?>      

    <?php 
    foreach ($juegosPopulares as $JP1) { 
      echo '<div class="col-lg-3 col-md-4 col-sm-6 col-6">'       
      . '<img src=' . $JP1["img"] . ' alt=' . $JP1["alt"] . ' class="img-fluid bordestienda mx-auto">' 
      . '<div><h2 class="juego">'. $JP1["h2"] . '</h2>' 
      . '<h3 class="devs">'. $JP1["h3"] 
      . '<a href="carrito.php">
      <button type="button" class="loginn justify-content-md-center justify-content-sm-center justify-content-center" >AGREGAR AL CARRITO</button>
      </a> </h3></div></div>' ;
    }
    ?>
    </div>
    </div>

     <div class="container">
     <div class="row ">
     <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-4 mt-sm-0 mt-0">
     
     </div>        
     </div>
     </div>

     <?php   require_once ('_arrayjuegosprox.php') ?>
     
     <div class="container">
     <div class="row">

     
     <?php 
    foreach ($juegosProxi as $JP2) { 
      echo '<div class="col-lg-3 col-md-4 col-sm-6 col-6">' .'<article>' 
      . '<img src='. $JP2["img"] . ' alt=' . $JP2["alt"] . ' class="img-fluid bordestienda  mx-auto">' 
      . '<div><h2 class="juego">'. $JP2["h2"] . '</h2>'
      . '<h3 class="devs">'. $JP2["h3"] 
      . '<a href="carrito.php" >
      <button type="button" class="loginn justify-content-md-center justify-content-sm-center justify-content-center" >AGREGAR AL CARRITO</button>
      </a> </h3></div></div>' ; }
      ?>

     </div>
     </div>       
      
        
     <?php   require_once ('_footer.php') ?> 
     <?php   require_once ('_js.php') ?> 

  </body>
</html>