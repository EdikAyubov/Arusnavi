<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->

<head>
	<!-- Заголовок страницы в браузере -->
	<title>ArusNavi</title>
	<!-- Подключаем CSS -->
	<link rel="stylesheet" href="css/style.min.css">
	<!-- Добавляем иконку к сайту -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Кодировка страницы -->
	<meta charset="UTF-8">
	<!-- Адаптивный метатег -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<!-- Отображаемое тело страницы -->

<body>
	<div class="wrapper">
		<!-- Добавляем хедер -->
		<header id="header" class="header">
	<div class="container">
		<div class="header__row">
			<div class="header__logo">
				<a href="index.html"><img src="img/logo.svg" alt="ArusNavi"></a>
			</div>
			<div class="header__logo-color">
				<a href="index.html"><img src="img/logo-color.svg" alt="ArusNavi"></a>
			</div>
			<ul class="header__menu">
				<li>
					<a href="#main" class="header__link" onclick="slowScroll('#main')">Главная</a>
					<div class="header__line"></div>
				</li>
				<li>
					<a href="#advantage" class="header__link" onclick="slowScroll('#advantage')">Преимущества</a>
					<div class=" header__line">
					</div>
				</li>
				<li>
					<a href="products.html" class="header__link">Продукты</a>
					<div class=" header__line">
					</div>
				</li>
				<li>
					<a href="gelios-page.html" class="header__link" onclick="slowScroll('#gelios')">Gelios</a>
					<div class=" header__line"></div>
				</li>
				<li>
					<a href="http://8888.arusnavi.ru" target="_blank" class="header__link">Материалы</a>
					<div class=" header__line"></div>
				</li>
				<li>
					<a href="#contacts" class="header__link" onclick="slowScroll('#contacts')">Контакты</a>
					<div class=" header__line"></div>
				</li>
				<li>
					<a href="https://t.me/ArusnaviSupport_bot" target="_blank" class="header__link button-white">
						<p>Техподдержка</p>
					</a>
				</li>
			</ul>
			<div class="header__bg-burger">
				<div class="header__burger">
					<span></span>
				</div>
			</div>
		</div>
	</div>
