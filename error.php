<?php
    define(ROOTPATH, $_SERVER['DOCUMENT_ROOT'] . '/') or die("Unable to set up the server root");
    require (ROOTPATH . 'inc/head.inc.php'); 
?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Ничего личного, но мы бы посоветовали вам <a href="http://browsehappy.com/">обновить браузер</a>
        <![endif]-->
<?php require (ROOTPATH . 'inc/navbar.inc.php'); ?>
<div class="container tools">
		<div class="row" style="margin:150px 0;">
			<div class="col-md-6">
				<h1>Ошибка: что-то пошло не так</h1>
				<p><a href="/contact.php">Попробуйте написать нам еще раз</a></p>
			</div>
			<div class="col-md-6">
				<p style="font-size:120px; font-weight:700; text-align:center;">:(</p>
			</div>
		</div>
	<div class="row">
	</div><!--final row -->

	
<?php require (ROOTPATH . 'inc/footer.inc.php'); ?>