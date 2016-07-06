<?php 

session_start();
if (isset($_SESSION["captcha"]) && $_SESSION["captcha"]===$_POST["captcha"]) 
  {

    $errors = '';
    $WhereAreYouFrom = $_SERVER['HTTP_REFERER'];
    $myemail = 'reklama@labdepot.ru';
    //$myemail = 'info@lloyd-instruments.ru';
    if(empty($_POST['name'])  || 
       empty($_POST['phone'])  || 
       empty($_POST['email']) || 
       empty($_POST['message']))
    {
        $errors .= "\n Ошибка: Пожалуйста, заполните все поля";
    }

    $name = $_POST['name']; 
    $phone = $_POST['phone']; 
    $email_address = $_POST['email']; 
    $message = $_POST['message']; 

    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Ошибка: Пожалуйста, введите корректный e-mail";
    }

    if( empty($errors))
    {
      $to = $myemail; 
      $email_subject = "Запрос с chemetrics.ru";
      $email_body = "Запрос. ".
      " от:\n Name: $name \n Phone: $phone \n Email: $email_address \n Message \n $message"; 
      
      $headers = "From: $myemail\n"; 
      $headers .= "Reply-To: $email_address\n";
      $headers .= "Content-type: text/plain; charset=\"utf-8\"";
      
      mail($to,$email_subject,$email_body,$headers);
      //redirect to the 'thank you' page
      header('Location: thanks.php');
    } 

    echo nl2br($errors);

} else { 
  header('Location: error.php');
  }
unset($_SESSION["captcha"]);