</header>
		<!-- Главный блок -->
		<div class="main" id="main">
			<div class="container">
				<div class="main__row">
					<div class="main__info no-anim-again anim-items">
						<p class="main__text">Мы проектируем и продаем</p>
						<h1 class="main__label">НАВИГАЦИОННОЕ ОБОРУДОВАНИЕ</h1>
						<p class="main__information">Сегодня мы поставляем свое оборудование по всей территории РФ, в страны
							СНГ и Евросоюза, Ближнего и Дальнего Востока, в страны Африки.</p>
						<div class="main__buttons">
							<a href="#advantage" onclick="slowScroll('#advantage')"
								class="main__button-second button-stroke-white">Подробнее</a>
							<a href="#request-popup" class="main__button-boss button-white popup-link">Приобрести</a>
						</div>
					</div>
					<div class="main__image">
						<img src="img/main-image.png" alt="Изображение навигационных трекеров A-Serias и Integral 4">
					</div>
				</div>
			</div>
		</div>
		<!-- Блок Наши преимущества -->
		<div class="advantage" id="advantage">
			<div class="container">
				<h2 class="advantage__title title">Наши преимущества</h2>
				<div class="advantage__row">
					<div class="advantage__image">
						<img src="img/advantage-image.png" alt="Статуэктка с символом ArusNavi">
					</div>
					<div class="advantage__items">
						<div class="advantage__item item no-anim-again anim-items">
							<div class="item__icon">
								<img src="img/advantage/price.svg" alt="">
							</div>
							<h3 class="item__title">Минимальная цена</h3>
							<p class="item__text">Мы предлагаем максимальный функционал оборудования и программного обеспечения
								Gelios по самым низким ценам на рынке мониторинга, чтобы вы могли сделать ваш бизнес еще
								продуктивнее и прибыльнее.</p>
						</div>
						<div class="advantage__item item no-anim-again anim-items">
							<div class="item__icon">
								<img src="img/advantage/quality.svg" alt="">
							</div>
							<h3 class="item__title">Высокое качество</h3>
							<p class="item__text">Каждое новое устройство перед продажей проходит проверку и тестирование. На
								все оборудование мы предоставляем гарантию 2 года.</p>
						</div>
						<div class="advantage__item item no-anim-again anim-items">
							<div class="item__icon">
								<img src="img/advantage/logistics.svg" alt="">
							</div>
							<h3 class="item__title">Логистика</h3>
							<p class="item__text">В этом вопросе мы поддерживаем индивидуальный подход, клиенты сами выбирают
								способ доставки, транспортную компанию и тариф для отгрузки оборудования. Мы просто запомним и
								учтем все ваши пожелания.</p>
						</div>
						<div class="advantage__item item no-anim-again anim-items">
							<div class="item__icon">
								<img src="img/advantage/support.svg" alt="">
							</div>
							<h3 class="item__title">Поддержка</h3>
							<p class="item__text">Продал и забыл – не наш метод работы. Любой вопрос, который возникает у ваc,
								сотрудники технической поддержки обработают в течение нескольких часов.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Блок о компании -->
		<div class="about">
			<div class="about__shape">
				<div class="container">
					<div class="about__row">
						<div class="about__info">
							<h2 class="about__title title no-anim-again anim-items">О компании</h2>
							<p class="about__text no-anim-again anim-items">На сегодняшний день Аруснави Электроникс входит в
								тройку лидеров мирового рейтинга по производству телематического оборудования.
							</p>
							<p class="about__text no-anim-again anim-items">Наша компания производит и реализует несколько
								линеек продуктов по нескольким направлениям: GPS-трекеры, Дополнительное
								оборудование (датчики уровня топлива, считыватели CAN-шины и многое другое).
							</p>
							<p class="about__text no-anim-again anim-items">Мы отслеживаем процесс производства и контролируем
								качество производимого оборудования на каждом этапе — от проектирования до тестирования
								продукции.
							</p>
							<!-- <p class="about__text">Навигационные контроллеры производятся в Москве, производственная площадка
								по
								производству ДУТов расположена в г. Шуя, Ивановской области. Кроме того,в г. Москва расположена
								лаборатория для тестирования оборудования перед поступлением на склад.</p> -->
							<a href="#request-popup" class="about__button button-white popup-link">Заказать звонок</a>
						</div>
						<div class="about__image">
							<img src="img/about-image.png" alt="Совокупность приборов ArusNavi">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Блок со спойлерами Gelios -->
		<div class="gelios no-anim-again anim-items" id="gelios">
			<div class="gelios__shape">
				<div class="container">
					<h2 class="gelios__title title">GELIOS</h2>
					<h3 class="gelios__subtitle">Система спутникового мониторинга транспорта</h3>
					<p class="gelios__description">Система мониторинга Gelios предлагает комплексное решение под ваши задачи.
					</p>
					<div class="gelios__grid">
						<!-- Эти картинки видны только на десктопе и планшете -->
						<div class="gelios__image-box">
							<img src="img/gelios/veh-mod-min.png" alt="" class="gelios__image gelios__image_1">
							<img src="img/gelios/view-report-screen.png" alt="" class="gelios__image gelios__image_2">
							<img src="img/gelios/notification-module.png" alt="" class="gelios__image gelios__image_3">
							<img src="img/gelios/drivers_full.png" alt="" class="gelios__image gelios__image_4">
							<img src="img/gelios/1-min.png" alt="" class="gelios__image gelios__image_5">
							<img src="img/gelios/maintenance-plans-screen.png" alt="" class="gelios__image gelios__image_6">
							<img src="img/gelios/reports-module-screen.png" alt="" class="gelios__image gelios__image_7">
							<!-- Главная картинка которая видна всегда -->
							<img src="img/gelios/gelios-image.png" alt="" class="gelios__image-boss">
						</div>
						<div class="gelios__spoiler open-one">
							<!-- Мониторинг транспорта онлайн -->
							<div class="gelios__item gelios__item_1">
								<h3 class="gelios__label gelios__label_1">Мониторинг транспорта on-line</h3>
								<p class="gelios__text">Система спутникового GPS/ ГЛОНАСС мониторинга транспорта позволяет
									отслеживать все имеющиеся объекты, а также их состояния и местоположения в режиме
									онлайн.<br><br>Установленный на борту транспорта gps трекер собирает всю информацию об
									объекте мониторинга: определяет координаты и скорость движения машины, фиксирует прохождение
									контрольных точек и геообъектов, а также состояние датчиков.<br><br>С помощью системы
									мониторинга можно отправлять функциональные команды на выполнение конкретных действий
									объектами.</p>
								<img src="img/gelios/veh-mod-min.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_1">
							</div>
							<!-- Контроль топлива -->
							<div class="gelios__item gelios__item_2">
								<h3 class="gelios__label gelios__label_2">Контроль топлива</h3>
								<p class="gelios__text">Контроль топлива осуществляется за счет установленного датчика уровня
									топлива (ДУТ), который передает данные на навигационный трекер, с помощью которого можно
									контролировать расход топлива, заправки и сливы.
									Датчик уровня топлива можно подключить по частотному или цифровому интерфейсу RS-485 , а
									также по беспроводному каналу связи Bluetooth.</p>
								<img src="img/gelios/view-report-screen.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_2">
							</div>
							<!-- Уведомления -->
							<div class="gelios__item gelios__item_3">
								<h3 class="gelios__label gelios__label_3">Уведомления</h3>
								<p class="gelios__text">Модуль предназначен для осуществления контроля за объектами мониторинга
									посредством оповещения о важных событиях, происходящих при эксплуатации. Настроить
									уведомления можно по наступлению событий как для объекта или группы объектов, так и для
									водителей.</p>
								<img src="img/gelios/notification-module.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_3">
							</div>
							<!-- Контроль водителей -->
							<div class="gelios__item gelios__item_4">
								<h3 class="gelios__label gelios__label_4">Контроль водителей</h3>
								<p class="gelios__text">Можно создавать карточки водителей, объединять их в группы, закреплять
									за ними транспортные средства. Просматривать статистику нарушений водителем, таких как:
									превышение скорости, опасное маневрирование, резкое ускорение/торможение.<br><br>С помощью
									данных можно анализировать качество работы сотрудника и соблюдением им должностных
									инструкций.</p>
								<img src="img/gelios/drivers_full.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_4">
							</div>
							<!-- Маршруты -->
							<div class="gelios__item gelios__item_5">
								<h3 class="gelios__label gelios__label_5">Маршруты </h3>
								<p class="gelios__text">Можно создавать карточки водителей, объединять их в группы, закреплять
									за ними транспортные средства. Просматривать статистику нарушений водителем, таких как:
									превышение скорости, опасное маневрирование, резкое ускорение/торможение.<br><br>С помощью
									данных можно анализировать качество работы сотрудника и соблюдением им должностных
									инструкций. <br><br>Можно создавать шаблоны движения по маршруту и управлять ими, назначать
									объекты на маршрут, а также отслеживать движение объектов по заданному маршруту.</p>
								<img src="img/gelios/1-min.png" alt="" class="gelios__image-spoiler gelios__image-spoiler_5">
							</div>
							<!-- Техобслуживание -->
							<div class="gelios__item gelios__item_6">
								<h3 class="gelios__label gelios__label_6">Техобслуживание</h3>
								<p class="gelios__text">Модуль предназначен для планирования и мониторинга технического
									обслуживания транспорта, а также для прогнозирования наступления даты техобслуживания (ТО) и
									затрат на него на основании моточасов и пробега транспортного средства.<br><br>Система
									позволяет создавать неограниченное количество планов ТО.</p>
								<img src="img/gelios/maintenance-plans-screen.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_6">
							</div>
							<!-- Построение отчетов -->
							<div class="gelios__item gelios__item_7">
								<h3 class="gelios__label gelios__label_7">Построение отчетов</h3>
								<p class="gelios__text">С помощью системы спутникового мониторинга Вы можете не только
									контролировать передвижение вашего парка автомобилей в режиме онлайн, но и создавать отчеты в
									виде графиков и таблиц, которые помогут проанализировать работу одного или группы объектов, а
									также параметры различных датчиков и счетчиков.</p>
								<img src="img/gelios/reports-module-screen.png" alt=""
									class="gelios__image-spoiler gelios__image-spoiler_7">
							</div>
						</div>
						<a href="https://geliospro.com/site/login/?login=demo&pass=920d4c12f8faa0aeb940b4ddb4987592&lang=ru"
							class="gelios__button button-cyan" target="_blank">Демо - вход</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Блок со слайдером Продукция ArusNavi -->
		<div class="products" id="products">
			<div class="container">
				<h2 class="products__title title">Продукция Arusnavi</h2>
				<!-- Слайдер в слайдере -->
				<div class="products__megaslider">
					<!-- Навигационные контроллеры -->
					<div class="tracker filter">
						<!-- ARNAVI L2 -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/arnavi-l2.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI L2</h3>
								<p class="tracker__text">Компактное и функциональное устройство, предназначенное для
									дистанционного наблюдения за подвижными объектами и сбора данных с установленного на них
									оборудования.</p>
								<div class="tracker__buttons">
									<a href="#request-arnavi-l2" class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-l2.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- A2-SERIES -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/a2.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">Arnavi A2</h3>
								<p class="tracker__text">Компактное устройство,
									предназначенное для дистанционного наблюдения за объектами и сбора
									данных с установленного на них оборудования.
									Передача данных на сервер осуществляется через канал GSM.</p>
								<div class="tracker__buttons">
									<a href="#request-a-series" class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-a2-series.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- A3-SERIES -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/a3.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">Arnavi A3</h3>
								<p class="tracker__text">Компактное устройство,
									предназначенное для дистанционного наблюдения за объектами и сбора
									данных с установленного на них оборудования.
									Передача данных на сервер осуществляется через канал GSM.</p>
								<div class="tracker__buttons">
									<a href="#request-a-series" class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-a3-series.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- A4-SERIES -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/a4-max.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">Arnavi A4 MAX 4G</h3>
								<p class="tracker__text">Устройство,
									предназначенное для дистанционного наблюдения за объектами и сбора
									данных с установленного на них оборудования.
									Передача данных на сервер осуществляется через канал GSM.</p>
								<div class="tracker__buttons">
									<a href="#request-a-series" class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-a4-series.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI INTEGRAL 4 -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/integral-4.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">INTEGRAL 4</h3>
								<p class="tracker__text">Устройство, позволяющее получить полную путевую информацию об
									автомобиле, а так же данные с бортового компьютера транспортного средства.</p>
								<div class="tracker__buttons">
									<a href="#request-arnavi-integral-4"
										class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-integral-4.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI 6 -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/arnavi-6.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI 6</h3>
								<p class="tracker__text">Для дистанционного наблюдения за подвижными объектами, может быть
									использован совместно с любым совместимым программным комплексом.</p>
								<div class="tracker__buttons">
									<a href="#request-arnavi-6" class="tracker__button button-white popup-link">Заказать</a>
									<a href="tracker/arnavi-6.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Контроль топлива -->
					<div class="fuel filter">
						<!-- ARNAVI УНУ -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/fuel/arnavi-unu.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI УНУ</h3>
								<p class="tracker__text">Устройство универсальное для настройки датчиков уровня топлива с
									частотным интерфейсом и цифровым RS-485.</p>
								<div class="tracker__buttons">
									<a href="#request-unu" class="tracker__button button-white popup-link">Заказать</a>
									<a href="fuel/arnavi-unu.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI DUT LS-2DF -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/fuel/arnavi-ls2df.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI LS-2DF</h3>
								<p class="tracker__text">Предназначен для измерения уровня топлива в емкостях на автотранспорте,
									железнодорожном транспорте, складах ГСМ, преобразования измеренного уровня в объем.</p>
								<div class="tracker__buttons">
									<a href="#request-ls-2df" class="tracker__button button-white popup-link">Заказать</a>
									<a href="fuel/dut-ls-2df.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI DUT LS-2DF -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/fuel/arnavi-ls2df-2.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI LS-2DF</h3>
								<p class="tracker__text">Пластмассовый корпус. Предназначен для измерения уровня топлива в
									емкостях на автотранспорте,
									железнодорожном транспорте, складах ГСМ, преобразования измеренного уровня в объем.</p>
								<div class="tracker__buttons">
									<a href="#request-ls-2df" class="tracker__button button-white popup-link">Заказать</a>
									<a href="fuel/dut-ls-2df-2.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI DUT LS-2DF BLE -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/fuel/arnavi-ls2df-ble.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI LS-2DF BLE</h3>
								<p class="tracker__text">Пластмассовый корпус. Предназначен для измерения уровня топлива в
									емкостях на автотранспорте,
									железнодорожном транспорте, складах ГСМ, преобразования измеренного уровня в объем.
									Беспроводное оборудование.</p>
								<div class="tracker__buttons">
									<a href="#request-ls-2df" class="tracker__button button-white popup-link">Заказать</a>
									<a href="fuel/dut-ls-2df-ble.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Контроль температуры -->
					<div class="temperature filter">

						<!-- ARNAVI BTS v.3 -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-ble-termo.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI BTS v.3</h3>
								<p class="tracker__text">Высокоточный датчик температуры, позволяет измерять температуру
									окружающей среды, дополнительно может контролировать цепь геркона (открыта\закрыта
									дверь).<br><br> Все данные передаются по беспроводному каналу BlueTooth (BLE).</p>

								<div class="tracker__buttons">
									<a href="#request-ble-termo" class="tracker__button button-white popup-link">Заказать</a>
									<a href="temperature/arnavi-bts-v3.html" target="_blank"
										class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI BTS v5 -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-bts5.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI BTS v.5</h3>
								<p class="tracker__text">Универсальный беспроводной датчик, с возможностью приминения
									в различных ситуациях и условиях. Применяетк как термодатчик, как датчик контроля цепи или
									радио метка.</p>

								<div class="tracker__buttons">
									<a href="#request-ble-termo" class="tracker__button button-white popup-link">Заказать</a>
									<a href="temperature/arnavi-bts-v5.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI TEMPERATURE -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-temperature.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI TEMPERATURE</h3>
								<p class="tracker__text">Предназначен для длительного контроля температуры в диапазоне от -55 до
									+125 С.</p>
								<div class="tracker__buttons">
									<a href="#request-temperature" class="tracker__button button-white popup-link">Заказать</a>
									<a href="temperature/arnavi-temperature.html" target="_blank"
										class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<!-- GPS - трекеры -->
					<!-- <div class="gps filter">
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/arnavi-beacon.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI BEACON</h3>
								<p class="tracker__text">Маяк Arnavi BEACON – это портативное автономное спутниковое
									устройство, предназначено для определения точного местоположения объекта. Передача владельцу
									координат объекта осуществляется по протоколу GPRS.</p>
								<div class="tracker__buttons">
									<a href="#request-arnavi-beacon" class="tracker__button button-white popup-link">Заказать</a>
									<a href="gps/arnavi-beacon.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/tracker/arnavi-beacon-qi.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI BEACON Qi</h3>
								<p class="tracker__text">Маяк Arnavi BEACON – это портативное автономное спутниковое
									устройство, предназначено для определения точного местоположения объекта. Передача владельцу
									координат объекта осуществляется по протоколу GPRS, с поддержкой беспроводной зарядки.</p>
								<div class="tracker__buttons">
									<a href="##request-arnavi-beacon"
										class="tracker__button button-white popup-link">Заказать</a>
									<a href="gps/arnavi-beacon-qi.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Доп оборудование -->
					<div class="equip filter">
						<!-- ARNAVI WI-FI -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-wifi.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI WI-FI</h3>
								<p class="tracker__text">Внешнее устройство для обеспечения wi-fi соединения в местах, где
									отсутствует покрытие мобильных операторов.</p>
								<div class="tracker__buttons">
									<a href="#request-wi-fi" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/arnavi-wifi.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI CAN -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/fuel/arnavi-can.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI CAN</h3>
								<p class="tracker__text">Внешнее устройство для считывания информации с бортового компьютера
									автомобиля, устанавливается совместно с навигационными контроллерами любых производителей.
								</p>
								<div class="tracker__buttons">
									<a href="#request-can" class="tracker__button button-white popup-link">Заказать</a>
									<a href="fuel/arnavi-can.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI PROTECT -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-protect.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI PROTECT</h3>
								<p class="tracker__text">Устройство защиты оборудования от предельно допустимых значений
									постоянного прямого и обратного напряжений.</p>
								<div class="tracker__buttons">
									<a href="#request-protect" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/arnavi-protect.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI BLE-RELAY -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-plc.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI BLE-RELAY</h3>
								<p class="tracker__text">Блокирующее беспроводное реле, предназначено для оборудования любых
									охранных систем дополнительной цепью блокировки двигателя управляемой по беспроводному
									сигналу (BLE).</p>
								<div class="tracker__buttons">
									<a href="#request-ble-relay" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/arnavi-ble-relay.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ARNAVI PLC -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-plc.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ARNAVI PLC</h3>
								<p class="tracker__text">Предназначен для оборудования любых охранных систем дополнительной
									цепью блокировки двигателя управляемой по штатной проводке автомобиля.</p>
								<div class="tracker__buttons">
									<a href="#request-plc" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/arnavi-plc.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- РЕЛЕ БЛОКИРОВКИ -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/arnavi-block.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">РЕЛЕ БЛОКИРОВКИ</h3>
								<p class="tracker__text">Устройство для разрыва цепи питания (бензонасоса или зажигания).</p>
								<div class="tracker__buttons">
									<a href="#request-block" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/arnavi-block.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- JIAHE CAMERA -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/jiahe-camera.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">JIAHE CAMERA</h3>
								<p class="tracker__text">Фотокамера с фунцкцией автоматической подсветки (для ночной съемки).
									Устройство совместимо с навигационными контроллерами любых производителей</p>
								<div class="tracker__buttons">
									<a href="#request-camera" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/jiahe-camera.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- МИКРОФОН RITMIX -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/ritmix.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">МИКРОФОН RITMIX</h3>
								<p class="tracker__text">Внешнее устройство для прослушивания салона автомобиля или голосовой
									связи с водителем.</p>
								<div class="tracker__buttons">
									<a href="#request-ritmix" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/ritmix.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
						<!-- ТРЕВОЖНАЯ КНОПКА -->
						<div class="tracker__item filter">
							<div class="tracker__image-box">
								<img src="img/products/equip/alarm-button.png" alt="" class="tracker__image">
							</div>
							<div class="tracker__info">
								<h3 class="tracker__label">ТРЕВОЖНАЯ КНОПКА</h3>
								<p class="tracker__text">Тревожная кнопка – это элемент охранной сигнализации. Она предназначена
									для вызова помощи в нестандартных ситуациях: грабеж, разбой, нападение.</p>
								<div class="tracker__buttons">
									<a href="#request-alarm-button" class="tracker__button button-white popup-link">Заказать</a>
									<a href="equip/alarm-button.html" target="_blank" class="tracker__link">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Блок Наши проекты -->
		<div class="projects" id="projects">
			<div class="container">
				<h2 class="projects__title title">Наши проекты</h2>
				<!-- GELIOS -->
				<div class="projects__block-row">
					<div class="projects__info no-anim-again anim-items">
						<h3 class="projects__label">GELIOS</h3>
						<p class="projects__text">Многофункциональная интеллектуальная система спутникового GPS и ГЛОНАСС
							мониторинга. Удалённый контроль автотранспорта, спецтехники, любых подвижных и неподвижных
							объектов.</p>
						<div class="projects__buttons">
							<a href="https://onelink.to/q5tet3" target="_blank"
								class="projects__button-second button-stroke-cyan">Скачать приложение</a>
							<a href="https://www.geliossoft.ru" target="_blank"
								class="projects__button-boss button-cyan">Перейти на сайт</a>
						</div>
					</div>
					<div class="projects__image">
						<img src="img/projects/geliossoft.svg" alt="">
					</div>
				</div>
				<!-- AVTOOKO24 -->
				<div class="projects__block-row projects__block-row_reverse">
					<div class="projects__info projects__info_reverse no-anim-again anim-items">
						<h3 class="projects__label">AVTOOKO24</h3>
						<p class="projects__text">Контроль за местоположением автомобиля, управление работой двигателя, защита
							от угона и эвакуации.</p>
						<div class="projects__buttons">
							<a href="https://onelink.to/emvtvw" target="_blank"
								class="projects__button-second button-stroke-cyan">Скачать приложение</a>
							<a href="https://avtooko24.ru" target="_blank" class="projects__button-boss button-cyan">Перейти на
								сайт</a>
						</div>
					</div>
					<div class="projects__image">
						<img src="img/projects/avtooko24.svg" alt="">
					</div>
				</div>
				<!-- SOLOMON -->
				<!-- <div class="projects__block-row">
					<div class="projects__info">
						<h3 class="projects__label">SOLOMON</h3>
						<p class="projects__text">Система спутникового GPS и ГЛОНАСС мониторинга. Удалённый контроль
							автотранспорта, спецтехники, любых подвижных и неподвижных объектов.</p>
						<div class="projects__buttons">
							<a href="https://onelink.to/4ma796" target="_blank"
								class="projects__button-second button-stroke-cyan">Скачать приложение</a>
							<a href="http://www.solomonpro.ru" target="_blank"
								class="projects__button-boss button-cyan">Перейти на сайт</a>
						</div>
					</div>
					<div class="projects__image">
						<img src="img/projects/solomon.svg" alt="">
					</div>
				</div> -->
				<!-- GRUZOLOT -->
				<div class="projects__block-row">
					<div class="projects__info no-anim-again anim-items">
						<h3 class="projects__label">GRUZOLOT</h3>
						<p class="projects__text">Абсолютно бесплатный проект, который позволит найти нужный транспорт или
							спецтехнику, расположенную рядом с вами.</p>
						<div class="projects__buttons">
							<a href="https://onelink.to/q4t6pz" target="_blank"
								class="projects__button-second button-stroke-cyan">Скачать
								приложение</a>
							<a href="https://gruzolot.ru" target="_blank" class="projects__button-boss button-cyan">Перейти на
								сайт</a>
						</div>
					</div>
					<div class="projects__image">
						<img src="img/projects/gruzolot.svg" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Блок Сертификаты -->
		<div class="certificates" id="certificates">
			<div class="container">
				<h2 class="certificates__title title">Сертификаты</h2>
				<div class="certificates__row no-anim-again anim-items">
					<div class="certificates__block">
						<div class="certificates__sliders-text">
							<p class="certificates__none filter">ЕЭС Декларация о соответствии ДУТ</p>
							<p class="certificates__none filter">Товарный знак по Gelios</p>
							<p class="certificates__none filter">ФСТЭК ARNAVI</p>
							<p class="certificates__none filter">Сертификат соответствия Навигационный контроллер</p>
							<p class="certificates__none filter">ЕЭС Декларация о соответствии Навигационный контроллер</p>
							<p class="certificates__none filter">Сертификат соответствия ДУТ и Температурных датчиков</p>
						</div>
					</div>
					<div class="certificates__block">
						<div class="certificates__slider">
							<!-- ЕЭС Декларация о соответствии ДУТ -->
							<div class="certificates__image filter">
								<img src="img/certificates/eus-decloration.png" alt="">
							</div>
							<!-- Товарный знак по Gelios -->
							<div class="certificates__image filter">
								<img src="img/certificates/tovar-znak-geliossoft.png" alt="">
							</div>
							<!-- ФСТЭК ARNAVI -->
							<div class="certificates__image filter">
								<img src="img/certificates/fstek-arnavi.png" alt="">
							</div>
							<!-- Сертификат соответствия Навигационный контроллер -->
							<div class="certificates__image filter">
								<img src="img/certificates/certificates-traker.png" alt="">
							</div>
							<!-- ЕЭС Декларация о соответствии Навигационный контроллер -->
							<div class="certificates__image">
								<img src="img/certificates/euro-decloration.png" alt="">
							</div>
							<!-- Сертификат соответствия ДУТ -->
							<div class="certificates__image">
								<img src="img/certificates/certificates-dut.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Блок Компании со слайдером -->
		<div class="company">
			<div class="container">
				<h2 class="company__title title">Компании</h2>
				<p class="company__subtitle">которые используют наше оборудование</p>
				<div class="company__slider no-anim-again anim-items">
					<!-- АЛЬФА БАНК -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/alfa-bank-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/alfa-bank.svg" alt="">
						</div>
					</div>
					<!-- АЛРОСА -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/alrosa-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/alrosa.svg" alt="">
						</div>
					</div>
					<!-- ГАЗПРОМ -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/gazprom-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/gazprom.svg" alt="">
						</div>
					</div>
					<!-- КАМАЗ -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/kamaz-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/kamaz.svg" alt="">
						</div>
					</div>
					<!-- ЛУКОИЛ -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/lukoil-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/lukoil.svg" alt="">
						</div>
					</div>
					<!-- МЕЧЕЛ -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/mechel-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/mechel.svg" alt="">
						</div>
					</div>
					<!-- РЖД -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/rzhd-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/rzhd.svg" alt="">
						</div>
					</div>
					<!-- СУРГЕТНЕФТЕГАЗ -->
					<div class="company__item filter">
						<div class="company__logo"><img src="img/logo/notact/surgutneftegaz-grey.svg" alt=""></div>
						<div class="company__logo company__logo_act"><img src="img/logo/act/surgutneftegaz.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Скролл ап кнопка -->
		<a href="#main" onclick="slowScroll('#main')">
			<div class="scroll-up">
				<div class="scroll-up__line"></div>
			</div>
		</a>
		<!-- Добавляем поп-апы -->
		<!-- Поп ап для блока почему бесплатно форма обратной связи -->
