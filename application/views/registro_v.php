<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <link href='http://fonts.googleapis.com/css?family=BenchNine|Englebert|Libre+Baskerville|Text+Me+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="<?=base_url(); ?>static/foundation/stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/static/CSS/boligrama.css">
 
  	<script src="<?=base_url(); ?>static/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>static/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>static/foundation/javascripts/modernizr.foundation.js"></script>
	<script type="text/javascript"> var base='<?= base_url(); ?>' </script>
  	<script src="<?=base_url(); ?>static/js/registro.js"></script>

	<style>
		.error{
			color: red;
		}
	</style>

</head>

<body>
		<div class="row">
			<div class="twelve columns">
				<br><br>
				<h3>Registro</h3>
				<fieldset >
					<form class="custom" action="" method="post">
						<div class="row">
							<label for="matriculaInput">Matricula</label>
				  			<input type="text" id="matriculaInput" name="matriculaInput" value="<?php echo set_value('matriculaInput'); ?>"/>
				  			<?php echo form_error('matriculaInput'); ?>
				  		</div><br>
						<div class="row">
							<label for="correoInput">Correo</label>
				  			<input type="text" id="correoInput" name="correoInput" value="<?php echo set_value('correoInput'); ?>" />
				  			<?php echo form_error('correoInput'); ?>

				  		</div>
						<div class="row">
							<label for="passInput">Contraseña</label>
				  			<input type="password" id="passInput" name="passInput" value="<?php echo set_value('passInput'); ?>"/>
				  			<?php echo form_error('passInput'); ?>
				  		</div><br>
						<div class="row">
							<label for="pass2Input">Repite contraseña</label>
				  			<input type="password" id="pass2Input" name="pass2Input" value="<?php echo set_value('pass2Input'); ?>"/>
				  			<?php echo form_error('pass2Input'); ?>
				  		</div><br>
				  		
				  		<div class="row">
							<div class="twelve columns">
						        <div class="six columns">
						           	<label for="divisionesDropdown">División</label>
									  	<select id="divisionesDropdown" name="divisionesDropdown[]">
											<option value="0" selected="true">Seleccione una división</option>
											<?php 	
											foreach ($divisiones as $valor) {
													$value=$valor['idDivisiones'];
													$divisionid=$valor['nombre'];
													$name='divisionesDropdown[]' ?>
											<option id=<?= $divisionid ?> name=<?= $name?> value=<?= $value ?>> <?= $valor['nombre'] ?></option>	
											<?php } ?>
								  		</select>
	  						  			<?php echo form_error('divisionesDropdown[]'); ?>
								</div>
								
						        <div class="six columns">
									<?php $licenciaturas['0'] = 'Seleccione una licenciatura'; ?>
									<label for="city">Licenciatura: </label><?php echo form_dropdown('licenciaturasDropdown[]', $licenciaturas, '0', 'id="licenciaturaDropdown"'); ?><br />
  						  			<?php echo form_error('licenciaturasDropdown[]'); ?>

								</div>
	
							</div>
						</div>			  		
				  		<br><hr>						<input type="submit" id="registroBtn" class="button offset-by-two" value="Registrar" />
					
					</form>
				</fieldset>

			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>
