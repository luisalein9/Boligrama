<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="index.css">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<!--<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>-->
	</head>
	
	<body>
		<?=base_url();?> <= esto es lo que me regresa el base_url
		<div data-role="index" id="index" name="index" class="index">
			<div data-role="header" id="header" > <!--Aqui comienza el encabezado-->
				<img id="uamizt" src="iconos/LOGO_UAM.GIF"> <br />
			</div><!--Aquí termina mi encabezado-->


			<div data-role="content"> 
				<form method="post" action="intermedio.php">
					<label for="matricula">Matricula:</label><br />
					<input type="text" name="matricula" id="matricula" value="" placeholder="Introduce tu matricula" />
					<br /><br />
				
					<label for="pass">Contraseña:</label><br />
					<input type="password" name="pass" id="pass" value="" placeholder="Password" />
					<br /><br />

					<button type="submit" class="button" name="entrar">Entrar</button>
    			
					<button type="submit"  class="button" name="registro">Registar</button>
    			
				</form>
			</div>
		</div>
	</body>
</html>
			
