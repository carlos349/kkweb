<?php 

				if (isset($_POST["typePay"])) {
					
					$gift = new mails();
					$respuesta = $gift -> giftMail();
					
				}  
			
			 ?>


<h4>Resumen de tu compra</h4>
<span class="mos">Confirma tu orden y completa el pago</span>
<p> <?php echo $_SESSION['nombre'] ?> , este es el resumen de tu compra:</p>
<div> <div style="float: left;">Total: &nbsp;</div> <div class="giftPrice" style="margin-right: 20px;"> </div></div>

<input type="hidden"  class="cardValidatorF" value="">

<input type="hidden"  class="nombreGift" value="<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?>">		  
	  <input type="hidden"  class="contactoGift" value="<?php echo $_SESSION['correo'] ?>">
<form id="formGiftWindow" method="post">
  <select id="typePay" class="btn btn-primary py-2 px-2" name="typePay">
    <option value="" selected>Selecciona un tipo de pago</option>
    <option value="Efectivo">Efectivo</option>
    <option value="Transferencia">Transferencia</option>
    <!-- <option value="fiat">Otro</option>
    <option value="audi">Audi</option> -->
  </select>
  <input type="hidden"  class="articuloGift" value="" name="articulogift">
  <input type="hidden"  class="totalGift" value="" name="totalGift">
  <input type="hidden"  class="nPedidoG" value="" name="nPedidoG">
  <input type="hidden" value="<?php echo $_SESSION['correo'] ?>" name="correoGift">
</form>
<br>
<div style="background-color: whitesmoke;padding: 10px;border-radius: 5px;">
  <h4>Tus datos</h4>
  <p> <b>Nombre:</b> <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?> <br> <b>Correo:</b> <?php echo $_SESSION['correo'] ?> <br> <b>Número de teléfono: </b><?php echo $_SESSION['numero'] ?> </p>
  <button type="button"  class="btn btn-primary py-2 px-2 proccessGift"> Procesar </button>
</div>
