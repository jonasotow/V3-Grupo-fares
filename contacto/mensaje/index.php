	<?php
	    session_start();
	?>

	<?php
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];
		$para = 'jonathan.sm@grupofares.com.mx';
		$titulo = "$asunto: $nombre";
		$header = 'From: ' . $email;
		$msjCorreo = "$mensaje";


	    if(isset($_POST['nombre'])){
	        $_SESSION['nombre'] = $_POST['nombre'];
	        if (mail($para, $titulo, $msjCorreo, $header)) {
				echo "<script language='javascript'>
						alert('Mensaje enviado, muchas gracias.');
						window.location.href = 'http://grupofares.com.mx/contacto/mensaje/exito.php';
					</script>";
			} else {
				echo 'Falló el envio';
			}
	    }else{
	        if(isset($_SESSION['nombre'])){
	            if (mail($para, $titulo, $msjCorreo, $header)) {
				echo "<script language='javascript'>
						alert('Mensaje enviado, muchas gracias.');
						window.location.href = 'http://grupofares.com.mx/contacto/mensaje/exito.php';
					</script>";
			} else {
				echo 'Falló el envio';

			}
	        }else{
	            echo "<script language='javascript'>
						window.location.href = 'http://grupofares.com.mx/';
					</script>";
	        }
	    }
	?>



			
	
				