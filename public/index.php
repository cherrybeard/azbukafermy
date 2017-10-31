<?
	if (count($_POST)!=0) {
		$msg = 'Заявка с заглушки Азбука Фермы #1<br>';
		if (isset($_POST['phone'])) {
			$msg .= 'Телефон: '.$_POST['phone'].'<br>';
		}
		if (isset($_POST['email'])) {
			$msg .= 'E-mail: '.$_POST['email'].'<br>';
		}
		if (isset($_POST['message'])) {
			$msg .= 'Хочу: '.$_POST['message'].'<br>';
		}
		$title = 'Заявка с заглушки Азбука Фермы #1';
		if (!empty($_POST['msg'])) $msg .= '<br>'.$_POST['msg'];
    $to = 'pavlova@blackstonekeeping.com,barmin@blackstonekeeping.com';
		$header = 'MIME-Version: 1.0' . "\n" .
			'Content-type: text/html; charset=UTF-8'. "\n" .
			"From: AzbukaFermy <hi@azbukafermy.ru>\n";
    if (@mail($to, $title, $msg, $header))
    	die('1');
	}
	if (count($_POST)!=0) die('0');
?>
<!DOCTYPE html>
<html lang="ru">
  <head><!— Google Tag Manager —>
<script😠function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PH79FG6');</script>
<!— End Google Tag Manager —>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Азбука фермы</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="page-index"><!— Google Tag Manager (noscript) —>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH79FG6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!— End Google Tag Manager (noscript) —>

    <div class="section-side">
      <div class="about">
        <h1 class="logo">Азбука фермы</h1>
        <address class="address">
          <p>ТРЦ «Золотой Вавилон»</p>
          <p>Москва, Проспект Мира, 211, к. 2, этаж 1</p>
          <p>+7 963 680 4997</p>
        </address>
      </div>
      <div class="countdown"><span>Осталось</span> <strong id="data-countdown" countdown="80"></strong> <span>торговых места</span>
      </div>
    </div>
    <div class="section-main">
      <div class="promo">
        <h2>Забронируйте лучшее место на новом рынке</h2>
        <p>Бонус: арендные каникулы и реклама ваших продуктов в пресc-релизе.</p>
        <form action="" method="post" data-form>
          <div class="text-input">
            <input type="text" placeholder="Телефон" name="phone">
          </div>
          <button type="submit" class="button-primary">Забронировать</button>
        </form>
        <p class="small">Мы перезвоним и расскажем подробнее</p>
      </div>
      <div class="advantages-block">
        <h2>Преимущества</h2>
        <ul class="advantages">
          <li class="advantages-price">От 30 000 руб. в месяц за торговое место</li>
          <li class="advantages-search">Поиск продавца и помощь в его обучении</li>
          <li class="advantages-place">Близко от центра Москвы</li>
          <li class="advantages-identity">Фирменный стиль: фартуки, майки, бейсболки</li>
          <li class="advantages-delay">Отсрочка платежа в первый месяц</li>
          <li class="advantages-storage">Место для хранения продукции</li>
          <li class="advantages-ads">Сильная рекламная поддержка</li>
          <li class="advantages-design">Продуманный архитектурный дизайн</li>
          <li class="advantages-ready">Торговое пространство «под ключ»</li>
        </ul>
      </div>
      <div class="details">
        <h2>О компании</h2>
        <div class="photos"><a href="img/sections/main/photos/originals/01.jpg" target="_blank"><img src="img/sections/main/photos/preview/01.jpg"></a><a href="img/sections/main/photos/originals/02.jpg" target="_blank"><img src="img/sections/main/photos/preview/02.jpg"></a><a href="img/sections/main/photos/originals/03.jpg" target="_blank"><img src="img/sections/main/photos/preview/03.jpg"></a>
        </div>
        <div class="investors"><a href="img/sections/main/plan.pdf" target="_blank" class="investors-plan">Скачать план проекта</a>
          <p>Инвестор проекта и управляющая компания: <a href="http://www.blackstonekeeping.com/">BlackStone Keeping Company</a>
          </p>
          <p>Проектировщик проекта: <a href="http://www.zemskiygroup.com/">Zemskiy Group</a>
          </p>
          <p class="privacy-policy-link"><a href="privacy-policy.html">Политика конфиденциальности</a></p>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>