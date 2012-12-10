<html>
	<head>
        <meta charset="UTF-8" />
        <title>BoliUAMI</title>
        <meta name="viewport" content="width=device-width" />
        <link href='http://fonts.googleapis.com/css?family=BenchNine|Englebert|Libre+Baskerville|Text+Me+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?=base_url(); ?>static/foundation/stylesheets/foundation.min.css">
        <script src="<?=base_url(); ?>static/foundation/javascripts/foundation.min.js"></script>
        <script src="<?=base_url(); ?>static/foundation/javascripts/modernizr.foundation.js"></script>
        <script src="<?=base_url(); ?>static/foundation/javascripts/marketing_docs.js"></script>
        <script src="<?=base_url(); ?>static/js/jquery-1.8.2.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>/static/CSS/boligrama.css">
        <script type="text/javascript">var base='<?= base_url(); ?>' </script> 
    </head>
	<body>
		
    <div class="row"> <!--Barra de navegación -->
        <div class="twelve columns">
			<fieldset>
				<p>Introduce tu correo para que puedas recuperar tu contraseña</p>
				<form method='post'>
					<label for="correoInput">Correo</label>
			  		<input type="email" id="correoInput" name="correoInput" />
			  		
					<input type="submit" id="recuperaBtn" class="button large offset-by-four" value="Recuperar" />
				</form>
			</fieldset>
		</div>
	</div>

	</body>
</html>	