<div id="request-popup" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Ccылка со страницы">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi 6 -->
<div id="request-arnavi-6" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi 6">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi Integral 4 -->
<div id="request-arnavi-integral-4" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi Integral 4">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi Beacon -->
<div id="request-arnavi-beacon" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi Beacon">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi L2 -->
<div id="request-arnavi-l2" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi L2">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi TAG -->
<div id="request-arnavi-tag" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi TAG">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi TAG Qi -->
<div id="request-arnavi-tag-qi" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi TAG Qi">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi Avtooko24 -->
<div id="request-avtooko24" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi Avtooko24">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi A-series -->
<div id="request-a-series" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi A-Series">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi LS-2DF DUT -->
<div id="request-ls-2df" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi ДУТ LS-2DF">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi CAN -->
<div id="request-can" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi CAN">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi УНУ -->
<div id="request-unu" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi УНУ">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi ESM-P -->
<div id="request-esm-p" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi ESM-P">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi TEMPERATURE -->
<div id="request-temperature" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi TEMPERATURE">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- ARNAVI BTS v.3 -->
<div id="request-ble-termo" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="ARNAVI BTS v.3">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi WI-FI -->
<div id="request-wi-fi" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi Wi-Fi">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi BLE-Relay -->
<div id="request-ble-relay" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi BLE-Relay">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi PLC -->
<div id="request-plc" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi BLE-Relay">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- РЕЛЕ БЛОКИРОВКИ -->
<div id="request-block" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Реле Блокировки">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Arnavi Protecrt -->
<div id="request-protect" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Arnavi Protect">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Jiahe Camera -->
<div id="request-camera" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Камера Jiahe Camera">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Микрофон Ritmix -->
<div id="request-ritmix" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Микрофон Ritmix">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!-- Тревожная кнопка -->
<div id="request-alarm-button" class="popup">
	<div class="popup__body">
		<a href="#header" class="popup__area"></a>
		<div class="popup__content">
			<a href="#header" class="popup__close close-popup"></a>
			<p class="popup__name">Оставьте заявку и менеджер с вами свяжется</p>
			<form id="request-form-popup" action="" class="popup__form" action="#" method="post"
				enctype="multipart/form-data">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="ArusNavi">
				<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
				<input type="hidden" name="form_subject" value="Тревожная кнопка">
				<!-- END Hidden Required Fields -->
				<div class="popup__item">
					<input id="formName" type="text" name="name" placeholder="Введите ваше имя" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formEmail" type="text" name="email" placeholder="Введите ваш e-mail" class="popup__input">
				</div>
				<div class="popup__item">
					<input id="formPhone" type="tel" name="phone" placeholder="Введите ваш номер телефона"
						class="popup__input">
				</div>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="formAgreement" class="checkbox__label"><span class="form-text">Я даю свое согласие на
								обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
				<button class="popup__button button-white">Отправить</button>
			</form>
		</div>
	</div>
