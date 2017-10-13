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
    $to = 'pavlova@blackstonekeeping.com';
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
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Азбука фермы</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
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
      <ul class="advantages">
        <li class="advantages-price">От 30 000 руб. в месяц за торговое место под ключ</li>
        <li class="advantages-search">Поиск продавца и помощь в его обучении</li>
        <li class="advantages-place">Близко от центра Москвы</li>
        <li class="advantages-identity">Фирменный стиль: фартуки, майки, бейсболки</li>
        <li class="advantages-delay">Отсрочка платежа в первый месяц</li>
        <li class="advantages-storage">Место для хранения продукции</li>
        <li class="advantages-ads">Мощная рекламная поддержка</li>
        <li class="advantages-design">Продуманный архитектурный дизайн</li>
        <li class="advantages-ready">Торговое пространство «под ключ»</li>
      </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>