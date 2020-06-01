<?php 

    if (isset($_POST["correo"])) {
        $error = true;
        $registro = new Registro();
        $respuesta = $registro -> registroController();
        if ($respuesta == "ok") {
            header("location: Ingreso");
        }
    }  

 ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('views/images/bg_1.jpg');height:100vh;" data-stellar-background-ratio="0.5">
<input type="hidden" class="ifSchedule" value="no-schedule">
    <div class="container">
    <div class="row no-gutters js-fullheight align-items-center justify-content-center">
        <div class="Card-login">
            <center>
                <a href="inicio"><img style="width:35%" src="views/images/logokk.png" alt=""></a>
                
                <h2>Registro</h2>
            </center>
            <form method="post">
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
                        <input type="text" class="form-control Mail-login" name="pass" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control Mail-login" name="rPass" placeholder="Repetir contraseña">
                    </div>
                    <div class="form-group align-items-rigth" style="display: inline-block" >
                        <input type="submit" value="Registrar" class="btn btn-primary py-2 px-4 system-login">
                        
                    </div>
                </div>
            </form> 
        </div>
    </div>
    </div>
</section>