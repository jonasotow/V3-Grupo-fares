<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../static/css/base.css">
	<link rel="shortcut icon" href="http://grupofares.com.mx/favicon.ico" />
	<title>Contacto - Grupo Fares</title>
</head>
<body>
	
	<header>
		<div class="logos">
		    <figure class="logo">
		    	<img src="../static/image/logo.png" alt="Grupo Fares">
		    </figure>
		    <figure class="corp">
		        <img src="../static/image/logos/proveecom.gif" alt="Grupo Fares">
		        <img src="../static/image/logos/saar.gif" alt="Grupo Fares">
		    </figure>
		</div>
		<div class="menus">
			<div id="boton">
      			<a href="#" class="display-menu button-menu icon-menu"></a>
    		</div>
	      	<nav class="menu" id="menu">
			    <ul class="lista">
			        <li class="tab"><a href="/">Inicio</a></li>
			        <li class="tab"><a href="/nosotros/">Nosotros</a></li>
			        <li class="tab"><a href="/productos/">Productos</a></li>
			        <li class="tab"><a href="/contacto/">Contacto</a></li>
			    </ul>  
	      	</nav>
	    </div>
	</header>

	<main>
		<section class="wrap fondopapel">
			<div class="boxs">

				<?php
				    if(isset($_SESSION['nombre'])){
		    		}else {
				?>
				<article class="form">
	            	<form class="formulario" method="POST" name="info" action="mensaje/index.php">
	                	<fieldset>
	                   		<legend>Escríbenos</legend>
							<div class="control-group">
								<p><input type="text" placeholder="Nombre" id="nombre" name="nombre" required></p>
								<p><input type="email" placeholder="Correo" id="email" name="email" required></p>
			                    <p><input type="text" placeholder="Asunto" id="asunto" name="asunto" required></p>
			                    <textarea type="text" placeholder="Aquí tu mensaje" id="mensaje" name="mensaje" cols="30" rows="5" required></textarea> 
	                      	</div>
	                      	<div class="opcion">
			                       <input type="submit" value="Enviar" id="Submit" class="sent" />
			                       <input type="reset" value="Restablecer" id="Reset" class="reset" />
	                      	</div>
	                    </fieldset>
	                </form>
	            </article>
				<?php
	    			}
				?>
			</div>
		</section>
	</main>

	<footer>
		<section class="contacto">
	    	<div class="title">Contacto</div>
	    	<article class="info">
	    		<p class="ubica">Oficina Mazatlán</p>
	     		<p class="address"> Dirección: Av. Ejercito Mexicano # 2004 Int. 234 Col. Insurgentes.<br/> Mazatlán, Sinaloa. C.P 82018</p>
	     		<p class="mail"> Correo: <a href="mailto:ventas@grupofares.com.mx">ventas@grupofares.com.mx</a></p>
	      		<p class="phone"> Teléfono: <span class="numero"><a href="tel:6692110966">669-211-0966</a></span></p>
	      	</article>
	      	<article class="info">
	      		<p class="ubica">Oficina Guadalajara</p>
	      		<p class="address">Dirección: Av. Rio Nilo 2888, Col Jardines de la Paz. <br/>Guadalajara, Jalisco. C.P 44860</p>
	     		<p class="mail"> Correo: <a href="mailto:gdl@grupofares.com.mx">gdl@grupofares.com.mx</a></p>
	      		<p class="phone"> Teléfono: <span class="numero"><a href="tel:3338370800">(33) 3837-0800</a></span></p>
	    	</article>
	  	</section>
	</footer>

	<script src="../static/js/jquery-1.11.0.min.js"></script>
	<script src="../static/js/menu.js"></script>

</body>
</html>