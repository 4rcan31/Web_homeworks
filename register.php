<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Resgister usuario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="selec2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>







	
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
                Ya eres parte VIP :)
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Fname" placeholder="Primer nombre">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Lname" placeholder="Tus apellidos">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Escribe tu correo aca">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>



					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="register">
                        Eviar datos
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>



<?php
    include("Conection_db.php");
    
?>



</body>
</html>