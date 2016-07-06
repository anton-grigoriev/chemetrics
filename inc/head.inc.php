<?PHP
    $whereAmI = $_SERVER['PHP_SELF'];
    switch ($whereAmI) {
        case '/index.php':
            $pageTitle = "Экспресс-анализ воды CHEMetrics";
            break;

        case '/methods.php':
            $pageTitle = "Методы экспресс-анализа воды";
            break;

        case '/tools.php':
            $pageTitle = "Инструменты для экспресс-анализа воды";
            break;

        case '/thanks.php':
            $pageTitle = "Спасибо!";
            break;

        case '/404.php':
            $pageTitle = "Ошибка 404: страница не найдена!";
            break;
    }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$pageTitle?></title>
        <meta name="description" content="Экспресс-анализ воды Chemetrics: анализ воды визуальными и инструментальными методами">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="/js/gen_validatorv31.js"></script>
    </head>