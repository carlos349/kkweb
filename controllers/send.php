<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mails {
    
    public function constractMail($nombre, $apellido, $correo, $numero){
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        include 'private/mailCredentials.php';

        $firtName = $nombre;
        $lastName = $apellido;
        $mail = $correo;

        $origenNombre = 'Registro KKPrettynails';
        $origenEmail = 'kkprettynails@gmail.com';
        $destinatarioEmail = "kkprettynails@gmail.com"; 
        $destinatarioEmailTwo = $mail;
        //cuerpo del email:
        $cuerpoMensaje = "Se ha recibido una solicitud de registro web con los siguientes datos: <br> Nombre:".$firtName." ".$lastName."<br>";
        $cuerpoMensaje .= "Correo: ".$mail."<br> Numero: ".$numero;
        
        //fin cuerpo del email.

        //cuerpo dos del email:
        $cuerpoMensajeDos = '
        <div style="width: 100%; padding:0;text-align:center;">
        <div style="width: 60%;height: 8vh;margin: auto;background-color: #fdd3d7;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify;-webkit-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);-moz-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);">
            <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                <img style="width: 100%;" src="http://kkprettynails.cl/views/images/logokk.png" alt="Logo kkprettynails">
            </div>
        </div>
        <div style="width: 100%;margin: auto;padding-top: 5%;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 40px;">
            <center>
                <div style="width:60%;text-align: center;">
                    <h1 style="text-align: center;color:#172b4d;">Bienvenid@ </h1>
                    <p style="text-align:left;margin-top:10px;font-size:18px;"> <strong>Hola '.$firtName.' '.$lastName.'.</p>
                    <p style="text-align:left;font-size:16px;font-weight: 300;margin:auto;"><strong> 
                        Nos alegra darte la bienvenida a nuestra comunidad de uñas lindas y sanas, por este medio te estaremos
                        informando todas las novedades de nuestros servicios. <br><br>
                        Cualquier consulta, no dudes en escribirnos, estaremos encantadas de atenderte.</strong>
                    </p>
                <div>
            </center>
        </div>
        <div style="width: 60%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
            <center>
            <div style="width:60%;">
                <center>
                
                <p style="text-align:center;font-size:18px;">Contáctanos.</p>
                <a href="mailto:kkprettynails@gmail.com"><img style="width: 45px;" src="http://kkprettynails.cl/views/images/mail.png" alt=""></a>
                <a href="https://www.instagram.com/kkprettynails/?hl=es-la"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/ig.png" alt=""></a>
                <a href="https://wa.me/56972628949"><img style="width:38px;margin-left:40px" src="http://kkprettynails.cl/views/images/ws.png" alt=""></a>
                <a href="https://kkprettynails.cl"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/web.png" alt=""></a>
                <br>
                <a href="https://goo.gl/maps/GhvcDBH1ppBDae1KA">
                    <p>Av. Pedro de Valdivia 3474, local 53B, Ñuñoa, Región Metropolitana de Santiago</p>
                   </a>
                </center>
            </div>
            </center>
        </div>
    </div>
        ';
        //fin cuerpo dos del email.

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'kkprettynails@gmail.com';                     // SMTP username
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->Password   = $passSend;                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($origenEmail, 'KKPrettynails registro');
            $mail->addAddress($origenEmail, 'KKPrettynails');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Informacion a cliente';
            $mail->Body    = $cuerpoMensaje;

            $mail->send();

            $mailTwo = new PHPMailer(true);

                try {
                    //Server settings
                    $mailTwo->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mailTwo->isSMTP();                                            // Send using SMTP
                    $mailTwo->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mailTwo->Username   = 'kkprettynails@gmail.com';                     // SMTP username
                    $mailTwo->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mailTwo->Password   = $passSend;                               // SMTP password
                    $mailTwo->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mailTwo->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mailTwo->setFrom($origenEmail, 'Registro KKPrettynails');
                  
                    $mailTwo->addAddress($destinatarioEmailTwo, $firtName);     // Add a recipient

                    // Content
                    $mailTwo->isHTML(true);                      // Set email format to HTML
                    $mailTwo->Subject = 'Bienvenid@ a KKPrettynails';
                    $mailTwo->Body    = $cuerpoMensajeDos;
                    
                    $mailTwo->send();
                    
                } catch (Exception $e) {
                    echo $e;
                }
        } catch (Exception $e) {
            echo $e;
        }
    }
    
    public function contactMail()
    {
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        include 'private/mailCredentials.php';

        $nombre = $_POST['nombreC'];
        $correo = $_POST['correoC'];
        $mensaje = $_POST['mensajeC'];
        $asuntoEmail = $_POST['asuntoC']; 

        $origenNombre = 'Información de cliente';
        $origenEmail = 'kkprettynails@gmail.com';
        $destinatarioEmail = "kkprettynails@gmail.com"; 
        $destinatarioEmailTwo = $correo;
        //cuerpo del email:
        $cuerpoMensaje = "Se ha recibido una solicitud de contacto con los siguientes datos:
        ";
        $cuerpoMensaje .= "Nombre:".$nombre."<br>";
        $cuerpoMensaje .= "Correo:".$correo."<br>";
        $cuerpoMensaje .= "Mensaje:\r\n".$mensaje."<br>";
        //fin cuerpo del email.
        $cuerpoMensajeDos = '
        <div style="width: 100%; padding:0;text-align:center;">
        <div style="width: 60%;height: 8vh;margin: auto;background-color: #fdd3d7;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify;-webkit-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);-moz-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);">
            <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                <img style="width: 100%;" src="http://kkprettynails.cl/views/images/logokk.png" alt="Logo kkprettynails">
            </div>
        </div>
        <div style="width: 100%;margin: auto;padding-top: 5%;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 40px;">
            <center>
                <div style="width:60%;text-align: center;">
                    
                    <p style="text-align:center;margin-top:10px;font-size:30px;"> <strong>Hola '.$nombre.'.</p>
                    <p style="text-align:left;font-size:16px;font-weight: 300;margin:auto;"><strong> 
                    Hemos recibido tu solicitud de contacto, a la brevedad nos comunicaremos para responder tus dudas o
                    consultas.
                    </strong> <br>
                    Detalle del mensaje: '.$mensaje.'

                    </p>
                <div>
            </center>
        </div>
        <div style="width: 60%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
            <center>
            <div style="width:60%;">
                <center>
                
                <p style="text-align:center;font-size:18px;">Contáctanos.</p>
                <a href="mailto:kkprettynails@gmail.com"><img style="width: 45px;" src="http://kkprettynails.cl/views/images/mail.png" alt=""></a>
                <a href="https://www.instagram.com/kkprettynails/?hl=es-la"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/ig.png" alt=""></a>
                <a href="https://wa.me/56972628949"><img style="width:38px;margin-left:40px" src="http://kkprettynails.cl/views/images/ws.png" alt=""></a>
                <a href="https://kkprettynails.cl"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/web.png" alt=""></a>
                <br>
                <a href="https://goo.gl/maps/GhvcDBH1ppBDae1KA">
                    <p>Av. Pedro de Valdivia 3474, local 53B, Ñuñoa, Región Metropolitana de Santiago</p>
                   </a>
                </center>
            </div>
            </center>
        </div>
    </div>
        ';
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'kkprettynails@gmail.com';                     // SMTP username
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->Password   = $passSend;                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($origenEmail, 'Syswa informacion');
            $mail->addAddress($origenEmail, 'Syswa');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asuntoEmail;
            $mail->Body    = $cuerpoMensaje;

            $mail->send();
            $mailTwo = new PHPMailer(true);

                try {
                    //Server settings
                    $mailTwo->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mailTwo->isSMTP();                                            // Send using SMTP
                    $mailTwo->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mailTwo->Username   = 'kkprettynails@gmail.com';                     // SMTP username
                    $mailTwo->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mailTwo->Password   = $passSend;                               // SMTP password
                    $mailTwo->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mailTwo->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mailTwo->setFrom($origenEmail, 'Contacto KKPrettynails');
                  
                    $mailTwo->addAddress($destinatarioEmailTwo, $nombre);     // Add a recipient

                    // Content
                    $mailTwo->isHTML(true);                      // Set email format to HTML
                    $mailTwo->Subject = 'Contacto KKPrettynails';
                    $mailTwo->Body    = $cuerpoMensajeDos;
                    
                    $mailTwo->send();
                    
                } catch (Exception $e) {
                    echo $e;
                }
            echo '
            <script>
                document.querySelector("body").style.color = "white";
                
                Swal.fire({
                icon: "success",
                title: "¡Enviado!",
                text: "Te contactaremos lo antes posible.",
                showClass: {
                    popup: "animate__animated animate__fadeInDown"
                    },
                    hideClass: {
                    popup: "animate__animated animate__fadeOutUp"
                    }
                }).then((result) => {
                    if (window.history.replaceState) { // verificamos disponibilidad
                        window.history.replaceState(null, null, window.location.href);
                    }
                    location.reload()
                })
            </script>';
        } catch (Exception $e) {
            echo '
            <script>
            document.querySelector("body").style.color = "white";
                Swal.fire({
                icon: "error",
                title: "¡No Enviado!",
                text: "Experimentamos problemas con el correo.",
                showClass: {
                    popup: "animate__animated animate__fadeInDown"
                    },
                    hideClass: {
                    popup: "animate__animated animate__fadeOutUp"
                    }
                }).then((result) => {
                    if (window.history.replaceState) { // verificamos disponibilidad
                        window.history.replaceState(null, null, window.location.href);
                    }
                    location.reload()
                })
            </script>';
        }
    }

    public function rescue()
    {
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        include 'private/mailCredentials.php';

        $correo = $_POST['correoRescue'];
        $datosController = array("usuario"=>$correo);

        $respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
        
        $resultado = $respuesta[0];

        if (strtolower($resultado["usuario"]) == $correo) {
            $id = $resultado["idSistema"];
            $verify = mt_rand(0,9999);
            $nombre = $resultado["nombre"];
            $apellido = $resultado["apellido"];
            $consulta2 = new Consulta();
            $sql2="UPDATE usuarios SET verify = '$verify' WHERE idSistema='$id'";
            $resultado2 = $consulta2 -> actualizar_registro($sql2);
            
            echo  ' <script>document.querySelector("body").style.color = "white"</script>';
            $origenNombre = 'Recuperación de contraseña';
            $origenEmail = 'kkprettynails@gmail.com';
            $destinatarioEmail = $correo; 

            //cuerpo del email:
            $cuerpoMensaje = '
            <div style="width: 100%; padding:0;text-align:center;">
            <div style="width: 60%;height: 8vh;margin: auto;background-color: #fdd3d7;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify;-webkit-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);-moz-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);">
                <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                    <img style="width: 100%;" src="http://kkprettynails.cl/views/images/logokk.png" alt="Logo kkprettynails">
                </div>
            </div>
            <div style="width: 100%;margin: auto;padding-top: 5%;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 40px;">
                <center>
                    <div style="width:60%;text-align: center;">
                        <h1 style="text-align: center;color:#172b4d;">Bienvenid@ </h1>
                        <p style="text-align:center;margin-top:10px;font-size:18px;"> <strong>Estimado(a) '.$nombre.' '.$apellido.'.</p>
                        <p style="text-align:left;font-size:14px;font-weight: 300;text-align: center;width: 60%;margin:auto;"><strong> 
                        Puedes recuperar tu contraseña por medio de este <a style="cursor: pointer;" href="https://kkprettynails.cl/passRescue?id='.$id.'&verify='.$verify.'" class="text-center accLog">ENLACE</a> o por medio del siguiente boton: </strong>
                        </p>

                        <a style="display: inline-block;
                        font-weight: 400;
                        background: #605B56 !important;
                        text-decoration: none;
                        color: white;
                        text-align: center;
                        vertical-align: middle;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                        margin-top: 5%;
                        border: 1px solid transparent;
                        padding: 0.375rem 0.75rem;
                        font-size: 1rem;
                        line-height: 1.5;
                        border-radius: 0.25rem;
                        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;" href="https://kkprettynails.cl/passRescue?id='.$id.'&verify='.$verify.'" class="text-center ">Cambiar contraseña</a>

                        <p style="text-align:left;font-size:14px;font-weight: 300;text-align: center;width: 60%;margin:auto;"><strong> <br>
                        Este link solo podrá ser utilizado una sola vez. <br> Si usted no realizó esta acción, ignore este correo. <br><br> Cualquier consulta, no dudes en escribirnos, estaremos encantadas de atenderte. </strong>
                        </p>
                    <div>
                </center>
            </div>
            <div style="width: 60%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
                <center>
                <div style="width:60%;">
                    <center>
                    <p style="text-align:center;font-size:18px;">Contáctanos.</p>
                <a href="mailto:kkprettynails@gmail.com"><img style="width: 45px;" src="http://kkprettynails.cl/views/images/mail.png" alt=""></a>
                <a href="https://www.instagram.com/kkprettynails/?hl=es-la"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/ig.png" alt=""></a>
                <a href="https://wa.me/56972628949"><img style="width:38px;margin-left:40px" src="http://kkprettynails.cl/views/images/ws.png" alt=""></a>
                <a href="https://kkprettynails.cl"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/web.png" alt=""></a>
                <br>
                   <a href="https://goo.gl/maps/GhvcDBH1ppBDae1KA">
                    <p>Av. Pedro de Valdivia 3474, local 53B, Ñuñoa, Región Metropolitana de Santiago</p>
                   </a>
                    </center>
                </div>
                </center>
            </div>
        </div>
            ';
           
        
            //fin cuerpo del email.

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->CharSet = 'UTF-8';
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'kkprettynails@gmail.com';                     // SMTP username
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->Password   = $passSend;                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($origenEmail, 'Recuperación de contraseña');
                $mail->addAddress($destinatarioEmail, 'KKPrettynails');     // Add a recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Recuperación de contraseña';
                $mail->Body    = $cuerpoMensaje;

                $mail->send();
                echo '
                <script>
                    document.querySelector("body").style.color = "white";
                    
                    Swal.fire({
                    icon: "success",
                    title: "¡Listo!",
                    text: "Revisa tu correo para usar el link de recuperación.",
                    showClass: {
                        popup: "animate__animated animate__fadeInDown"
                        },
                        hideClass: {
                        popup: "animate__animated animate__fadeOutUp"
                        }
                    }).then((result) => {
                        if (window.history.replaceState) { // verificamos disponibilidad
                            window.history.replaceState(null, null, window.location.href);
                        }
                        location.reload()
                    })
                </script>';
            } catch (Exception $e) {
                echo '
                <script>
                document.querySelector("body").style.color = "white";
                    Swal.fire({
                    icon: "error",
                    title: "¡No Enviado!",
                    text: "Experimentamos problemas con el correo.",
                    showClass: {
                        popup: "animate__animated animate__fadeInDown"
                        },
                        hideClass: {
                        popup: "animate__animated animate__fadeOutUp"
                        }
                    }).then((result) => {
                        if (window.history.replaceState) { // verificamos disponibilidad
                            window.history.replaceState(null, null, window.location.href);
                        }
                        location.reload()
                    })
                </script>';
        }
        }
        else{
            echo '
                <script>
                document.querySelector("body").style.color = "white";
                    Swal.fire({
                    icon: "error",
                    title: "¡Este correo no se encuentra registrado!",
                    text: "Intenta de nuevo con un correo valido.",
                    showClass: {
                        popup: "animate__animated animate__fadeInDown"
                        },
                        hideClass: {
                        popup: "animate__animated animate__fadeOutUp"
                        }
                    }).then((result) => {
                        if (window.history.replaceState) { // verificamos disponibilidad
                            window.history.replaceState(null, null, window.location.href);
                        }
                        location.reload()
                    })
                </script>';
        }
        
    }


