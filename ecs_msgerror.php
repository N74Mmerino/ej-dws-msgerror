<?php 
 $mail ='';
 $name ='';
 $fecha='';


 $msg_mail = '';
 $msg_name = '';
 $msg_fecha ='';


	if (isset($_POST['btn_enviar'])) {

		/*Correo Validaciones*/
			#Validación de campo en existencia 
			if (!isset($_POST['mail'])) {
				$msg_mail = "Error en el campo CORREO";
			}else{
				$mail = trim($_POST['mail']);

				#Validación de campo vacio
				if (empty($mail)) {
					$msg_mail = "Por favor, ingrese un correo!";
				}else{
					#Validación cantidad mimina de caracteres (min 4/max 10)
					if (strlen($mail)<4 || strlen($mail)>11) {
						$msg_mail = "Por favor, ingrese un correo entre 4 y 10 caracteres";
					}
				}
			}
		/*FIN -- Correo Validaciones*/

		#Nombre y apellido
			#Validación de campo en existencia 
			if (isset($_POST['name'])) {
				$msg_name = "Error en el campo Nombre y apellido";
			}else{
				$name = trim($_POST['nm']);

				#Validación de campo vacio
				if (empty($name)) {
					$msg_name = "Por favor, ingrese Nombre y apellido!";
				}else{
					#Validación cantidad mimina de caracteres (min 6/max 15)
					if (strlen($name)<6 || strlen($name)>16) {
						$msg_name = "Por favor, ingrese un Nombre y apellido entre 6 y 15 caracteres";
					}
				}
			}
		/*FIN -- Nombre y apellido Validaciones*/


        #Fecha
            #Validación de campo en existencia
            if (!isset($_POST['fecha'])) {
				$msg_fecha = "Error en el campo Fecha";
			}else{

				$fecha = trim($_POST['fecha']);

				#Validación de campo vacio
				if (empty($fecha)) {
					$msg_fecha = "Por favor, ingrese Fecha!";
				}else{
					#Validación cantidad mimina de caracteres (min 8/max 10)
					if (strlen($fecha)<7 || strlen($fecha)>11) {
						$msg_fecha = "Por favor, ingrese un Fecha entre 8 y 10 caracteres";
					}
				}
			}
		/*FIN -- Fecha Validaciones*/
	}
?>

<!DOCTYPE html>
 <html lang="es">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mensaje de error</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/grid.css">
	<link rel="stylesheet" href="./css/style.css">
 </head>
 <body>
	<main class="row">
		<section class="col_12 flex flex-j-c flex-a-c">
			<form action="" class="form_01 col_3 flex flex-j-c flex-flow-c flex-a-c" method="post">
				<input type="text" name="mail" class="col_10" placeholder="Correo" value="<?=$mail?>">
				<div class="form_error"><?=$msg_mail?></div>

				<input type="text" name="nm" class="col_10" placeholder="Nombre y apellido" value="<?=$name?>">
				<div class="form_error"><?=$msg_name?></div>
 
                <div class="col_100"></div>

				<label for="fecha_" class="col_10">Fecha:</label>
				<input type="date" name="fecha" class="col_10" placeholder="Fecha" value="<?=$fecha?>">
                <div class="form_error"><?=$msg_fecha?></div>

				<button class="col_6 send_btn" name="btn_enviar" type="submit">Ingresar</button>

			</form>
		</section>
	</main>
  </body>
</html>