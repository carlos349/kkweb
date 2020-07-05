<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mails {
    
    public function constractMail($nombre, $apellido, $correo){
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $firtName = $nombre;
        $lastName = $apellido;
        $mail = $correo;

        $origenNombre = 'Registro KKPrettynails';
        $origenEmail = 'cristiansleonardo@gmail.com';
        $destinatarioEmail = "cristiansleonardo@gmail.com"; 
        $destinatarioEmailTwo = $mail;
        //cuerpo del email:
        $cuerpoMensaje = "El cliente:".$firtName." ".$lastName." se ha registrado.<br>";
        $cuerpoMensaje .= "Correo: ".$mail."<br>";
        
        //fin cuerpo del email.

        //cuerpo dos del email:
        $cuerpoMensajeDos = '
        <div style="width: 100%; padding:0;text-align:center;">
        <div style="width: 85%;height: 8vh;margin: auto;background-color: #fdd3d7;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);padding: 20px;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify;-webkit-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);-moz-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);">
            <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                <img style="width: 100%;" src="http://kkprettynails.cl/views/images/logokk.png" alt="Logo kkprettynails">
            </div>
        </div>
        <div style="width: 100%;margin: auto;padding-top: 5%;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 40px;">
            <center>
                <div style="width:60%;text-align: center;">
                    <h1 style="text-align: center;color:#172b4d;">Bienvenid@ </h1>
                    <p style="text-align:center;margin-top:10px;font-size:18px;"> <strong>Hola '.$firtName.' '.$lastName.'.</p>
                    <p style="text-align:left;font-size:14px;font-weight: 300;text-align: center;width: 60%;margin:auto;"><strong> 
                        Nos alegra que te hayas registrado en nuestra página web, ya puedes disfrutar de nuestros servicios.</strong>
                    </p>
                <div>
            </center>
        </div>
        <div style="width: 85%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
            <center>
            <div style="width:60%;">
                <center>
                <p style="text-align:center;font-size:12px;"> +56 9 7262 8949 &nbsp;&nbsp;   kkprettynails@gmail.com</p> 
                <p style="text-align:center;font-size:12px;">Contáctanos.</p>
                <a href="https://kkprettynails.cl" style="text-decoration: none;color:#172b4d;" style="text-align:center;margin-top:12px;"><strong>kkprettynails.cl</strong></a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/kkprettynails/?hl=es-la" style="text-decoration: none;color:#172b4d;" style="text-align:center;margin-top:12px;"><strong>@kkprettynails</strong></a>
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
            $mail->Password   = 'Carla589*-';                               // SMTP password
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
                    $mailTwo->Password   = 'Carla589*-';                               // SMTP password
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

        $nombre = $_POST['nombreC'];
        $correo = $_POST['correoC'];
        $mensaje = $_POST['mensajeC'];
        $asuntoEmail = $_POST['asuntoC']; 

        $origenNombre = 'Información de cliente';
        $origenEmail = 'kkprettynails@gmail.com';
        $destinatarioEmail = "kkprettynails@gmail.com"; 

        //cuerpo del email:
        $cuerpoMensaje = "Nombre:".$nombre."<br>";
        $cuerpoMensaje .= "Correo:".$correo."<br>";
        $cuerpoMensaje .= "Mensaje:\r\n".$mensaje."<br>";
        //fin cuerpo del email.

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'kkprettynails@gmail.com';                     // SMTP username
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->Password   = 'Carla589*-';                               // SMTP password
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
            echo '
            <script>
                document.querySelector("body").style.color = "white";
                
                Swal.fire({
                icon: "success",
                title: "¡Enviado!",
                text: "Nos pondremos en contacto contigo lo antes posible.",
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
}


?>