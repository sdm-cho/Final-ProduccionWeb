<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php   require_once "_boostrap.php" ?>  

    <title>Metroidvania Store</title>
  </head>

  <body>     
    <?php   require_once "_header.php" ?>     
    
              
    <div class="container">
      <div class="row">
<div class="col-lg-8 col-md-12 col-sm-12 mt-lg-2">
<span class="tpop ">Orden de Compra
</span> 

<div class="cajasC">
<img src="vistas/img/imgcarrito/tty.png" class="img-fluid" >
<span class="textC">Trek To Yomi</span>
<span class="derecha precio d-none d-md-block">$800</span>
</div>

<hr class="hidd3n">

<div class="cajasC">
<img src="vistas/img/imgcarrito/rdr2.png" class="img-fluid" >
<span class="textC">Red Dead Redemption 2</span>
<span class="derecha precio d-none d-md-block">$2500</span>
</div>

<hr class="hidd3n">

<div class="cajasC">
<img src="vistas/img/imgcarrito/rdr2.png " class="img-fluid thumb" >
<span class="derecha precio">Total: $3200</span>
</div>
</div>

 <div class="col-lg-4 mt-lg-2 mt-md-3 mt-sm-3 mt-3">
<span class="tpop "> Forma De Pago</span> 
<div class="cajasC">
<span class="textC ">MercadoPago</span>
<label class="rad-label derecha">
    <input type="radio" class="rad-input" name="rad">
    <div class="rad-design"></div>    
  </label>
</div>
<hr class="hidd3n">
<div class="cajasC">
<span class="textC ">Tarjeta De Credito</span>
<label class="rad-label derecha">
    <input type="radio" class="rad-input" name="rad">
    <div class="rad-design"></div>    
  </label>
</div>
<hr class="hidd3n">
<form action="post" method="post" class="was-validated">              
               <div class="form-group">               
               <label for="Tarjeta"> </label>
               <span class="textC">Numero de Tarjeta</span>
               <input type="text" id="Tarjeta" name="Tarjeta" class="form-control caja3 nombre col-md-12 col-sm-12 " title="Tarjeta" placeholder="1234-5678-1234-5678" required minlength="12" maxlength="12" > 
                <div class="valid-feedback"> Completado! </div>   
               <div class="invalid-feedback"> * Campo obligatorio </div> 
               </div>
               <div class="form-group"> 
               <label for="Vencimiento" ></label>
               <span class="textC">Vencimiento</span>
               <input type="month" id="Vencimiento" name="Vencimiento" class="form-control caja3 nombre  col-md-6 col-sm-6" title="Vencimiento" required min="2022-01"  > 
               <div class="valid-feedback"> Completado! </div>   
               <div class="invalid-feedback"> * Campo obligatorio </div>
</div>
<div class="form-group">                              
               <label for="CVV"> </label>
               <span class="textC">CVV</span>
               <input type="text" id="CVV" name="CVV" class="form-control caja3 nombre  col-md-6 col-sm-6" title="CVV" placeholder="123" required minlength="3" maxlength="3" > 

               <div class="valid-feedback"> Completado! </div>   
               <div class="invalid-feedback"> * Campo obligatorio </div> 
               </div>
                <input type="submit" class="loginn" value="PAGAR">              
               
               </form> 
</div> 

</div>
</div>



      <?php require_once "_footer.php" ?>
      <?php require_once "_js.php" ?>     
    
  </body>
</html>