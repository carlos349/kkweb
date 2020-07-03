<!DOCTYPE html>
<html lang="es">
<head>
	<title> <?php echo "KKPrettyNails - ". ucwords($_GET["action"]);?></title>
  <meta charset="utf-8">
  <meta name="description" content="Un spa hecho a tu medida ♥">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Kavivanar&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="views/images/logokk.png" type="image/x-icon">
    <link rel="icon" href="views/images/logokk.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="views/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="views/css/animate.css">
    <link rel="stylesheet" href="views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="views/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="views/css/magnific-popup.css">
    <link rel="stylesheet" href="views/css/aos.css">
    <link rel="stylesheet" href="views/css/ionicons.min.css">
    <link rel="stylesheet" href="views/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="views/css/jquery.timepicker.css">
    <link rel="stylesheet" href="views/css/flaticon.css">
    <link rel="stylesheet" href="views/css/icomoon.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
</head>

<body>

	<?php
        $modulos = new Enlaces();
        $modulos -> enlacesController();
    ?>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script>document.body.style.zoom = "100%"</script>
  <script src="views/js/jquery.min.js"></script>
  <script src="views/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="views/js/popper.min.js"></script>
  <script src="views/js/bootstrap.min.js"></script>
  <script src="views/js/jquery.easing.1.3.js"></script>
  <script src="views/js/jquery.waypoints.min.js"></script>
  <script src="views/js/jquery.stellar.min.js"></script>
  <script src="views/js/owl.carousel.min.js"></script>
  <script src="views/js/jquery.magnific-popup.min.js"></script>
  <script src="views/js/aos.js"></script>
  <script src="views/js/jquery.animateNumber.min.js"></script>
  <script src="views/js/bootstrap-datepicker.js"></script>
  <script src="views/js/jquery.timepicker.min.js"></script>
  <script src="views/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="views/js/google-map.js"></script>
  <script src="views/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
  <script>
    var btns = document.querySelectorAll('button');
    var clipboard = new ClipboardJS(btns);

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
  </script>
  <script>
    const endpoint = 'localhost:4200'
    $(document).ready(() => {
      $('.system-register').on('click', () => {

        var data = {
          name:$("#nombreS").val(),
          mail:$("#correoS").val()
        }

        fetch('http://kkprettynails.syswa.net:4200/clients/verifyClient', {
          method: 'POST', // or 'PUT'
          body: JSON.stringify(data),
          headers:{
            'Content-Type': 'application/json'
          }
        })
        .then(res => res.json())
        .catch(error => {
          console.log(error)
          Swal.fire({
							icon: "error",
							title: "Lo sentimos.",
							text: "Estamos presentando errores tecnicos",
							footer: "<a href>¿Olvidate tu contraseña?</a>",
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
              // location.reload()
						})
        })
        .then(response => {
          console.log(response.data._id)
          $("#idSyst").val(response.data._id)
          $("#registroCliente").submit()
        })
        
      })

      
      
      $("#verPerfil").on( 'click', ()  => {
        const idSys = $("#valSys").val()
        fetch('http://kkprettynails.syswa.net:4200/clients/findOne/'+idSys) 
        .then(function(response) {
          return response.json();
        })
        .catch(error => {
          console.log(error)
         
        })
        .then(function(myJson) {
          $("#serviciosSys").text(myJson.participacion)
          $("#referidoSys").text("https://kkprettynails.cl/refer="+myJson._id)
        });
      })
      
    });
    
	
  
  </script>
</body>

</html>
