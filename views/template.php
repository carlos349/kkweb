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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    
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
        <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2650063728607003'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=2650063728607003&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
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
    const endpoint = 'http://localhost:4200'
    
    $(document).ready(() => {
      fetch('https://kkprettynailsback.syswa.net/clients/countClient') 
        .then(function(response) {
          return response.json();
        })
        .catch(error => {
          console.log(error)
         
        })
        .then(function(myJson) {
          $(".nClients").attr('data-number', myJson);
          console.log(myJson);
        })


      $('.system-register').on('click', () => {
        if ($(".correoReg").eq(0).val().includes('@') || $(".correoReg").eq(1).val().includes('@')) {

         if ($(".phone1").eq(0).val().length < 9 && $(".phone1").eq(1).val().length < 9) {
          Swal.fire({
							icon: "error",
							title: "",
							text: "Introduce un número de teléfono válido",
							
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
					})
        }

        else if ($(".passOne").eq(0).val().length < 8 && $(".passOne").eq(1).val().length < 8) {
          Swal.fire({
							icon: "error",
							title: "",
							text: "La contraseña debe tener 8 o más caracteres",
							
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
					})
        }

        
        else if ($(".passOne").eq(0).val() != $(".passTwo").eq(0).val() && $(".passOne").eq(1).val() != $(".passTwo").eq(1).val()) {
          Swal.fire({
							icon: "error",
							title: "",
							text: "Las contraseñas deben coincidir",
							
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
					})
        }

        else{
          var referidoID = ''
          if ($(".idReferido").val() != "no" ) {
            referidoID = $(".idReferido").val()
          }
          
          var data = {
          name:$("#nombreS").val()+" "+$("#apellidoS").val(),
          mail:$("#correoS").val(),
          number: "+56 " + $(".phone1").val(),
          referidoId:referidoID
          }

          fetch('https://kkprettynailsback.syswa.net/clients/verifyClient', {
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
            console.log(response.data)
            $("#idSyst").val(response.data._id)
            if ($(".correoReg").eq(0).val().includes('@')) {
               $("#registroCliente").submit()
            }
            else{
              $("#registroClienteG").submit()
            }
           
          })
        
        
      }
      }else{
          Swal.fire({
							icon: "error",
							title: "",
							text: "Introduce un correo valido",
							
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
					})
        }
        
        // else if ($(".comprobar").eq(0).val() == "" || $(".comprobar").eq(1).val() == "" || $(".comprobar").eq(2).val() == "" || $(".comprobar").eq(3).val() == "" || $(".comprobar").eq(4).val() == "" || $(".comprobar").eq(5).val() == ""   && $(".comprobar").eq(6).val() == "" || $(".comprobar").eq(7).val() == "" || $(".comprobar").eq(8).val() == "" || $(".comprobar").eq(9).val() == "" || $(".comprobar").eq(10).val() == "" || $(".comprobar").eq(11).val() == "")  {
        //   Swal.fire({
				// 			icon: "error",
				// 			title: "",
				// 			text: "Debe rellenar todos los campos",
							
				// 			showClass: {
				// 				popup: "animate__animated animate__fadeInDown"
				// 			  },
				// 			  hideClass: {
				// 				popup: "animate__animated animate__fadeOutUp"
				// 			  }
				// 	})
        // }
        
        
        
        
        
      })
      $(".proccessGift").on('click', function() {
        var esta = $(".modG").eq($(".cardValidatorF").val()).parent().prev().prev().text()
        var esto = $(".modG").eq($(".cardValidatorF").val()).parent().prev().text()
        var otro = $("#typePay").val()

        var mas = $(".articuloGift").val()
        var mes = $(".totalGift").val()
        if ($("#typePay").val() == "") {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "¡Debe elegir un metodo de pago!",
            showClass: {
              popup: "animate__animated animate__fadeInDown"
              },
              hideClass: {
              popup: "animate__animated animate__fadeOutUp"
              }
            })
        }
        else{
          Swal.fire({
            icon: "",
            title: "Detalles de tu compra",
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonColor: '#f3d9e4',
            cancelButtonColor: '#f5f5f5',
            confirmButtonText: '¡Confirmar!',
            cancelButtonText: '¡Cancelar!',
            customClass: {
              confirmButton: 'colorSweet',
              cancelButton: 'colorSweet',
            },
            html:
            `
            <p> <b>Gift card:</b> ${mas} <br>
             <b>Precio:</b>  ${mes} <br>
            <b>Tipo de pago:</b> ${otro} </p>
            
            `,
            showClass: {
              popup: "animate__animated animate__fadeInDown"
              },
              hideClass: {
              popup: "animate__animated animate__fadeOutUp"
              }
            })
            .then((result) => {
              if (result.value) {
                var data = {
                cliente:$(".nombreGift").val(),
                identidad:$(".contactoGift").val(),
                articulo: $(".articuloGift").val(),
                total: $(".totalGift").val()
                }

                fetch('https://kkprettynailsback.syswa.net/pedidos', {
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
                       location.reload()
                    })
                })
                .then(response => {
                  console.log(response)
                  $(".nPedidoG").val(response.datos.nPedido)
                  axios.post('https://kkprettynailsback.syswa.net'+'/notifications', {
                        userName:'El cliente: '+ $(".nombreGift").val(),
                        userImage:'',
                        detail:'Creo un Pedido',
                        link: 'pedidos'
                    })
                    .then(res => {
                        var socket = io('https://kkprettynailsback.syswa.net')
                        socket.emit('sendNotification', res.data)
                    })
                    var socket1 = io('https://kkprettynailsback.syswa.net')
                    var sockData = {
                      userName: '',
                      userImage: '',
                      detail: '',
                      link: '',
                      date: new Date()
                    }
                    socket1.emit('sendNotification', sockData )
                $("#formGiftWindow").submit()
                  
                
                })
                
                }
              
              })
          
        }
      })
      
      
      $("#verPerfil").on( 'click', ()  => {
        const idSys = $("#valSys").val()
        fetch('https://kkprettynailsback.syswa.net/clients/findOne/'+idSys) 
        .then(function(response) {
          return response.json();
        })
        .catch(error => {
          console.log(error)
         
        })
        .then(function(myJson) {
          $("#serviciosSys").text(myJson.participacion)
          $("#referidoSys").text("https://kkprettynails.cl/inicio?r&c="+myJson._id)
          $(".reco").text(myJson.recomendaciones)
          console.log(myJson.historical.length)
          if (myJson.historical.length > 0) {
            for (let i = 0; i < 5; i++) {
              var date = new Date(myJson.historical[i].fecha)
              var fecha = date.getDate()+"-"+date.getMonth()+"-"+date.getFullYear()
              var td = `<tr>
                        <th scope="row">${fecha}</th>
                        <td>${myJson.historical[i].servicios[0].servicio}</td>
                        <td>${myJson.historical[i].manicurista}</td>
                        <td>$ ${myJson.historical[i].total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString()}</td>
                        <td><button style="font-size: .7em;" class="btn btn-success">Reagendar</button></td>
                        </tr>`
              $("#histServices").append(td)
            }
          }
          
          var data2 = {
          client:$(".correoClienteRequest").val()
          }

          fetch('https://kkprettynailsback.syswa.net/clients/datesPerClient', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data2),
            headers:{
              'Content-Type': 'application/json'
            }
          })
          .then(res => res.json())
          .catch(error => {
            console.log(error)
          })
          .then(response => {
            
             if (response) {
               $(".citasPendi").text(response.length) 
          
             }
             else{
              $(".citasPendi").text(0)
              
             } 
             
            

            for (let i = 0; i < response.length; i++) {
            var date = new Date(response[i].date)
            var fecha = date.getDate()+"-"+date.getMonth()+"-"+date.getFullYear()
            var confirm = ''
            if (response[i].confirmation == true) {
              confirm = "<button style='font-size: .7em;cursor:default' class='btn btn-secondary' disabled  >Confirmada</button>"
            }
            else{
              confirm = `<button style="font-size: .7em;" class="btn btn-success confirmDate"  id="${response[i].confirmationId}">Confirmar</button>`
            }
            var td = `<tr>
											<th scope="row">${fecha}</th>
											<td>${response[i].services[0].servicio}</td>
											<td>${response[i].employe}</td>
											<td></td>
											<td>${confirm}</td>
										  </tr>`
            $(".bodyCitas").append(td)
          }
            
            
          })
          
        })

        
      })
      $(".botonChangeData").on('click', function(){
        const idSys = $("#valSys").val()
        var name = $(".nameChange").val() + " " + $(".apellidoChange").val()
        var data3 = {
          nombreClienteEditar:name,
          identidadClienteEditar:$(".correoChange").val(),
          correoClienteEditar:$(".numberChange").val(),
          instagramClienteEditar:'',
          }

          fetch('https://kkprettynailsback.syswa.net/clients/'+idSys, {
            method: 'PUT', // or 'PUT'
            body: JSON.stringify(data3),
            headers:{
              'Content-Type': 'application/json'
            }
          })
          .then(res => res.json())
          .catch(error => {
            console.log(error)
          })
          .then(response => {
            if (response.status = "Servicio actualizado") {
              $(".chageDataForm").submit()
            }
            else{
              Swal.fire({
							icon: "error",
							title: "",
							text: "El correo introducido ya esta en uso",
							
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							  },
							  hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							  }
					})
            }
            
          })
      })
      $(document).on('click','.confirmDate', function(){
        Swal.fire({
            icon: "warning",
            title: "¿Desea confirmar?",
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonColor: '#f3d9e4',
            cancelButtonColor: '#f5f5f5',
            confirmButtonText: 'Si',
            cancelButtonText: 'No',
            customClass: {
              confirmButton: 'colorSweet',
              cancelButton: 'colorSweet',
            },
            showClass: {
              popup: "animate__animated animate__fadeInDown"
              },
              hideClass: {
              popup: "animate__animated animate__fadeOutUp"
              }
        })
        .then((result) => {
          if (result.value) {
             var idDate = $(this).attr("id")
        fetch('https://kkprettynailsback.syswa.net/citas/confirmDate/'+idDate) 
        .then(function(response) {
          return response.json();
        })
        .catch(error => {
          console.log(error)
         
        })
        .then(function(myJson) {
          $(".bodyCitas").empty()
          var data2 = {
          client:$(".correoClienteRequest").val()
          }

          fetch('https://kkprettynailsback.syswa.net/clients/datesPerClient', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data2),
            headers:{
              'Content-Type': 'application/json'
            }
          })
          .then(res => res.json())
          .catch(error => {
            console.log(error)
          })
          .then(response => {
            
             
              $(".citasPendi").text(response.length)
            
            

            for (let i = 0; i < response.length; i++) {
            var date = new Date(response[i].date)
            var fecha = date.getDate()+"-"+date.getMonth()+"-"+date.getFullYear()
            var confirm = ''
            if (response[i].confirmation == true) {
              confirm = "<button style='font-size: .7em;cursor:default' class='btn btn-secondary' disabled  >Confirmada</button>"
            }
            else{
              confirm = `<button style="font-size: .7em;" class="btn btn-success confirmDate"  id="${response[i].confirmationId}">Confirmar</button>`
            }
            var td = `<tr>
											<th scope="row">${fecha}</th>
											<td>${response[i].services[0].servicio}</td>
											<td>${response[i].employe}</td>
											<td></td>
											<td>${confirm}</td>
										  </tr>`
            $(".bodyCitas").append(td)
          }
            
            
          })
          
        })
            
            }   
         })
       
      })
      
    });
    
	
  
  </script>
  <?php 
			  if(isset($_GET['r'])){
        echo '<script>
        
          $(document).ready(function(){
            $("#logModal").modal("show")
            $(".registerL").toggle("fast")
            $(".hH").toggle("fast")
            $(".hH2").toggle("fast")
            $(".loggingL").toggle("fast")
						console.log("epale")
					});
					
				</script>';
			  }
			  ?>
</body>

</html>
