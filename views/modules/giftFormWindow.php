<?php include 'cabecera.php'; ?>

<style>.hid{
  display: none;
}</style>
<input type="hidden" value="<?php echo $_GET['validator'] ?>" id="cardValidatorWindow">

<div class="modal fade" id="giftModalForm" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Gift Card</h5>
          <button type="button" id="closeGiftWin" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div  class="col-6 py-5">
              <div class="text-center py-5 01 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Manicure tradicional <br> + <br>  Pedicure tradicional</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4></div>

              <div class="text-center py-5 02 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Manicure permanente</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 12.000,00</h4></div>

              <div class="text-center py-5 03 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Manicure permanente <br> + <br>  pedicure permanente</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 27.000,00</h4></div>

              <div class="text-center py-5 04 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Manicure permanente <br> + <br>  ondulación de pestañas</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 26.500,00</h4></div>

              <div class="text-center py-5 05 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Ondulación con tinte</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4></div>

              <div class="text-center py-5 06 hid" style="background-color: #fbf2f6;border-radius:5px"><h2 >Ondulación sin tinte</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 13.000,00</h4></div>
              
            </div>
            <div style="background-color: white;" class="col-6"> 
             
              
              <?php 
              if (isset($_SESSION['id'])) {
                include 'giftForm.php';
              
              }
              else {
                echo '<h3 style="display: none;" class="hH2">Ingresa para continuar</h3>';
                include 'loginAndRegisterG.php';
              }  
              ?>
           
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
        $("#giftModalForm").modal("show")
    });
    
</script>


