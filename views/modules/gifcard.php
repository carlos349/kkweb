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
              <div class="text-center py-5" style="background-color: #fbf2f6;border-radius:5px"><h2 >Manicure y pedicure tradicional</h2><h4 style="font-weight: 600 !important;text-align: center;" ><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4></div>
              
            </div>
            <div style="background-color: white;" class="col-6"> 
              <h3 class="hH">Registrate para continuar</h3>
              <h3 style="display: none;" class="hH">Ingresa para continuar</h3>
              <form class="py-2 register" method="post">
               
                <div class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control Mail-login" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control Mail-login" name="apellido" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control Mail-login" name="correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control Mail-login" name="pass" placeholder="Contraseña">
                  </div>
                    <div class="form-group align-items-rigth" style="display: inline-block" >
                        <input type="submit" value="Proceder" class="btn btn-primary py-2 px-4 system-login">
                        
                    </div>
                </div> 
                <a style="cursor: pointer;" class="text-center acc">¿Ya tienes una cuenta?</a>
            </form>
            <form style="display: none;" class="logging py-2" method="post">
              <div class="contact-form">
                  <div class="form-group">
                      <input type="text" class="form-control Mail-login" name="usuarioIngreso" placeholder="Correo">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control Pass-login" name="passwordIngreso" placeholder="Contraseña">
                  </div>
                  <div class="form-group align-items-rigth" style="display: inline-block" >
                      <input type="submit" value="Procesar" class="btn btn-primary py-2 px-4 system-login"><br>
                      <a style="cursor: pointer;" class="acc">¿No estás registrado?</a>
                  </div>
              </div>
            </form> 
           
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
          <h3 style="font-weight:300" >Manicure y pedicure tradicional</h3>
          
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4>
          <p><button data-toggle="modal" data-target="#giftModal" class="btn btn-white px-4 py-3"> Regalar </button></p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(views/images/gift.jpg)">
          
        </div>
        <div class="back">
          <br>
          <h3 style="font-weight:300" >Manicure permanente</h3> 
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 12.000,00</h4>
          <p><a href="#" class="btn btn-white px-4 py-3"> Regalar </a></p>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(views/images/gift.jpg)">
          
        </div>
        <div class="back">
          <h3 style="font-weight:300" >Manicure y pedicure permanente</h3>
          <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 27.000,00</h4>
          <p><a href="#" class="btn btn-white px-4 py-3"> Regalar </a></p>
        </div>
    </div>
    <br>
    <div class="flip">
      <div class="front" style="background-image: url(views/images/gift.jpg)">
        
      </div>
      <div class="back">
        <h3 style="font-weight:300" >Manicure permanente y ondulación de pestañas</h3>
        
        <h4 style="font-weight: 600 !important;" > <i style="color: #77a464;" class="fa fa-money"></i> 26.500,00</h4>
        <p><a href="#" class="btn btn-white px-4 py-3"> Regalar </a></p>
      </div>
  </div>
  <div class="flip">
    <div class="front" style="background-image: url(views/images/gift.jpg)">
      
    </div>
    <div class="back">
      <br>
      <h3 style="font-weight:300" >Ondulación con tinte</h3>
      <h4  style="font-weight: 600 !important;"><i style="color: #77a464;" class="fa fa-money"></i> 15.000,00</h4>
      <p><a href="#" class="btn btn-white px-4 py-3"> Regalar </a></p>
    </div>
</div>
<div class="flip">
  <div class="front" style="background-image: url(views/images/gift.jpg)">
    
  </div>
  <div class="back">
    <br>
    <h3 style="font-weight:300" >Ondulación sin tinte</h3>
    <h4 style="font-weight: 600 !important;" ><i style="color: #77a464;" class="fa fa-money"></i> 13.000,00</h4>
    <p><a href="#" class="btn btn-white px-4 py-3"> Regalar </a></p>
  </div>
</div>

    <br>
    <br>

    
  </center>

    
</body>
<script>
  $(document).ready(function(){
  $(".acc").click(function(){
    console.log("hola")
    $(".register").toggle('fast');
    $(".hH").toggle('fast');
    $(".logging").toggle('fast')
  });
});
</script>
</html>