</div>
		<!-- Добавляем футтер -->
		<!-- Блок Контакты с картой -->
<div class="contacts" id="contacts">
	<div class="container">
		<h2 class="contacts__title title">Контакты</h2>
		<div class="contacts__row">
			<div class="contacts__info">
				<!-- <p class="contacts__text">Мы будем рады вас видеть в офисе нашей компании, однако если вам так удобнее вы
					можете связаться с нами любым другим способом: </p> -->
				<div class="footer__info">
					<div class="footer__item">
						<h3 class="footer__label">Техподдержка по оборудованию</h3>
						<ul class="footer__contacts">
							<li>
								<img src="img/contacts/mail.svg" alt="" class="footer__icon">
								<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="mailto:support@arusnavi.ru" class="footer__link">support@arusnavi.ru</a>
							</li>
							<li>
								<img src="img/contacts/telegram.svg" alt="" class="footer__icon">
								<img src="img/contacts/telegram-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="https://t.me/ArusnaviSupport_bot" class="footer__link">@ArusnaviSupport_bot</a>
							</li>
						</ul>
					</div>
					<div class="footer__item">
						<h3 class="footer__label">Техподдержка ПО</h3>
						<ul class="footer__contacts">
							<li>
								<img src="img/contacts/mail.svg" alt="" class="footer__icon">
								<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="mailto:support@geliossoft.ru" class="footer__link">support@geliossoft.ru</a>
							</li>
							<li>
								<img src="img/contacts/telegram.svg" alt="" class="footer__icon">
								<img src="img/contacts/telegram-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="https://t.me/geliossoft_bot" class="footer__link">@geliossoft_bot</a>
							</li>
						</ul>
					</div>
					<div class="footer__item">
						<h3 class="footer__label">Отдел логистики</h3>
						<ul class="footer__contacts">
							<li>
								<img src="img/contacts/telephone.svg" alt="" class="footer__icon">
								<img src="img/contacts/telephone-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="tel:79645007084" class="footer__link">+7 (964) 500-70-84
								</a>
							</li>
							<li>
								<img src="img/contacts/mail.svg" alt="" class="footer__icon">
								<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="mailto:logist@arusnavi.ru" class="footer__link">logist@arusnavi.ru</a>
							</li>
						</ul>
					</div>
					<div class="footer__item">
						<h3 class="footer__label">Менеджер по оптовой закупке</h3>
						<ul class="footer__contacts">
							<li>
								<img src="img/contacts/telephone.svg" alt="" class="footer__icon">
								<img src="img/contacts/telephone-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="tel:79096215911" class="footer__link">+7 (909) 621-59-11</a>
							</li>
							<li>
								<img src="img/contacts/mail.svg" alt="" class="footer__icon">
								<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="mailto:89096215911@arusnavi.ru" class="footer__link">89096215911@arusnavi.ru</a>
							</li>
							<li>
								<img src="img/contacts/mail.svg" alt="" class="footer__icon">
								<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
								<a href="mailto:sales@arusnavi.ru" class="footer__link">sales@arusnavi.ru</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Карта -->
			<div class="contacts__map">
				<div class="contants__block">
					<script type="text/javascript" charset="utf-8" async
						src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0e597429992c29338bca6f5de080054ecaaa96aa291bc4bd20152c06cc976cd0&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Блок Оставить заявку -->
