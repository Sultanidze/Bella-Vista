<!doctype html>

<html lang="ru">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bella Vista Новость</title>
		<link rel="stylesheet" href="../css/base.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
        <meta name="twitter:title" content="Заголовок в Твітері">
        <meta name="twitter:description" content="Опис того, що буде в твітері">
        <meta name="twitter:image:src" content="../img/ny2017.jpg">

        <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
        <meta property="og:site_name" content="Bella Vista">
        <meta property="og:title" content="My title in Head fb, google+">
        <meta property="og:description" content="My description fb, google+">
        <meta property="og:image" content="../img/ny2017.jpg">
	</head>
	<body>
		<div class="b-main">
			<header class="b-main__header b-header">
                <div class="g-wrap">
                    <nav class="b-menu__nav_mobile">
                        <div class="b-menu__close_mobile">
                            <img src="../img/close-icon.png" alt="X">
                        </div>         
                        <ul class="b-menu_mobile">
                            <li><a href="#" class="b-menu__link_mobile">Главная</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Номера</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Цены на отдых</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Услуги</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Бронирование</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Сезон</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Отдых в Карпатах</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Новости</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Галерея</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Отзывы</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="b-header b-header_left">
                        <button type="button" class="b-menuBtn b-header__block_left visible-xs-block">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="b-icon-bar"></span>
                            <span class="b-icon-bar"></span>
                            <span class="b-icon-bar"></span>
                        </button>
                        <div class="b-header__block b-header__block_left b-block b-block_address hidden-xs">
			                <aside class="b-block__icon">
			                    <div class="icons-sprite icons-sprite__place-icon"></div>
			                </aside>
			                <div class="b-block__text">
			                    <span>Буковель,</span><br>
			                    <span>пос.Поляница</span><br>
			                    <span>ул. Стаища, 274</span>
			                </div>
			            </div>
			            <div class="b-header__block b-header__block_left b-block b-block_phones">
			                <aside class="b-block__icon hidden-xs">
			                     <div class="icons-sprite icons-sprite__phone-icon"></div>
			                </aside>
			                <div class="b-block__text">
			                    <span>(097) 098 90 80</span><br>
			                    <span>(066) 881 98 89</span>
			                </div>
			            </div>
                        <div class="b-header__menu g-clearfix">
                            <ul class="b-menu hidden-xs">
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Главная</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Номера</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Цены на отдых</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Услуги</a></li>
                            </ul>
                            <div class="b-header__dividerXS visible-xs-inline-block"></div>
                        </div>
                    </div>
			        <div class="b-header b-header_center b-logo">
			            <a href="" class="b-logo__link">
			                <img src="../img/logo.png" alt="Bella Vista logo" class="b-logo__img img-responsive">
			            </a>
			        </div>
			        <div class="b-header b-header_right">
                        <div class="b-header__block_right  b-block  visible-xs-inline-block">
                            <button class="b-callback_minified">
                               <span class="b-callback__icon_minified"></span>
                            </button>
                        </div>
			            <div class="b-header__block b-header__block_right b-block b-block_langs">
			                <a href="#" class="b-langs__link">UA</a>
			                <a href="#" class="b-langs__link b-langs__link_active">RU</a>
			                <a href="#" class="b-langs__link">ENG</a>
			            </div>
			            <div class="b-header__block b-header__block_right b-block b-block__callback hidden-xs">
                            <p>Хотите что бы мы Вам <br> перезвонили?</p>
                            <button>Заказать звонок</button>
							<a href="#callbackForm" class="js-modal_callback hidden"></a>	<!-- приховане посилання, клік по якому викликає модалку колбека -->
			            </div>
                        <div class="b-header__menu g-clearfix">
                            <ul class="b-menu hidden-xs">
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Бронирование</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Сезон</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Отдых в Карпатах</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Контакты</a></li>
                            </ul>
                            <div class="b-header__dividerXS visible-xs-inline-block"></div>
                        </div>
                    </div>
			     </div>
			</header>
			
            <section class="b-main__bcrumbs b-section">
                <div class="g-wrap">
                    <div class="container-fluid">
                        <ol class="b-crumb">
                            <li class="b-crumb__item"><a href="index.html" class="b-crumb__link">Главная</a></li>
                            <li class="b-crumb__item"><a href="index.html" class="b-crumb__link">Новости</a></li>
                            <li class="b-crumb__item b-crumb__item_active"><span>Новогодняя ночь 2017 в вилла Bellavista</span></li>
                        </ol>
                    </div>
                </div>
            </section>
			<section class="b-main__section b-section b-section_newsOne">
                <div class="b-section__heading b-section__heading_first">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                        <h1 class="b-section__header">Новогодняя ночь 2017 в вилла Bellavista</h1>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap">
                    <div class="container-fluid">
                        <article class="b-mainApartments__item b-newYear">
                            <div class="b-apartmentItem__section_overwiev">
                                <img src="../img/ny2017.jpg" alt="салют Буковель" class="b-newYear__cover g-img_responsive">
                                <span class="b-newsOne__date">11.09.2016</span>
                                <p class="b-response__text">Как Новый год встретишь так его и проведешь! Если ты хочешь встретить Новый 2017 незабываемо - тогда приезжай в "Буковель"! Невероятные пейзажи, уютные заведения, звездные исполнители - все для по-настоящему драйвового заряда на целый год!<br><br>Эпицентром праздничного действа станет крупнейший развлекательный комплекс «Буковеля» - «Бука». Выступление популярних звезд, щедрое застолье от семи ресторанов «Cartel» и шоу-программа от «Квартал-концерт», праздничный фейерверк станут лучшим началом нового года.<br><br>Праздничное настроение гостям развлекательного центра «Бука» подарят:<br><br>Талантливая группа «НеАнгелы» - волшебные и неизменные Виктория и Слава. Неповторимые чувствительные голоса девушек узнает кто-либо из укаинцев. Станьте свидетелем невероятного выступления, наслаждайтесь любимими песнями группы и ощутите на себе енергетику глубокого контральто.Ведущие вечера «Братья Шумахеры» - двое очень талантливых людей – Сергей Цвиловский и Юрий Великий. Артисты очень молоды, но уже гарячо любимы публикой. Яркий творческий дуэт «Братья Шумахеры – герои самих рейтингових юмористических телепроектов Украины. Этот дуэт уже покорил зрителей телешоу «Бойцовский клуб», «Киев вечерний» и, конечно же, «Вечерний квартал»! Их юмористические миниатюры и блестящие пародии не оставят вас равнодушными.В течении всей ночи для вас будет играть один из  самих известных кавер-бэндов Украины.Для маленьких гостей мы подготовили новогоднюю шоу-программу и подарки!<br><br>Как Новый год встретишь так его и проведешь! Если ты хочешь встретить Новый 2017 незабываемо - тогда приезжай в "Буковель"! Невероятные пейзажи, уютные заведения, звездные исполнители - все для по-настоящему драйвового заряда на целый год!<br><br>Эпицентром праздничного действа станет крупнейший развлекательный комплекс «Буковеля» - «Бука». Выступление популярних звезд, щедрое застолье от семи ресторанов «Cartel» и шоу-программа от «Квартал-концерт», праздничный фейерверк станут лучшим началом нового года.<br><br>Праздничное настроение гостям развлекательного центра «Бука» подарят:<br><br>Талантливая группа «НеАнгелы» - волшебные и неизменные Виктория и Слава. Неповторимые чувствительные голоса девушек узнает кто-либо из укаинцев. Станьте свидетелем невероятного выступления, наслаждайтесь любимими песнями группы и ощутите на себе енергетику глубокого контральто.<br><br>Ведущие вечера «Братья Шумахеры» - двое очень талантливых людей – Сергей Цвиловский и Юрий Великий. Артисты очень молоды, но уже гарячо любимы публикой. Яркий творческий дуэт «Братья Шумахеры – герои самих рейтингових юмористических телепроектов Украины. Этот дуэт уже покорил зрителей телешоу «Бойцовский клуб», «Киев вечерний» и, конечно же, «Вечерний квартал»! Их юмористические миниатюры и блестящие пародии не оставят вас равнодушными.В течении всей ночи для вас будет играть один из  самих известных кавер-бэндов Украины.Для маленьких гостей мы подготовили новогоднюю шоу-программу и подарки!
                                </p>
                                <div class="b-social_ny">
                                    Поделится новостью через социальные сети:
                                    <span class="b-ny__share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" target="_blank" title="Поделиться на Facebook" class="b-ny__link_soc"><span class=""><img src="../img/facebook-icon.png" alt=""></span></a>
                                        <a href="https://plus.google.com/share?url=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" target="_blank" title="Поделиться на Google+" class="b-ny__link_soc"><span class=""><img src="../img/google-plus-icon.png" alt=""></span></a>
                                        <a href="https://twitter.com/intent/tweet?source=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&text=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" title="Твитнуть" target="_blank" class="b-ny__link_soc" ><span class=""><img src="../img/twitter-icon.png" alt=""></span></a>
                                        <a href="https://vk.com/share.php?url=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" target="_blank" title="Поделиться ВКонтакте" class="b-ny__link_soc"><span class=""><img src="../img/vk-icon.png" alt=""></span></a>
                                    </span>
                                </div>
                                
                            </div>
                        </article>
                    </div>
                </div>
			</section>
            
            <section class="b-main__section b-section b-section_seo b-seo">
                <div class="b-seo__header">
                    Сео текст
                </div>
                <div class="g-wrap">
                    <div class="container-fluid">
                       <p class="b-seo__text">
                        Выбирая жилье в Буковеле, обратите внимание на предложения «Villa Bella Vita». Номера в нашем отельном комплексе удачно совмещают удобность и доступность. К Вашим услугам несколько видов: стандарт (однокомнатный номер, рассчитан на 1 или 2 человек), полулюкс (однокомнатный, рассчитан на проживание 2 или 3 человек) и люкс (двухкомнатный номер площадью до 30 кв.м. и рассчитан на 2 -4 человек).<br><br>Стандарт по желанию клиента может быть разным. В нем можно разместить одну двуспальную кровать или две односпальных. Также он оснащен спутниковым телевидением, деревянным шкафом, современной душевой кабиной, умывальником. Для каждого постояльца предназначены несколько полотенец. Есть балкон с живописным пейзажем.
                        </p>
                    </div>
                </div>
            </section>
			<footer class="b-main__footer b-footer">
                <div class="g-wrap container-fluid">
                    <div class="row">
                        <nav class="b-footer__nav col-xs-12 col-sm-5 col-md-5">
                            <div class="b-nav__list">
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Главная</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Номера</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Галерея</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Услуги</a></li>
                                </ul>
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Цены на отдых</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Новости</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Отдых в Карпатах</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Контакты</a></li>
                                </ul>
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Отзывы</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Галерея</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Сезон</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Бронирование</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="b-footer__contacts col-xs-12 col-sm-5 col-md-5">
                            <div class="b-contacts_footer">
                                <div class="b-contact b-contact__address">
                                    <span>Наши контакты:</span><br>
                                    <span>Буковель,</span><br>
                                    <span>пос.Поляница</span><br>
                                    <span>ул. Стаища, 274</span>
                                </div>
                                <div class="b-contact">
                                    <div class="b-phones_preText">Тел:</div>
                                    <div class="b-contact__phones b-phones">
                                        <span>+38 097 098 90 80</span><br>
                                        <span>+38 066 881 98 89</span><br>
                                        <span>+38 067 310 67 76</span>
                                    </div>
                                    <div class="b-contact__email">
                                        <span>E-mail:&nbsp;</span>
                                        <span class="b-email">villabella.vista@com.ua</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-footer__social b-social col-xs-12 col-sm-2 col-md-2">
                            <div class="b-social__logo logos-sprite logos-sprite__logoFooter"></div>
                            <div class="b-social__networks">
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socFacebook"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socGoogle"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socTwitter"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socVimeo"></div></a>
                            </div>
                        </div>
                        <div class="b-developers g-clearfix col-xs-12">
                            <span>Разработано в&nbsp;</span>
                            <a href="#" class="b-developers__logo logos-sprite logos-sprite__seo-studio"></a>
                        </div>
                    </div>
                </div>
			</footer>
		</div>
		
		<script src="../js/jquery-3.1.1.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/jquery.selectric.js"></script>
		<script src="../js/slick.min.js"></script>
		<script src="../fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
		<script src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="../js/main.js"></script>
	</body>
</html>