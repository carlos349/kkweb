<?php include 'cabecera.php'; ?>

<script>

Swal.fire({
			icon: "info",
			title: "Por favor introduce tu nueva contraseña",
			showConfirmButton: false,
			html:
			`<form  class="rescue p-4" method="post">
				
			<div class="contact-form">
				<div class="form-group">
					<input type="text" class="form-control Mail-login" name="passNewer" placeholder="Introduce tu nueva contraseña">
				</div>
				
				<div class="form-group align-items-rigth" style="display: inline-block" >
					<input type="submit" value="Cambiar" class="btn btn-primary py-2 px-4 system-login">
					
				</div>
			</div>
		  </form> `,
			showClass: {
				popup: "animate__animated animate__fadeInDown"
			  },
			  hideClass: {
				popup: "animate__animated animate__fadeOutUp"
			  }
			})
</script>



<?php 

$id = $_GET['id'];
$verify = $_GET['verify'];

if (isset($_POST['passNewer'])) {
    $rescue = new Registro();
  $respuesta = $rescue -> changeByEmail($id,$verify);
}
  
    

?>