<div class="request">
	<div class="container">
		<h2 class="request__title title">Оставить заявку</h2>
		<form action="#" class="request__form" id="request-form" method="post" enctype="multipart/form-data">
			<!-- Обязательный блок для формы он скрыт и не виден но существует -->
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="ArusNavi">
			<input type="hidden" name="admin_email" value="89096215911@arusnavi.ru">
			<input type="hidden" name="form_subject" value="footer form">
			<!-- END Hidden Required Fields -->
			<div class="request__row">
				<div class="request__left">
					<input type="text" name="Name" placeholder="Ваше имя" class="request__input">
					<input type="text" name="Email" placeholder="E-mail" class="request__input">
					<input type="tel" name="Phone" placeholder="Номер телефона" class="request__input">
				</div>
				<textarea name="Question" placeholder="Задать свой вопрос..." class="request__textarea"></textarea>
				<div class="request__checkbox">
					<div class="checkbox">
						<input id="requestAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
						<label for="requestAgreement" class="checkbox__label req"><span class="form-text">Я даю свое согласие
								на обработку персональных данных согласно c <a href="personal-data-processing-policy.html"
									target="_blank">условиями</a>*</span></label>
					</div>
				</div>
			</div>
			<button class="request__button button-white">Отправить</button>
		</form>
	</div>
