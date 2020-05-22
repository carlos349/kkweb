

	<?php include 'cabecera.php'; ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('views/images/bg_6.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Contactanos</h1>
            
          </div>
        </div>
      </div>
    </section>
		
		<section style="-webkit-box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);
        -moz-box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);
        box-shadow: -1px -5px 6px -6px rgba(0,0,0,0.36);" class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate bg-light p-4">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Información de contacto</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Direción:</span> Av. Pedro de Valdivia 3474 Caracol Ñuñoa, Local 53-B Ñuñoa, Chile</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Telefono:</span> <a href="tel://1234567920">+56 972 628 949</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Correo:</span> <a href="mailto:info@yoursite.com">kkprettynails@gmail.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Instagram:</span> <a href="#">kkprettynails</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tu nombre">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Tu correo">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Contactar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div id="map" class="map"></div>
	
    <script src="views/js/jquery.min.js"></script>
	<script>	
    $(document).ready(function(){
        $(".nav-item").removeClass("active");
        $("#contacto").addClass("active");
      
    });
  </script>
	<?php include 'footer.php'; ?>

