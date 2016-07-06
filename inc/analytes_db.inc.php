<?PHP

	$shelfLife = "Срок годности продукта не менее 2 лет, если явно не указано иное";
	$vacuVials = "Тест-наборы <a href='/methods.php#vacu-vials'>Vacu-vials</a> необходимо использовать с <a href='/tools.php#v2k'>фотометром V-2000</a> (продается отдельно) или спектрофотометром, способным принимать круглые 13 мм кюветы.";

	$chemets = "<a href='/methods.php#chemets'>CHEMets</a> (визуальный)";
	$vacuettes = "<a href='/methods.php#vacuettes'>VACUettes</a> (визуальный)";
	$titrets = "<a href='/methods.php#titrets'>Titrets</a> (визуальный)";
	$vacuVialsMethod = "<a href='/methods.php#vacu-vials'>Vacu-vials</a> (инструментальный)";
	$sam = "<a href='/tools.php#sam'>Монопараметрический фотометр</a>";
	
	$id = strip_tags($_GET["id"]);
		switch($id)
		{
	        case "ph":
	        	$content = $rootpath . "inc/ph.inc.php";
	        	$header = "pH";
	        	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;
	        	break;
	        
	        case "aluminium":
	        	$content = $rootpath . "inc/aluminium.inc.php";
	        	$header = "Алюминий";
	        	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;
	        	break;

	        case "filming_amine":
	        	$content = $rootpath . "inc/filming_amine.inc.php";
	        	$header = "Алифатические амины";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;
	        	break;

	        case "ammonia":
	        	$content = $rootpath . "inc/ammonia.inc.php";
	        	$header = "Аммиак";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;
	        	break;

	        case "bromine":
	        	$content = $rootpath . "inc/bromine.inc.php";
	        	$header = "Бром";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;
	        	break;
	
	        case "qac":
	        	$content = $rootpath . "inc/qac.inc.php";
	        	$header = "Аммония четвертичные соединения";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "hydrogen":
	        	$content = $rootpath . "inc/hydrogen.inc.php";
	        	$header = "Водорода перекись";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;
	        
	        case "hydrazine":
	        	$content = $rootpath . "inc/hydrazine.inc.php";
	        	$header = "Гидразин";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

			case "glycol":
	        	$content = $rootpath . "inc/glycol.inc.php";
	        	$header = "Гликоль";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "deha":
	        	$content = $rootpath . "inc/deha.inc.php";
	        	$header = "ДЭГА";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "iron":
	        	$content = $rootpath . "inc/iron.inc.php";
	        	$header = "Железо";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "hardness":
	        	$content = $rootpath . "inc/hardness.inc.php";
	        	$header = "Жесткость";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "carbohydrazide":
	        	$content = $rootpath . "inc/carbohydrazide.inc.php";
	        	$header = "Карбогидразид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "oxygen":
	        	$content = $rootpath . "inc/oxygen.inc.php";
	        	$header = "Кислород растворенный";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "silica":
	        	$content = $rootpath . "inc/silica.inc.php";
	        	$header = "Кремния диоксид (кремнезем)";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "manganese":
	        	$content = $rootpath . "inc/manganese.inc.php";
	        	$header = "Марганец";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "copper":
	        	$content = $rootpath . "inc/copper.inc.php";
	        	$header = "Медь растворенная";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "mbt":
	        	$content = $rootpath . "inc/mbt.inc.php";
	        	$header = "Меркаптобензатиазол";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "tds":
	        	$content = $rootpath . "inc/tds.inc.php";
	        	$header = "Минерализация общая";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "molybdate":
	        	$content = $rootpath . "inc/molybdate.inc.php";
	        	$header = "Молибдат";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "detergents":
	        	$content = $rootpath . "inc/detergents.inc.php";
	        	$header = "Моющие средства";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "turbidity":
	        	$content = $rootpath . "inc/turbidity.inc.php";
	        	$header = "Мутность";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "nitrate":
	        	$content = $rootpath . "inc/nitrate.inc.php";
	        	$header = "Нитраты";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "nitrite":
	        	$content = $rootpath . "inc/nitrite.inc.php";
	        	$header = "Нитриты";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "ozone":
	        	$content = $rootpath . "inc/ozone.inc.php";
	        	$header = "Озон";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "peracetic":
	        	$content = $rootpath . "inc/peracetic.inc.php";
	        	$header = "Перуксусная кислота";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "permanganate":
	        	$content = $rootpath . "inc/permanganate.inc.php";
	        	$header = "Перманганат";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "persulfate":
	        	$content = $rootpath . "inc/persulfate.inc.php";
	        	$header = "Персульфат";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "sulfite":
	        	$content = $rootpath . "inc/sulfite.inc.php";
	        	$header = "Сульфиты";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "thiosulfate":
	        	$content = $rootpath . "inc/thiosulfate.inc.php";
	        	$header = "Тиосульфат";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "tph":
	        	$content = $rootpath . "inc/tph.inc.php";
	        	$header = "Углеводороды общие нефтяные в почве";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "carbon":
	        	$content = $rootpath . "inc/carbon.inc.php";
	        	$header = "Углерода диоксид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "phenols":
	        	$content = $rootpath . "inc/phenols.inc.php";
	        	$header = "Фенолы";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "formaldehyde":
	        	$content = $rootpath . "inc/formaldehyde.inc.php";
	        	$header = "Формальдегид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "ortophosphate":
	        	$content = $rootpath . "inc/ortophosphate.inc.php";
	        	$header = "Фосфаты орто";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "totalphosphate":
	        	$content = $rootpath . "inc/totalphosphate.inc.php";
	        	$header = "Фосфаты общие";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "chlorine":
	        	$content = $rootpath . "inc/chlorine.inc.php";
	        	$header = "Хлор";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "chlorinedioxide":
	        	$content = $rootpath . "inc/chlorinedioxide.inc.php";
	        	$header = "Хлора диоксид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "chloride":
	        	$content = $rootpath . "inc/chloride.inc.php";
	        	$header = "Хлорид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "cod":
	        	$content = $rootpath . "inc/cod.inc.php";
	        	$header = "ХПК";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "chromate":
	        	$content = $rootpath . "inc/chromate.inc.php";
	        	$header = "Хромат шестивалентный";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "cyanide":
	        	$content = $rootpath . "inc/cyanide.inc.php";
	        	$header = "Цианид";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "zinc":
	        	$content = $rootpath . "inc/zinc.inc.php";
	        	$header = "Цинк";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "alcalinity":
	        	$content = $rootpath . "inc/alcalinity.inc.php";
	        	$header = "Щелочность";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;

	        case "conductivity":
	        	$content = $rootpath . "inc/conductivity.inc.php";
	        	$header = "Электропроводность";
	         	$pageTitle = "Экспресс-анализ воды CHEMetrics / Определяемые вещества / " . $header;	        	
	        	break;
      


	        default:
	        	$content = $rootpath . "inc/analytes_table.inc.php";
	        	$header = "Определяемые вещества";
	        	$pageTitle = "Экспресс-анализ воды CHEMetrics / " . $header;
	        	
      	}

?>