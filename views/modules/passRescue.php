<?php include 'cabecera.php'; ?>

<script>

Swal.fire({
			icon: "",
			title: "Introduce tu nueva contraseña",
			showConfirmButton: false,
			html:
			`<form  class="rescue p-4" method="post">
				
			<div class="contact-form">
            <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control Pass-login passValid passHide" name="passNewer" placeholder="Contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
				  </div>
				  <div class="form-group">
					<div class="row">
						<div class="col-sm-10">
							<input type="password" required class="form-control Pass-login passValid passHide"  placeholder="Repetir Contraseña nueva">
						</div>
						<div style="margin-top: 25px;" class="col-sm-2">
							<i class="fa fa-eye showPass"></i>
						</div>
				  
					</div>
                      
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