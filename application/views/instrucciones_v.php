<html>
	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <script src="<?= base_url(); ?>static/foundation/javascripts/jquery.js"></script>
        <link rel="stylesheet" href="<?=base_url(); ?>static/foundation/stylesheets/foundation.min.css">
        <script src="<?= base_url(); ?>static/foundation/javascripts/foundation.min.js"></script>
        <script src="<?= base_url(); ?>static/foundation/javascripts/modernizr.foundation.js"></script>
        <script src="<?= base_url(); ?>static/foundation/javascripts/marketing_docs.js"></script>
        <script src="<?= base_url(); ?>static/foundation/javascripts/jquery.foundation.accordion.js"></script>
    
	
        <script type="text/javascript">var base='<?= base_url(); ?>' </script> 
        <link rel="stylesheet" href="<?=base_url();?>/static/foundation/stylesheet/foundation.top-bar.css">

		<style>
			.caja{
				-moz-box-shadow: 1px 2px 5px #000000;
				-webkit-box-shadow: 1px 2px 5px #000000;
				box-shadow: 1px 2px 5px #000000;
				border:solid 4px #000000;
				border-radius:20px;

			}
			
			#verde{
				background:#214112;			
			}
			
			#verde-claro{
				background: #A5CC9D
			}
			#amarillo{
				background:#DEEEB6;
			}
			
			img{
				height:150px;
			}
			
			.peque{
				height:90px;
			}
	</style>
        
    </head>
	<body>
		<title>¿Cómo usar Boliguami?</title>
		<div class="row">
		<div class="twelve columns">
					<h3>¿Cómo usar Boliguami?</h3><hr>
			<ul class="accordion">
			  <li class="">
			    <div class="title">
			      <h5>¿Qué es Boliguami?</h5>
			    </div>
			    <div class="content">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			    </div>
			  </li>
			  <li>
			    <div class="title">
			      <h5>¿Y los colores?</h5>
			    </div>
			    <div class="content">
			    	<div class="row">
			    		<div class="one columns"></div>
			      		<div class="two columns caja" id="blanco">
			      			Blanco
			      		</div>
			      		<p class="seven columns">Indica que la UEA no han sido cursada</p>
			      	</div>
			    	<div class="row">
			     		<div class="one columns"></div>
			      		<div class="two columns caja" id="verde">
			      			Verde oscuro
			      		</div>
			      		<p class="seven columns">Indica que la UEA ha sido cursada y aprobada</p>
			      	</div>
			    	<div class="row">
			    		<div class="one columns"></div>
			      		<div class="two columns caja" id="verde-claro">
			      			color
			      		</div>
			      		<p class="seven columns">Indica que la UEA no ha sido cursada, pero muestra la seriación de las UEAS que abre en caso de ser aprobada</p>
			      	</div>
			    	<div class="row">
			    		<div class="one columns"></div>
			      		<div class="two columns caja" id="amarillo">
			      			color
			      		</div>
			      		<p class="seven columns">Indica las ueas seriadas</p>
			      	</div>      	
			    </div>
			  </li>
			  <li class="">
			    <div class="title">
			      <h5>Estructura de Boliguami</h5>
			    </div>
			    <div class="content">
			    	<div class="row">
			      		<div class="six columns">
							<img src="<?= base_url(); ?>static/img/1.png">
			      		</div>
			      		<p class="six columns">Barra de navegación: En ella encontrarás opciones
			      			como editar y/o borrar tu boligrama, eliminar tu cuenta de usuario y 
			      			cerrar tu sesión </p>
			      	</div><br><br>
			    	<div class="row">
			      		<div class="six columns">
							<img src="<?= base_url(); ?>static/img/2.png">
			      		</div>
			      		<p class="six columns">Boligrama: Organiza, a través de este boligrama,
			      			las UEAS que has cursado </p>
			      	</div><br><br> 
			    	<div class="row">
			      		<div class="six columns">
							<img src="<?= base_url(); ?>static/img/3.png" class="peque">
			      		</div>
			      		<p class="six columns">Información: Mira el número de créditos que llevas
			      			acumulados y el tiempo aproximado para que termines tu carrera </p>
			      	</div> 
			    </div>
			  </li>
			</ul> <!--acordion-->	
		</div> <!--twelve-->
		</div> <!--row-->

	</body>
</html>	