<?php

    $ingreso = new Ingreso();
    $ingreso -> ingresoController();
    if (!$_POST) {
                  
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('views/images/bg_1.jpg');height:100vh;" data-stellar-background-ratio="0.5">
<input type="hidden" class="ifSchedule" value="no-schedule">
    <div class="container">
    <div class="row no-gutters js-fullheight align-items-center justify-content-center">
        <div class="Card-login">
            <center>
                <img style="width:35%" src="views/images/logokk.png" alt="">
            </center>
            <form method="post">
                <div class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control Mail-login" name="usuarioIngreso" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control Pass-login" name="passwordIngreso" placeholder="Contraseña">
                    </div>
                    <div class="form-group align-items-rigth" style="display: inline-block" >
                        <input type="submit" value="Ingresar" class="btn btn-primary py-2 px-4 system-login">
                        <a href="Registro" class="ml-4">¿No estás registrado?</a>
                    </div>
                </div>
            </form>
            
            
        </div>
    </div>
    </div>
</section>

<?php } ?>