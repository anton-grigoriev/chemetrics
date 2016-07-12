<?php
    define(ROOTPATH, $_SERVER['DOCUMENT_ROOT'] . '/') or die("Unable to set up the server root");

    require (ROOTPATH . 'inc/head.inc.php'); 
?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Ничего личного, но мы бы посоветовали вам <a href="http://browsehappy.com/">обновить браузер</a></p>
        <![endif]-->
 
    <div class="navbar-wrapper">
      <div class="container">
        <?php require (ROOTPATH . 'inc/navbar.inc.php'); ?>
      </div>
    </div>        
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active itemV2k">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="/analytes.php">Экспресс-анализ воды</a></h1>
              <p>Самозаполняемые ампулы CHEMetrics — оптимальное решение для экспресс-анализа воды визуальным и инструментальным методами</p>
            </div>
          </div>
        </div>
        <div class="item itemDissolvedOxygen2">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="/analytes.php?id=oxygen">Растворенный кислород в воде</a></h1>
              <p>Тест-наборы CHEMetrics идеально подходят для определения содержания растворенного кислорода в котловой питательной воде</p>
            </div>
          </div>
        </div>
        <div class="item item04">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="/analytes.php?id=hydrogen">Определение концентрации перекиси водорода</a></h1>
              <p>При асептической упаковке продуктов питания и напитков тест-наборы CHEMetrics используются для определения концентрации перекиси водорода</p>
            </div>
          </div>
        </div>
        <div class="item item01">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="/analytes.php?id=cod">Химическое потребление кислорода</a></h1>
              <p>Система CHEMetrics предназначена для определения химического потребления кислорода (ХПК) в питьевых, природных и сточных водах</p>
            </div>
          </div>
        </div>
        <div class="item itemDissolvedOxygen">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="/analytes.php?id=oxygen">Растворенный кислород в воде</a></h1>
              <p>Тест-наборы CHEMetrics применяются для быстрого определения в &laquo;полевых&raquo; условиях содержания растворенного кислорода в природных водах</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="myCarouselLeft" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="myCarouselRight" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="container index"> 
      <div class="row pros">
        <div class="col-md-12">
          <h1 class="index-header">Почему CHEMetrics?</h1>
        </div>
        <div class="col-md-6">
          <h2 class="index-subheader">Простота и порядок</h2>
          <p>Обычные методы анализа воды сложны, требуют пробоподготовки и реагентов. Для получения надежного результата с CHEMetrics достато просто опустить ампулу в исследуемый образец и сломать ее кончик.</p>
        </div>
        <div class="col-md-6">
          <h2 class="index-subheader">Минимум ошибок</h2>
          <p>Так как стадия пробоподготовки исключается, влияние человеческого фактора снижается практически до минимума, а герметично упакованные ампулы позволят избежать ошибок из-за просроченных или некачественных реагентов.</p>
        </div>      
        <div class="col-md-6">
          <h2 class="index-subheader">Безопасность</h2>
          <p>Самозаполняемые ампулы CHEMetrics содержат единичную дозу подготовленного реагента, поэтому непосредственный контакт с химическими веществами практически отсутствует.</p>
        </div>
        <div class="col-md-6">
          <h2 class="index-subheader">Все включено</h2>
          <p>В комплект поставки входит все необходимое для проведения 30 экспресс-тестов. Наборы CHEMetrics компактные и портативные&nbsp;&mdash; их легко использовать как в лаборатории, так и в полевых условиях</p>
        </div>
        <div class="col-md-6">
          <h2 class="index-subheader">Длительный срок хранения</h2>
          <p>Комплекты CHEMetrics для экспресс-анализа воды в вакуумной упаковке хранятся при комнатной температуре, в защищенном от света месте 2 года (если явно не указано иное)</p>
        </div>
        <div class="col-md-6">
          <h2 class="index-subheader">Опыт и квалификация</h2>
          <p>Наша компания обладает колоссальным опытом в области решений для экспресс-анализа воды. По любым вопросам, связанным с продуктами и решениями CHEMetrics,  обращайтесь в <a href="/contact.php">наши офисы.</a></p>
        </div>
      </div>
      <div class="row reference">
        <div class="col-md-12"><h2>Клиенты CHEMetrics в России</h2></div>
        <div class="col-md-2"><img src="/img/nestle.png" alt="Nestle" class="img-responsive ref-logo"></div>
        <div class="col-md-2"><img src="/img/champion.png" alt="Maste Chemicals Nalco Champion" class="img-responsive ref-logo"></div>
        <div class="col-md-2"><img src="/img/total.png" alt="Total" class="img-responsive ref-logo"></div>
        <div class="col-md-2"><img src="/img/tatneft.png" alt="Татнефть" class="img-responsive ref-logo"></div>
        <div class="col-md-2"><img src="/img/tetrapack.png" alt="Tetrapak" class="img-responsive ref-logo"></div>
        <div class="col-md-2"><img src="/img/baker-hughes.png" alt="Baker-Hughes" class="img-responsive ref-logo"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="index-header">Где применяется экспресс-анализ воды?</h1>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/wine.jpg">
            </div>
            <div class="media-body">
              <h3>Производство продуктов питания и напитков</h3>
              <p>Производители безалкогольных напитков и пива проводят экспресс-анализ производственной воды. При асептической упаковке напитков тест-наборы CHEMetrics используются для определения концентрации <a href="/analytes.php?id=hydrogen">перекиси водорода</a>. Для контроля сточных вод используются <a href="/analytes.php?id=cod">ХПК ампулы</a>. Метод CHEMetrics для определения минимальной концентрации <a href="/analytes.php?id=ozone">озона</a> в бутилированной воде был одобрен для использования крупнейшими мировыми производителями.</p>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/wastewater.jpg">
            </div>
            <div class="media-body">
              <h3>Водоподготовка</h3>
              <p>Тест-наборы CHEMetrics применяются для экспресс-анализов питьевой воды, а также сточных вод на очистных станциях. На очистных станциях в отстойных резервуарах проводится мероприятия по контролю сточной воды, поступающей на очистку. Также проводятся анализы очищенной сточной воды. При использовании датчиков, производящих анализ в реальном времени, тест-наборы CHEMetrics используются для подтверждения результатов, при устранении неполадок и в периоды простоя.</p>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/leaves.jpg">
            </div>
            <div class="media-body">
              <h3>Охрана окружающей среды</h3>
              <p>Тест-наборы CHEMetrics используются для контроля за загрязнением промышленных сточных вод, мониторинга подземных вод, <a href="analytes.php?id=tph">определения загрязнений почвы нефтяными углеводородами</a>, мониторинга поверхностных вод для биогенного стока.</p>   
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/water.jpg">
            </div>
            <div class="media-body">
              <h3>Сточные воды</h3>
              <p>Тест-наборы CHEMetrics применяются для экспресс-анализа воды на очистных сооружениях, на станциях подготовки питьевой воды для определения остаточных дезинфицирующих средств. А также для экспресс-анализа отработанных вод, котловой воды, охлаждающей воды. </p>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/pump.jpg">
            </div>
            <div class="media-body">
              <h3>Нефтехимия</h3>
              <p>На нефтеперерабатывающих и химических заводах продукция CHEMetrics используется для анализа сточных вод, поступающих на очистку, отработанных вод, очищенных сточных вод как в лабораторных, так и в полевых условиях. Утечку в подземных баках-накопителях можно определить с помощью тест-набора CHEMetrics на общее количество <a href="analytes.php?id=tph">нефтяных углеводородов в почве</a></p>  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/lab.jpg">
            </div>
            <div class="media-body">
              <h3>Медицина</h3>
              <p>В медицинских учреждениях и лабораториях тест-наборы для экспресс-анализа воды CHEMetrics используются для проверки санитарной обработки и контроля остаточных <a href="/analytes.php?id=detergents">моющих веществ</a>, а также для определения низкого уровня загрязнений. Тест-набор для определения <a href="/analytes.php?id=detergents">моющих веществ</a> используется для мониторинга эффективности очистки лабораторного и медицинского оборудования</p>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/pulp_n_paper.jpg">
            </div>
            <div class="media-body">
              <h3>Целлюлозно-бумажная промышленность</h3>
              <p>В целлюлозно-бумажной промышленности продукция CHEMetrics применяется для экспресс-анализа котловой и охлаждающей воды, сточных вод и очищенных сточных вод. Также тест-наборы используются при отбеливании, обработке целлюлозы и содорегенерации.</p>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/powerplant.jpg">
            </div>
            <div class="media-body">
              <h3>Энергетика</h3>
              <p>Тест-наборы CHEMetrics применяются для контроля отложений примесей и коррозионных элементов в воде, для мониторинга биоцидов и ингибиторов коррозии, а также для <a href="/analytes.php?id=oxygen">определения растворенного кислорода (в ppb)</a>.</p><br><br>    
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media index-media">
            <div class="media-left branch-icon">
              <img class="media-object" src="/img/plant.jpg">
            </div>
            <div class="media-body">
              <h3>Горнорудное дело и промышленное производство</h3>
              <p>Мы можем оснастить лаборатории или персонал, работающий на промышленных и горнодобывающих предприятиях, как в полевых условиях, так и на производственных площадках, точными и надежными тестами CHEMetrics для определения содержания металлов и <a href="/analytes.php?id=ph">определения pH</a> в загрязненной или очищенной сточной воде.</p>  
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 col-md-offset-11">
          <a class="back-to-top btn btn-default pull-right" role="button" href="#top">Наверх</a>
        </div>
      </div>     
<?php require (ROOTPATH . 'inc/footer.inc.php'); ?>

