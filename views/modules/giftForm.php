<?php 

				if (isset($_POST["typePay"])) {
					
					$gift = new mails();
					$respuesta = $gift -> giftMail();
					
				}  
			
			 ?>


<h5 style="font-weight: bold;">Resumen de tu compra</h5>
<span class="mos">Confirma tu orden y completa el pago</span>
<p style="margin-top: -8px;"> <?php echo $_SESSION['nombre'] ?>, este es el resumen de tu compra:</p>
<div> 
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-3" style="font-weight: bold;font-size:20px">Total: &nbsp;</div> <div style="font-weight:bold;font-size:20px" class="giftPrice col-sm-8 ml-2" > </div>
      </div>
    
    </div> 
    <div class="col-sm-5">
      <form style="margin-left: -17px;" id="formGiftWindow" method="post">
  <select style="font-size: 10px;" id="typePay" class="btn btn-primary mr-5 py-2 px-2" name="typePay">
    <option value="" selected>Tipo de pago</option>
    <option value="Efectivo">Efectivo presencial</option>
    <option value="Crédito presencial">Crédito presencial</option>
    <option value="Débito presencial">Débito presencial</option>
    <option value="Transferencia">Transferencia</option>
    <!-- <option value="fiat">Otro</option>
    <option value="audi">Audi</option> -->
  </select>
  <input type="hidden"  class="articuloGift" value="" name="articulogift">
  <input type="hidden"  class="totalGift" value="" name="totalGift">
  <input type="hidden"  class="nPedidoG" value="" name="nPedidoG">
  <input type="hidden" value="<?php echo $_SESSION['correo'] ?>" name="correoGift">
</form>
    </div>
  </div>
  </div>

<input type="hidden"  class="cardValidatorF" value="">

<input type="hidden"  class="nombreGift" value="<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?>">		  
	  <input type="hidden"  class="contactoGift" value="<?php echo $_SESSION['correo'] ?>">

<br>
<div style="background-color: whitesmoke;padding: 10px;border-radius: 5px;margin-top:-30px;width: 360px;">
  <h5 style="font-weight: bold;">Tus datos</h5>
  <p style="line-height: 25px;"> Nombre: <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?> <br> Correo: <?php echo $_SESSION['correo'] ?> <br> Número de teléfono: <?php echo $_SESSION['numero'] ?> </p>
  <button type="button" style="margin-left:220px"  class="btn btn-primary py-2 px-2  proccessGift"> Procesar </button>
</div>
