<!DOCTYPE html>
<html lang="es">
<head>
	<title>KKPrettyNails</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
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
    const endpoint = 'localhost:4200'
    $(document).ready(() => {
      $('.system-login').on('click', () => {
        fetch('https://jsonplaceholder.typicode.com/todos/1')
        .then(res => {
          console.log(res)
        })
        .catch(err => {
          console.log(err)
        })
      })
      
    });
  </script>
</body>

</html>
