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
<div class="container contact">
	<div class="row">
		<div class="col-md-12">
			<h1>Контактная информация</h1>
		</div>
	</div>
</div>
<div class="jumbotron jumboContact">
    <div class="container contact">
        <div class="row">
            <div class="col-md-4">
                <h3>Санкт-Петербург</h3>
                <p>
                    197374, Санкт-Петербург, <br>
                    Торфяная дорога, д. 7, лит. Ф<br>
                    Тел./факс: (812) 320-60-48<br>
                    Электронная почта: info@labdepot.ru
                    </p>
            </div>
            <div class="col-md-4">
                <h3>Москва</h3>
                <p>
                    107023, Москва, <br>
                    Семеновский пер., д. 15, офис 108<br>
                    Тел./факс: (495) 225-75-61<br>
                    Электронная почта: msk@labdepot.ru
                </p>
            </div>
            <div class="col-md-4">
                <h3>Екатеринбург</h3>
                <p>
                    620075, г. Екатеринбург, <br>
                    ул. Розы Люксембург, д. 37, офис 202<br>
                    Тел./факс: (343) 278-74-51<br>
                    Электронная почта: ural@labdepot.ru
                </p>
            </div>
            <div class="col-md-4">
                <h3>Самара</h3>
                <p>
                    443110, г. Самара, <br>
                    ул. Мичурина, д. 74<br>
                    Тел./факс: (846) 269-77-95<br>
                    Электронная почта: pl@labdepot.ru
                </p>
            </div>
            <div class="col-md-4">
                <h3>Казань</h3>
                <p>
                    420066, г. Казань<br>
                    пр. Ибрагимова, д. 58, офис 504<br>
                    Тел./факс: (843) 567-50-53<br>
                    Электронная почта: se@labdepot.ru
                </p>
            </div>
            <div class="col-md-4">
                <h3>Краснодар</h3>
                <p>
                    350040, г. Краснодар <br>
                    ул. 2-ая Пятилетка, д. 41, офис 10<br>
                    Тел./факс: (861) 200-17-21<br>
                    Электронная почта: krasnodar@labdepot.ru
                </p>
            </div>              
        </div>
    </div>
</div>
    <div class="container contact">
        <div class="row feedback feedbackForm">
            <div class="col-md-8">
                <h2>Отправить запрос</h2>
                <div class="feedback-wrapper">
                    <p>Отправьте нам сообщение с помощью этой формы, и мы свяжемся с вами в ближайшее время</p>
                    <p><strong>Внимание!</strong> Пожалуйста, заполните все поля</p>
                </div>
                <form method="post" name="contact_form" id="contactform" action="/contact-form-handler.php">
                  <div class="form-group">
                    <label for="inputName">Ваше имя: </label><div class="error" id="contactform_name_errorloc"></div>
                    <input type="text" name="name" class="form-control">
                  </div>
                          
                  <div class="form-group">
                    <label for="inputPhone">Контактный телефон (только цифры, например 88123206048):  </label><div class="error" id="contactform_phone_errorloc"></div>
                    <input type="text" name="phone" class="form-control">
                  </div>
                          
                  <div class="form-group">
                    <label for="inputEmail">E-mail: </label><div class="error" id="contactform_email_errorloc"></div>
                    <input type="text" name="email"class="form-control">
                  </div>
                          
                  <div class="form-group"> 
                    <label for="inputMsg">Ваш запрос: </label>              
                    <textarea name="message" rows="5" class="form-control"></textarea>
                  </div>

                  <div class="form-group"> 
                    <label for="inputMsg">Пожалуйста, введите символы, изображенные ниже</label>              
                    <textarea type="text" name="captcha" class="form-control"></textarea>
                  </div>
                  <img src="/captcha.php" />

                <button type="submit" class="btn btn-warning btn-lg" style="float:right">Отправить</button>
                </form>
                
                <script language="JavaScript">
                    var frmvalidator  = new Validator("contactform");
                    frmvalidator.EnableOnPageErrorDisplay();
                    frmvalidator.EnableMsgsTogether();

                    frmvalidator.addValidation("name","req","Пожалуйста, представьтесь"); 
                    frmvalidator.addValidation("name","maxlen=128","Извините, имя слишком длинное");

                    frmvalidator.addValidation("phone","req","Пожалуйста, укажите Ваш телефон");
                    frmvalidator.addValidation("phone","numeric","Некорректный номер телефона: только цифры, пожалуйста"); 

                    frmvalidator.addValidation("email","req","Пожалуйста, укажите Ваш e-mail"); 
                    frmvalidator.addValidation("email","email","Пожалуйста, введите корректный e-mail"); 
                </script>
            </div>
        </div>    
<div class="row">
</div><!--final row -->

    
<?php require (ROOTPATH . '/inc/footer.inc.php'); ?>