<nav class="navbar navbar-expand-lg navbar-dark bg-dark headdd">
        <div class="container ">           
      <a class="navbar-brand fuentehead"  href="<?php echo BASE_URL ?>index.php">Metroidvania</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
          <li class="nav-item">          
          </li> 
          <?php if(Auth::validate()): ?>                  
      <?php if(Auth::isAdministrador()): ?>      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>productos.php"> Ver productos </a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>agregar_productos.php"> Agregar producto </a> </a></li>
          </ul>
        </li>
        <?php endif ?>
        
        
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>logout.php"> Logout </a>
          </li>   
          <?php endif ?>  


      </ul>

      <div class="collapse navbar-collapse " id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class=" nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME <span class=" sr-only">(current)</span></a>            
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="tienda.php"><i class="fa fa-gamepad" aria-hidden="true"></i> STORE</a>  
            <li class="nav-item">
            <li class="nav-item">
            <a class=" nav-link" href="noticias.php"><i class="fa fa-newspaper-o" aria-hidden="true"> </i> NEWS</a>  
            <li class="nav-item">
            <a class=" nav-link" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> CART</a>            
          </li>  
           
          
        </ul>
      </div>
      </div>
    </nav>
        