public function giftMail()
    {
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        include 'private/mailCredentials.php';

        $correo = $_SESSION["correo"];
        $nombre = $_SESSION["nombre"];
        $numero = $_SESSION["numero"];
        $apellido = $_SESSION["apellido"];
        $articulo = $_POST['articulogift'];
        $total = $_POST['totalGift'];
        $NpedidoG = $_POST['nPedidoG'];
        $metodo = $_POST['typePay'];
        $date = date("d-m-Y");
        if ($metodo == "Transferencia") {
            $datosMetodo = "Este pedido no será procesado hasta que sea transferido el total del pago y envíes la copia del comprobante a la dirección de correo indicada más abajo.";
            $metodoInfo = '<center>   
            <div style="padding: 10px;border-radius: 5px;width: 60%;text-align: left;background-color: #fdd3d7;margin-top: 10px;">
            <span style="font-weight: bold">Datos bancarios para la transferencia:</span>
            <p>Nombre: Ángela Capacho <br> RUT: 26.125.092-6 <br>Tipo de cuenta: Corriente <br> Número de cuenta: 0-000-74-80916-2  <br> Banco: Banco Santander  <br> Email: kkprettynails@gmail.com <br> Comentario: *Por favor indicar el código del pedido*</p>
            </div>
        </center>';
        }
        else{
            $datosMetodo = 'Este código tiene fecha de vencimiento de <b> 7 días hábiles </b> a pagar en la
             siguiente dirección: <a href="https://goo.gl/maps/GhvcDBH1ppBDae1KA">
             <p>Av. Pedro de Valdivia 3474, local 53B, Ñuñoa, Región Metropolitana de Santiago</p>
            </a>';
            $metodoInfo = '';
        }    
            echo  ' <script>document.querySelector("body").style.color = "white"</script>';
            $origenNombre = 'Compra de gift card';
            $origenEmail = 'kkprettynails@gmail.com';
            $destinatarioEmail = $correo; 

            //cuerpo del email:
            $cuerpoMensaje = '
            <div style="width: 100%; padding:0;text-align:center;">
        <div style="width: 60%;height: 8vh;margin: auto;padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify">
            <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                <img style="width: 100%;" src="http://kkprettynails.cl/views/images/logokk.png" alt="Logo kkprettynails">
            </div>
        </div>
        <div style="width: 100%;padding-top: 5%;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 40px;">
            <center>
                <div style="width:60%;text-align: left;border-bottom: 3px solid #fdd3d7;">
                    <p style="text-align:left;margin-top:10px;font-size:18px;"> Estimado(a) '.$nombre.' '.$apellido.', <br> Hemos recibido una solicitud de compra por pagar en '.$metodo.'. Para realizar este pago debes
                        presentar en caja el siguiente código: 000'.$NpedidoG.'. </p>
                    </div>
                <div style="width:60%;text-align: left;border-bottom: 3px solid #fdd3d7;"> <br>
                    <p style="text-align:left;margin-top:10px;font-size:18px;"> <span style="font-weight: bold">Información importante:</span>  '.$datosMetodo.'
                         </p>
                </div>
                '.$metodoInfo.'
                <div style="width:60%;text-align: left;border-bottom: 3px solid #fdd3d7;"> <br>
                    <p style="text-align:left;margin-top:10px;font-size:18px;"> <span style="font-weight: bold">A continuación te dejamos el detalle de tu compra: <br><br>
                        Nombre: '.$nombre.' '.$apellido.' <br>
                        Monto: '.$total.'<br>
                        Código de compra: 000'.$NpedidoG.' <br>
                        Teléfono: '.$numero.' <br>
                        Email: '.$correo.' <br>
                        Fecha de compra: '.$date.' <br>
                         </p>
                </div>

                <table style="padding: 10px;width:63%">
                    <tr style="border-bottom: 3px solid #fdd3d7">
                      <th style="padding: 10px;text-align: center;">ID</th>
                      <th style="padding: 10px;text-align: center;">Producto</th>
                      <th style="padding: 10px;text-align: center;">Compra</th>
                      <th style="padding: 10px;text-align: center;">Valor</th>
                      <th style="padding: 10px;text-align: center;">Cantidad</th>
                      <th style="padding: 10px;text-align: center;">Subtotal</th>
                    </tr>
                    <tr>
                      <td style="padding: 10px;text-align: center;">1</td>
                      <td style="padding: 10px;text-align: center;">Gift Card</td>
                      <td style="padding: 10px;text-align: center;">'.$articulo.'</td>
                      <td style="padding: 10px;text-align: center;">'.$total.'</td>
                      <td style="padding: 10px;text-align: center;">01</td>
                      <td style="padding: 10px;text-align: center;">'.$total.'</td>
                    </tr>
                   
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="padding: 10px;text-align: center;">Total:</td>
                      <td style="padding: 10px;text-align: center;">'.$total.'</td>
                    </tr>
                  </table>
            </center>
        </div>
        <div style="width: 60%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
            <center>
            <div style="width:60%;">
                <center>
                    <p style="text-align:center;font-size:18px;">Contáctanos.</p>
                    <a href="mailto:kkprettynails@gmail.com"><img style="width: 45px;" src="http://kkprettynails.cl/views/images/mail.png" alt=""></a>
                    <a href="https://www.instagram.com/kkprettynails/?hl=es-la"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/ig.png" alt=""></a>
                    <a href="https://wa.me/56972628949"><img style="width:38px;margin-left:40px" src="http://kkprettynails.cl/views/images/ws.png" alt=""></a>
                    <a href="https://kkprettynails.cl"><img style="width: 40px;margin-left:40px" src="http://kkprettynails.cl/views/images/web.png" alt=""></a>
                    <br>
                   <a href="https://goo.gl/maps/GhvcDBH1ppBDae1KA">
                    <p>Av. Pedro de Valdivia 3474, local 53B, Ñuñoa, Región Metropolitana de Santiago</p>
                   </a>
                </center>
            </div>
            </center>
        </div>
    </div>
            ';
           
        
            //fin cuerpo del email.

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->CharSet = 'UTF-8';
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'kkprettynails@gmail.com';                     // SMTP username
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->Password   = $passSend;                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($origenEmail, 'Compra de Gift Card');
                $mail->addAddress($destinatarioEmail, 'KKPrettynails');     // Add a recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Compra de Gift Card';
                $mail->Body    = $cuerpoMensaje;

                $mail->send();
                echo '
                <script>
                    document.querySelector("body").style.color = "white";
                    
                    Swal.fire({
                    icon: "success",
                    title: "¡Listo!",
                    text: "Revisa tu correo para seguir los pasos.",
                    showClass: {
                        popup: "animate__animated animate__fadeInDown"
                        },
                        hideClass: {
                        popup: "animate__animated animate__fadeOutUp"
                        }
                    }).then((result) => {
                        if (window.history.replaceState) { // verificamos disponibilidad
                            window.history.replaceState(null, null, window.location.href);
                        }
                        window.location.href= "inicio"
                    })
                </script>';
            } catch (Exception $e) {
                echo '
                <script>
                document.querySelector("body").style.color = "white";
                    Swal.fire({
                    icon: "error",
                    title: "¡No Enviado!",
                    text: "Experimentamos problemas con el correo.",
                    showClass: {
                        popup: "animate__animated animate__fadeInDown"
                        },
                        hideClass: {
                        popup: "animate__animated animate__fadeOutUp"
                        }
                    }).then((result) => {
                        if (window.history.replaceState) { // verificamos disponibilidad
                            window.history.replaceState(null, null, window.location.href);
                        }
                        location.reload()
                    })
                </script>';
        }
      
        
    }
}


?>