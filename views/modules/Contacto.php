

	<?php include 'cabecera.php'; ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('views/images/bg_6.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Contáctanos</h1>
            
          </div>
        </div>
      </div>
    </section>
		
		<section style="-webkit-box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);
        -moz-box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);
        box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);" class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
					<div class="col-md-6 contact-info ftco-animate bg-light p-4">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4" style="font-size: 30px;">Información de contacto</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Direción:</span> Av. Pedro de Valdivia 3474 Caracol Ñuñoa, Local 53-B Ñuñoa, Chile</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Teléfono:</span> <a href="https://wa.me/56972628949">+56 9 7262 8949</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Correo:</span> <a href="mailto:kkprettynails@gmail.com">kkprettynails@gmail.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Instagram:</span> <a href="#">@kkprettynails</a></p>
	            </div>
						</div>
					</div>
          <!-- <div class="col-md-1"></div> -->
          
          <?php 

				if (isset($_POST["correoC"])) {
					
					$contacto = new mails();
					$respuesta = $contacto -> contactMail();
					
				}  
			
			 ?>
          <div class="col-md-6 ftco-animate">
            <form  method="post" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" name="nombreC" placeholder="Tu nombre">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" name="correoC" placeholder="Tu correo">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="asuntoC" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="mensajeC" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Contactar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.1996603971388!2d-70.60527437074302!3d-33.454552198798325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf9158f180b7%3A0x2f4472985a51de08!2sCaracol%20%C3%91u%C3%B1oa%20Centro!5e0!3m2!1ses!2sve!4v1594407454244!5m2!1ses!2sve" style="width:100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
    <script src="views/js/jquery.min.js"></script>
	<script>	
    $(document).ready(function(){
        $(".nav-item").removeClass("active");
        $("#contacto").addClass("active");
      
    });
  </script>
	<?php include 'footer.php'; ?>