</div>
<!-- Футтер -->
<footer class="footer">
	<div class="container">
		<div class="footer__logo">
			<a href="index.html"><img src="img/logo.svg" alt=""></a>
		</div>
		<!-- Контакты -->
		<div class="footer__info">
			<div class="footer__item">
				<h3 class="footer__label">Техподдержка по оборудованию</h3>
				<ul class="footer__contacts">
					<li>
						<img src="img/contacts/mail.svg" alt="" class="footer__icon">
						<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="mailto:support@arusnavi.ru" class="footer__link">support@arusnavi.ru</a>
					</li>
					<li>
						<img src="img/contacts/telegram.svg" alt="" class="footer__icon">
						<img src="img/contacts/telegram-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="https://t.me/ArusnaviSupport_bot" class="footer__link">@ArusnaviSupport_bot</a>
					</li>
				</ul>
			</div>
			<div class="footer__item">
				<h3 class="footer__label">Техподдержка ПО</h3>
				<ul class="footer__contacts">
					<li>
						<img src="img/contacts/mail.svg" alt="" class="footer__icon">
						<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="mailto:support@geliossoft.ru" class="footer__link">support@geliossoft.ru</a>
					</li>
					<li>
						<img src="img/contacts/telegram.svg" alt="" class="footer__icon">
						<img src="img/contacts/telegram-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="https://t.me/geliossoft_bot" class="footer__link">@geliossoft_bot</a>
					</li>
				</ul>
			</div>
			<div class="footer__item">
				<h3 class="footer__label">Отдел логистики</h3>
				<ul class="footer__contacts">
					<li>
						<img src="img/contacts/telephone.svg" alt="" class="footer__icon">
						<img src="img/contacts/telephone-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="tel:79645007084" class="footer__link">+7 (964) 500-70-84
						</a>
					</li>
					<li>
						<img src="img/contacts/mail.svg" alt="" class="footer__icon">
						<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="mailto:logist@arusnavi.ru" class="footer__link">logist@arusnavi.ru</a>
					</li>
				</ul>
			</div>
			<div class="footer__item">
				<h3 class="footer__label">Менеджер по оптовой закупке</h3>
				<ul class="footer__contacts">
					<li>
						<img src="img/contacts/telephone.svg" alt="" class="footer__icon">
						<img src="img/contacts/telephone-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="tel:79096215911" class="footer__link">+7 (909) 621-59-11</a>
					</li>
					<li>
						<img src="img/contacts/mail.svg" alt="" class="footer__icon">
						<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="mailto:89096215911@arusnavi.ru" class="footer__link">89096215911@arusnavi.ru</a>
					</li>
					<li>
						<img src="img/contacts/mail.svg" alt="" class="footer__icon">
						<img src="img/contacts/mail-act.svg" alt="" class="footer__icon footer__icon_act">
						<a href="mailto:sales@arusnavi.ru" class="footer__link">sales@arusnavi.ru</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Соц сети -->
		<div class="footer__row">
			<div class="footer__facebook">
				<img src="img/social/facebook.svg" class="footer__notact" alt="">
				<a href="https://www.facebook.com/arusnavi" target="_blank"><img src="img/social/facebook-act.svg"
						class="footer__act" alt=""></a>
			</div>
			<div class="footer__instagram">
				<img src="img/social/instagram.svg" class="footer__notact" alt="">
				<a href="https://instagram.com/arusnavi.ru?igshid=YmMyMTA2M2Y=" target="_blank"><img
						src="img/social/instagram-act.svg" class="footer__act" alt=""></a>
			</div>
			<div class="footer__vk">
				<img src="img/social/vk.svg" class="footer__notact" alt="">
				<a href="https://vk.com/arusnavi" target="_blank"><img src="img/social/vk-act.svg" class="footer__act"
						alt=""></a>
			</div>
		</div>
		<div class="footer__line"></div>
		<p class="footer__copyright">Copyright © 2022 ArusNavi. Все права защищены</p>
	</div>
</footer>
	</div>
	<!-- Подключам jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- Подключаем второй слайдер -->
	<script src="js/slick.min.js"></script>
	<!-- Подключаем JS главный -->
	<script src="js/script.js"></script>
	<!-- Добавляем JS для форм -->
	<script src="js/form.js"></script>
</body>

</html>