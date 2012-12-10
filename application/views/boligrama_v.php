<html>
	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="<?=base_url(); ?>static/foundation/stylesheets/foundation.min.css">
        <script src="<?=base_url(); ?>static/foundation/javascripts/foundation.min.js"></script>
        <script src="<?=base_url(); ?>static/foundation/javascripts/modernizr.foundation.js"></script>
        <script src="<?=base_url(); ?>static/foundation/javascripts/marketing_docs.js"></script>
        <script src="<?=base_url(); ?>static/js/boligrama.js"></script>
        <script src="<?=base_url(); ?>static/js/jquery-1.8.2.js"></script>
        <link rel="stylesheet" href="<?=base_url();?>/static/CSS/boligrama.css">
        <script type="text/javascript">var base='<?= base_url(); ?>' </script> 
    </head>
	<body>
		<!--pre> < ?= print_r($licenciaturaId['ueasRelacionadas']) ?></pre-->

                <?php if(isset($licenciaturaId['ueasRelacionadas'])){
                    for ($i=1; $i <13 ; $i++) { 
                        echo "<div class='twelve columns filaUEA'>";
                        echo "<div class='two columns'>Trimestre ".$i."</div>";
                        foreach($licenciaturaId['ueasRelacionadas'] as $UEA){ 
                            if ($UEA['trimestre']==$i) {?>                              
                                    <div class="two columns cajaUEA estado<?=$UEA['estado'] ?>" onclick="pintaSiguiente('222')">
                                        Clave:<?=$UEA['ueas_idueas'] ?><br> 
                                        UEA: <?=$UEA['nombre'] ?> <br>
                                        creditos: <?=$UEA['creditos'] ?> <br>
                                        Estado: <?=$UEA['estado'] ?>

                                    </div>
                        <?php }
                            }
                        echo "</div>";
                        }
                    } ?>
	</body>
</html>	