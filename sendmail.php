<?php
	if(isset($_POST['email'])) 
	{

		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "goncove@gmail.com";
		$email_subject = "Contacto desde itsolution.mx";

		// Aquí se deberían validar los datos ingresados por el usuario
		if(!isset($_POST['nombre']) ||
		!isset($_POST['email']) ||
		!isset($_POST['mensaje'])) 
		{

			echo "<b>El mensaje no pudo enviarse. </b><br />";
			echo "Por favor, verifique la información ingresada<br />";
			die();
		}
		$_page = $_POST['page'];
		$email_from = $_POST['email'];
		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

		echo "<script language='javascript'> alert('Mensaje enviado, muchas gracias.'); window.location.href = '". $_page . "'; </script>";

	}
?>
