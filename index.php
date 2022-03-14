<?php
	$FacebookPixel = $_GET['p'];
	$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	$fd = fopen("../logs.txt", 'a+');
	$date = date('d.m.Y, H:i:s');
	$arr = $date.'|'.$_SERVER['HTTP_CF_IPCOUNTRY'].'|'.$http_lang.'|'.$_SERVER['HTTP_REFERER'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$Ip."|land \r\n";
	fwrite($fd, $arr);
	fclose($fd);
	$gp = $_GET['gp'];
  $hs = $_GET['hs'];
  $page_lang = "ru";
	$QUERY=$_SERVER["QUERY_STRING"];
?>
<!DOCTYPE html>
<html lang="<?php echo $page_lang; ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" type="image/x-icon" href="./img/fav-16_16.ico" sizes="16x16">
  <link rel="icon" type="image/x-icon" href="./img/fav-32_32.ico" sizes="32x32">
  <link rel="icon" type="image/x-icon" href="./img/fav-96_96.ico" sizes="96x96">
  <link rel="icon" type="image/x-icon" href="./img/fav-120_120.ico" sizes="120x120">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://usahomerelief.net/adict/intlTelInput.css" />
  <link rel="stylesheet" href="https://usahomerelief.net/adict/adict.css" />

  <title>KO-FISCH</title>
<link href="assets/css/styles.3c0e9d1f25188e3dfb80.css" rel="stylesheet"></head>

<body class="page">
  <section class="header">
  <div class="container">

    <div class="header__top">
      <svg class="header__logo">
        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-logo"></use>
      </svg>

      <ul class="header__top-list">
        <li class="header__top-list-item">Главная</li>
        <li class="header__top-list-item scroll-btn-two">Направления</li>
        <li class="header__top-list-item scroll-btn-three">Обучение</li>
        <li class="header__top-list-item scroll-btn-four">Цены</li>
        <li class="header__top-list-item scroll-btn-five">Вопросы</li>
      </ul>

      <button type="button" class="header__btn scroll-btn">НАЧАТЬ</button>
    </div>

    <h1 class="header__title"><span class="header__title--part">Финансовая грамотность</span> — залог
      не только сохранения средств, но и их преумножения</h1>
    <p class="header__text">Мы обучим вас финансовой грамотности, а ПОТОМ уже трейдингу!</p>

    <ul class="header__list">
      <li class="header__list-item part-size">
        <p class="header__list-item-title"><span class="header__list-item-part part-size">7</span> лет</p>
        <p class="header__list-item-text">на рынке</p>
      </li>
      <li class="header__list-item">
        <p class="header__list-item-title">более <span class="header__list-item-part">9.000</span></p>
        <p class="header__list-item-text">За это время обучено человек</p>
      </li>
      <li class="header__list-item">
        <p class="header__list-item-title"><span class="header__list-item-part">82%</span></p>
        <p class="header__list-item-text">наших клиентов остались
          довольны</p>
      </li>
      <li class="header__list-item">
        <p class="header__list-item-title"><span class="header__list-item-part">20.000+</span></p>
        <p class="header__list-item-text">Разработано персональных торговых стратегий</p>
      </li>
    </ul>

    <form id="userPhoneForm" class="form" method="POST">
      <ul class="form__list">
        <li class="form__list-item">
          <div class="form__list-item-num">1</div>
          <p class="form__list-item-text">Регистрация</p>
        </li>
        <li class="form__list-item">
          <div class="form__list-item-num">2</div>
          <p class="form__list-item-text">Консультация</p>
        </li>
        <li class="form__list-item">
          <div class="form__list-item-num">3</div>
          <p class="form__list-item-text">Обучение</p>
        </li>
        <li class="form__list-item">
          <div class="form__list-item-num">4</div>
          <p class="form__list-item-text">PROFIT</p>
        </li>
      </ul>

      <div class="input_wrapper">
        <div>
          <input name="f_name" placeholder="Ваше имя" class="form__input" id="form-name">
        </div>
        <div>
          <input name="l_name" placeholder="Ваша фамилия">
        </div>
        <div>
          <input type="email" name="email" placeholder="Ваш e-mail" class="form__input" id="form-email">
        </div>
        <div>
          <style>
            .iti__flag-container {
              z-index: 50;
            }

            .iti-mobile .iti__country-list {
              width: 85%;
            }
          </style>
          <input type="tel" name="phone" placeholder="Ваш телефон" autocomplete="off" required>
          <input type="hidden" name="phone2" class="phone2" autocomplete="off" required>
          
          <input type="hidden" name="pixel_id" value="<?php echo $FacebookPixel?>">
          <input type="hidden" name="page_lang" value="<?php echo $page_lang?>">
          <input type="hidden" name="query" value="<?php echo $QUERY?>">
          <input type="hidden" name="gp_id" value="<?php echo $gp?>">
          <input type="hidden" name="hs_id" value="<?php echo $hs?>">
          
          <input type="hidden" name="landing" value="KO-FISCH">
          
          <input type="hidden" name="campaign" value="SG">
          
        </div>

        <button class="form__btn" type="submit">
          ОСТАВИТЬ ЗАЯВКУ
        </button>
      </div>
    </form>

  </div>
</section>
    <section class="first">
  <div class="container">
    <h2 class="first__title">Наши направления</h2>

    <ul class="first__list">
      <li class="first__list-item">
        <svg class="first__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-fin"></use>
        </svg>
        <div class="first__list-item-box">
          <h4 class="first__list-item-title">Финансовая
            грамотность</h4>
          <p class="first__list-item-text">Идёт бонусом с любым пакетом обучения. Включает основную информацию об
            управлении финансами и структуре мировых рынков</p>
        </div>
      </li>
      <li class="first__list-item">
        <svg class="first__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-fond"></use>
        </svg>
        <div class="first__list-item-box">
          <h4 class="first__list-item-title">Фондовый рынок/CFD</h4>
          <p class="first__list-item-text">Обучаем техническому, фундаментальному, а также новостному анализу акций,
            который применим как к Европейскому и
            Американскому, так и к российскому рынку</p>
        </div>
      </li>
      <li class="first__list-item">
        <svg class="first__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-valut"></use>
        </svg>
        <div class="first__list-item-box">
          <h4 class="first__list-item-title">Валютный рынок</h4>
          <p class="first__list-item-text">В этом направлении вы узнаете о валютных парах и том, что влияет на их
            стоимость
            и корреляцию по отношению друг к другу
            (включает технический и новостной анализ)</p>
        </div>
      </li>
      <li class="first__list-item">
        <svg class="first__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-cripto"></use>
        </svg>
        <div class="first__list-item-box">
          <h4 class="first__list-item-title">Криптовалюта</h4>
          <p class="first__list-item-text">Полный курс о том, что такое криптовалюта, её видах и событиях, что влияют на
            ее
            стоимость. Основной движущей силой в
            криптовалюте являются громкие события</p>
        </div>
      </li>
    </ul>
  </div>
</section>
      <section class="second">
  <div class="container">
    <h2 class="second__title">Как проходит обучение</h2>

    <ul class="second__list">
      <li class="second__list-item">
        <img src="assets/img/95655c6d725b8b08f371.png" alt="" class="second__list-item-box">
        <img src="assets/img/83fb7ad744a613ed94ac.png" alt="" class="second__list-item-box-desk">
        <svg class="second__list-item-img desk-marg">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-consult"></use>
        </svg>
      </li>

      <li class="second__list-item">
        <svg class="second__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-theory"></use>
        </svg>
        <img src="assets/img/a70d86ba13d20cd21f53.png" alt="" class="second__list-item-box">
        <img src="assets/img/3a8cc65d29ae4829a2db.png" alt="" class="second__list-item-box-desk">
      </li>

      <li class="second__list-item">
        <img src="assets/img/9c24563f5061898cbeac.png" alt="" class="second__list-item-box">
        <img src="assets/img/408fe3426f0feb9014d7.png" alt="" class="second__list-item-box-desk">
        <svg class="second__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-practice"></use>
        </svg>
      </li>

      <li class="second__list-item">
        <svg class="second__list-item-img">
          <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-done"></use>
        </svg>
        <img src="assets/img/5287c1b3ce51b5b146b9.png" alt="" class="second__list-item-box">
        <img src="assets/img/418e1ac7c0e6e2a37e6f.png" alt="" class="second__list-item-box-desk">
      </li>
    </ul>

    <div class="second__notice">На протяжении 3-х месяцев после завершения курса, вы можете обратиться к нам
      за бесплатной консультацией и разбором ваших сделок</div>
  </div>
</section>
        <section class="third">
    <div class="container">
        <h2 class="third__title">Выберите <br class="br"><span class="third__title--part">свой пакет</span><br> обучения
        </h2>

        <ul class="third__list">

            <li class="third__list-item">
                <h4 class="third__list-item-title">Базовый</h4>
                <p class="third__list-item-price">$198 / 1 месяц</p>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">База с 5 блоками по 10 уроков о финансовой грамотности
                        (оффлайн)</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Заключительный экзамен
                        по каждому блоку</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">5 обращений к куратору</p>
                </div>
                <button type="button" class="third__list-item-btn scroll-btn">НАЧАТЬ</button>
            </li>

            <li class="third__list-item">
                <h4 class="third__list-item-title">Стандарт</h4>
                <p class="third__list-item-price">$499 / 3 месяца</p>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">База с 5 блоками по 10 уроков о финансовой грамотности
                        (оффлайн)</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Заключительный экзамен
                        по каждому блоку</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Доступ к базе по выбранному финансовому направлению.</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Заключительный экзамен после прохождения каждого блока видео
                        по выбранному направлению</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">2 групповых занятие по 1 выбранному направлению в неделю</p>
                </div>
                <button type="button" class="third__list-item-btn scroll-btn">НАЧАТЬ</button>
            </li>

            <li class="third__list-item">
                <h4 class="third__list-item-title">Премиум</h4>
                <p class="third__list-item-price">$1,797 / в год</p>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">База с 5 блоками по 10 уроков о финансовой грамотности
                        (оффлайн)</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Заключительный экзамен
                        по каждому блоку</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Доступ к базе по выбранному финансовому направлению.</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Заключительный экзамен после прохождения каждого блока видео
                        по выбранному направлению</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Доступ к групповым занятиям по всем существующим
                        направлениям.</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">2 индивидуальных занятия в неделю по любому из существующих
                        направлений.</p>
                </div>
                <div class="third__list-item-check">
                    <svg class="third__list-item-check-img">
                        <use href="assets/img/48d64f8a5d427d8d837a.svg#icon-checkmark"></use>
                    </svg>
                    <p class="third__list-item-check-text">Безлимитные обращения к куратору</p>
                </div>
                <button type="button" class="third__list-item-btn scroll-btn">НАЧАТЬ</button>
            </li>

        </ul>
    </div>
</section>
          <section class="fourth">
    <div class="container">
        <h2 class="fourth__title">Ответы на самые частые вопросы</h2>

        <ul class="fourth__list">

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">1. Что мне даст финансовая грамотность?</p>
                <p class="fourth__list-item-ans">Это набор <b>базовых знаний</b>, необходимый для понимания рынка в
                    целом. Без
                    них <b>вы не сможете понять</b> природу некоторых
                    процессов, которые постоянно происходят на рынке.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">2. Вы предоставляете только демо-счета или также настоящие?</p>
                <p class="fourth__list-item-ans">Мы предоставляем <b>только демо-счета</b>, так как не сотрудничаем
                    с брокерами. Однако, если потребуется <b>мы можем рекомендовать вам компанию</b>
                    в индивидуальном порядке.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">3. Вы гарантируете, что
                    я начну зарабатывать после вашего курса?</p>
                <p class="fourth__list-item-ans"><b>НЕТ</b>. Наша задача научить вас, а то примените ли вы эти знания
                    зависит только от вас.</p>
            </li>

            <li class="fourth__list-item">
                <p class="fourth__list-item-quest">4. Сколько я смогу зарабатывать после курса?</p>
                <p class="fourth__list-item-ans">Это зависит от <b>вашего капитала</b>, рисков и выбранной стратегии.
                </p>
            </li>

        </ul>

        <button type="button" class="fourth__btn scroll-btn">ОСТАВИТЬ ЗАЯВКУ</button>
    </div>
</section>
            <!--  -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://usahomerelief.net/adict/intlTelInput.js"></script>
            <script src="https://usahomerelief.net/adict/adict.js"></script>
            <script src="https://usahomerelief.net/adict/utils.js"></script>
            <!--add id="video" to the video tag before linking next script -->
            <script src="https://usahomerelief.net/video/video.js"></script>

            <script src="./assets/js/bootstrap.bundle.min.js"></script>

            <script>
              $(".scroll-btn").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".form").offset().top,
                    },
                    800
                  );
                });
              });

              $(".scroll-btn-two").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".first").offset().top,
                    },
                    800
                  );
                });
              });

              $(".scroll-btn-three").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".second").offset().top,
                    },
                    800
                  );
                });
              });

              $(".scroll-btn-four").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".third").offset().top,
                    },
                    800
                  );
                });
              });

              $(".scroll-btn-five").each(function () {
                $(this).click((e) => {
                  e.preventDefault();
                  $("html").animate(
                    {
                      scrollTop: $(".fourth").offset().top,
                    },
                    800
                  );
                });
              });
            </script>

<script defer src="assets/js/index.3c0e9d1f25188e3dfb80.js"></script></body>

</html>