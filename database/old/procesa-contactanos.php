<?php 

require_once "recaptchalib.php";
require_once "box5.class.php";
require("class.phpmailer.php");

$secret = "6Lfp94kUAAAAAG23aAY5xC7X5n4enFuXLbUgXq0d";
$response = null;
$reCaptcha = new ReCaptcha($secret);
$emailFrom = "no-reply@bolichesamf.com";
$Nombre = "Boliches AMF";
$page= $_POST['page'];
$no_post= $_POST['no_post'];
$nombre = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$entero = $_POST['entero'];
$comentarios = $_POST['mensaje'];
$campo = "¿Cómo se entero?";

//Bolsa de trabajo

if ($no_post == 251) {
	$campo=" ";
	$entero = " ";
}

if ($no_post != 251) { //opinion y cotización
	$campos = array('name','email','phone', 'entero', 'mensaje');
	$valores = array($nombre,$email, $phone, $entero, $comentarios);
}

if ($no_post == 251) { //bolsa de trabajo
	$campos = array('name', 'email','phone', 'mensaje');
	$valores = array($nombre, $email, $phone, $comentarios);
}

$box5 = new box5();
if($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
	if ($response!=null){
		if ($no_post == 251) { //bolsa de trabajo
			$box5->insertar('76Z6crc1ddrcr6brcr', $campos, $valores);
		}

		if ($no_post == 246) { //opinion
			$box5->insertar('Z1227Hb2133d736Z51', $campos, $valores);
		}

		if ($no_post == 252) { //cotización
			$box5->insertar('1H61aHbcm83934b4Z9', $campos, $valores);
		}

		$mail = new PHPMailer();
		$mail->From = $emailFrom;
		$mail->FromName ="Boliches AMF";

		if ($no_post == 246) { //opinion
			$mail->AddAddress("josornio@amf.com");
		}

		if ($no_post == 251) { //bolsa de trabajo
			$mail->AddAddress("nmerlos@amf.com");
			$mail->AddAddress("ojimenez@amf.com");
		}

		if ($no_post == 252) { //Cotización
			$mail->AddAddress("fceballos@amf.com");
			$mail->AddAddress("lvazquez@amf.com");
			$mail->AddAddress("jhernandez@amf.com");
		}

		$mail->addBCC("amfcuenta@telaio.com.mx");
		$mail->addBCC("respaldo-forms-amf@pnetserver.net");
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = "Boliches AMF - ".$page."";
		$mail->Body = '<!DOCTYPE html">

		<html>

			<head>

				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

				<title>Boliches AMF</title>

				

				<style type="text/css">

					table {

					font-family: "Arial Narrow", Arial, sans-serif;

					background-color: #FFFFFF;

					width:700px;

					border: 2px solid #FFFFFF;

					}

					table td, table th {

					padding: 3px 2px;

					}

					table th {

					font-size: 15px;

					font-weight: bold;

					}

				</style>

			</head>

			<body>

				<table>

					<tr>

						<th style="border-bottom: 2px solid #EC0E27;">

							<img style="padding-bottom: 10;" width=100" src="https://telaiotests.com/bolichesamf/wp-content/uploads/2018/11/logo.png" alt="Logotipo AMF">

						</th> 

						<th style="border-bottom: 2px solid #EC0E27;">

							<h1 style="font-size: 24px">Boliches AMF - '.$page.'</h1>

						</th>

					</tr>



					<tr> </tr>



					<tr>

						<td>Nombre</td> <td>'. $nombre .'</td>

					</tr>

					<tr>

						<td>Email</td> <td>' . $email. '</td>

					</tr>

					<tr>

						<td>Teléfono</td> <td>' . $phone. '</td>

					</tr>

					<tr>

						<td>Mensaje</td> <td>' . $comentarios. '</td>

					</tr>

					<tr>

						<td>'.$campo.'</td> <td>' . $entero. '</td>

					</tr>

					<tr> </tr>



					<tr style="background: #EC0E27; text-align: center;" height="35">

					<td colspan="2" style="color: #FFFFFF; padding: 5px;">

						Boliches AMF - <a style="color: #FFFFFF; font-size: 14px; text-decoration: none;font-weight: bold;" href="https://telaio.com.mx/?referer=bolichesAMF" target="_blank">Powered by Telaio</a>

					</td>

					</tr>

				</table>

			</body>

		</html>';

		$mail->IsSMTP();
		$mail->Host = "localhost";
		$mail->port = 26;
		$mail->SMTPAuth = true;
		$mail->Username = "no-reply@bolichesamf.com";
		$mail->Password = "L#qg+}DQ7aAM";
		$mail->CharSet = 'UTF-8';

		if($mail->send()){	
				$jsondata['message'] = "El mensaje ha sido enviado";
				$jsondata['result'] = true;
				echo json_encode($jsondata,JSON_FORCE_OBJECT);
			}

			else{
				$jsondata['message'] = "Ha ocurrido un error al enviar el mensaje.";
				$jsondata['result'] = false;
				echo json_encode($jsondata,JSON_FORCE_OBJECT);
			}

	}

	else{
		$jsondata['message'] = "Error al ingresar captcha";
		$jsondata['result'] = false;
		echo json_encode($jsondata,JSON_FORCE_OBJECT);
	}

}

else{
	$jsondata['message'] = "Ingrese captcha";
      $jsondata['result'] = false;
      echo json_encode($jsondata,JSON_FORCE_OBJECT);
}