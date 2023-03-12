<!DOCTYPE html>

<html>
<head>
	<title>Login Admin</title>
	<meta charset="utf-8">
	<?php require_once "scripts.php"; ?>
	
	
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">IMB-PC</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="imas/imb.png" height="110">
					</div
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
				



				</div>
					
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/loginadmin.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="admin.php";

							}else{
								alertify.alert("Fallo al entrar");
							}
						}
					});
		});	
	});
</script>