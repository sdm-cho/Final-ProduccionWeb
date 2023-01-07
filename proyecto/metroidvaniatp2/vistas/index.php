<!DOCTYPE html>
<html lang="es">
  <head>

  <?php   require_once "_boostrap.php" ?> 

    <title>Metroidvania Store</title>

  </head>

  <body>  
   
    <?php   require_once "_header.php" ?>     
    
    <main>
    <section> 

    <?php   require_once "_carrusel.php" ?>  
     
    
                                
            <div class="container dist">
            <div class="row ">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12"> 
                <h1 class="tpop text-lg-left text-md-center text-sm-center text-center">Metroidvania Store</h1>                              
                <p class="formtext text-lg-left text-md-center text-sm-center text-center"><strong>Explorá nuestro catálogo y descubrí tu próximo juego favorito!</strong> 
                </p> 
                <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center justify-content-center">                             
                 
                 <a href="tienda.php">
                <button type="button" class="loginn justify-content-md-center justify-content-sm-center justify-content-center" >CATALOGO</button>
                </a>                
                </div>
            </div>
            <div class="col-lg-1 col-md-1">
            </div>
            
            <div class="col-lg-6 ">              
               <a href="tienda.php">
                <img src="vistas/img/cat3.png" alt="catalogo" class="img-fluid d-block mx-auto mt-lg-0 mt-md-4 mt-sm-5 mt-xs-5 mt-5">
                </a>
            </div>
             </div>
              </div>
              </section>  
</main>

      <?php require_once "_footer.php" ?>
      <?php require_once "_js.php" ?> 
        
    
  </body>
</html>