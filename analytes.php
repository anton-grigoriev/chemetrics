<?php
    define(ROOTPATH, $_SERVER['DOCUMENT_ROOT'] . '/') or die("Unable to set up the server root");
    require (ROOTPATH . '/inc/analytes_db.inc.php');
    require (ROOTPATH . '/inc/head.inc.php');
    

?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Ничего личного, но мы бы посоветовали вам <a href="http://browsehappy.com/">обновить браузер</a>
        <![endif]-->
<?php require (ROOTPATH . '/inc/navbar.inc.php'); ?>
<div class="container analytes">
	<div class="row">
		<div class="col-md-12">
			<h1><?=$header?></h1>
		</div>
	</div>
	<div class="row firstRow">

		<?PHP
			include $content;
		?>
			
	</div>
	



<div class="row">
</div><!--final row -->

	
<?php require (ROOTPATH . '/inc/footer.inc.php'); ?>