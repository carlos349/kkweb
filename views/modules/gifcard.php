<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="views/js/jquery.min.js"></script>
    <style>
       .flip {
  position: relative;
  -webkit-box-shadow: 10px 10px 27px -5px rgba(0,0,0,0.54);
-moz-box-shadow: 10px 10px 27px -5px rgba(0,0,0,0.54);
box-shadow: 10px 10px 27px -5px rgba(0,0,0,0.54);
border-radius: 10px;

}
.flip > .front,
.flip > .back {
  display: block;
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition-duration: .5s;
  transition-property: transform, opacity;
}
.flip > .front {
  transform: rotateY(0deg);
}
.flip > .back {
  position: absolute;
  opacity: 0;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  transform: rotateY(-180deg);
}
.flip:hover > .front {
  transform: rotateY(180deg);
}
.flip:hover > .back {
  opacity: 1;
  transform: rotateY(0deg);
}
.flip.flip-vertical > .back {
  transform: rotateX(-180deg);
}
.flip.flip-vertical:hover > .front {
  transform: rotateX(180deg);
}
.flip.flip-vertical:hover > .back {
  transform: rotateX(0deg);
}

.flip {
  position: relative;
  display: inline-block;
  margin-right: 20px;
  margin-left: 20px;
  margin-bottom: 2em;
  width: 400px;
}
.flip > .front,
.flip > .back {
  display: block;
  color: white;
  width: inherit;
  background-size: cover !important;
  background-position: center !important;
  height: 220px;
  padding: 1em 2em;
  background: #fbf2f6;
  border-radius: 10px;
}
.flip > .front p,
.flip > .back p {
  font-size: 0.9125rem;
  line-height: 160%;
  color: #999;
}

.text-shadow {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
}
.register , .logging{
  transition-duration: .5s;
  transition-property: transform, opacity;
}
.flip h3 {
    font-size: 1.1em;
  }

@media (max-width: 1400px) {
  .flip {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      margin-left: 20px;
      margin-bottom: 2em;
      width: 347px;
  }

  .flip h3 {
    font-size: 1.1em;
  }
}
@media (max-width: 1200px) {
  .flip {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      margin-left: 20px;
      margin-bottom: 2em;
      width: 270px;
  }

  .flip h3 {
    font-size: 1.1em;
  }
}
.hid{
  display: none;
}

    </style>
</head>
<body>
  <div class="modal fade" id="giftModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Gift Card</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

    <center>
        
    <div class="flip">
        <div class="front" style="background-image: url(views/images/gift.jpg)">
          
        </div>
        <div class="back">
          <h3 style="font-weight:300" >Manicure tradicional <br> + <br> Pedicure tradicional</h3>
          
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4>
          <p><button data-toggle="modal" id="1" value="1" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(views/images/gift.jpg)">
          
        </div>
        <div class="back">
          <br>
          <h3 style="font-weight:300" >Manicure permanente</h3> 
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 12.000,00</h4>
          <p><button data-toggle="modal" value="2" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(views/images/gift.jpg)">
          
        </div>
        <div class="back">
          <h3 style="font-weight:300" >Manicure permanente <br>+ <br> Pedicure permanente</h3>
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 27.000,00</h4>
          <p><button data-toggle="modal" value="3" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
        </div>
    </div>
    <br>
    <div class="flip">
      <div class="front" style="background-image: url(views/images/gift.jpg)">
        
      </div>
      <div class="back">
        <h3 style="font-weight:300" >Manicure permanente <br>+ <br> Ondulación de pestañas</h3>
        
        <h4 style="font-weight: 600 !important;" > <i style="color: #77a464;" class="fa fa-money"></i> 26.500,00</h4>
        <p><button data-toggle="modal" value="4" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
      </div>
  </div>
  <div class="flip">
    <div class="front" style="background-image: url(views/images/gift.jpg)">
      
    </div>
    <div class="back">
      <br>
      <h3 style="font-weight:300" >Ondulación con tinte</h3>
      <h4  style="font-weight: 600 !important;"><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4>
      <p><button data-toggle="modal" value="5" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
    </div>
</div>
<div class="flip">
  <div class="front" style="background-image: url(views/images/gift.jpg)">
    
  </div>
  <div class="back">
    <br>
    <h3 style="font-weight:300" >Ondulación sin tinte</h3>
    <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 13.000,00</h4>
    <p><button data-toggle="modal" value="6" data-target="#giftModal" class="btn modG btn-white px-4 py-3"> Regalar </button></p>
  </div>
</div>

    <br>
    <br>

    
  </center>

  
    
</body>

</html>