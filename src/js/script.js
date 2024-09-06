function isWebp() {
	function testWebP(callback) {
		var webP = new Image();
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2);
		};
		webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
	}
	testWebP(function (support) {
		if (support == true) {
			document.querySelector('body').classList.add('webp');
		} else {
			document.querySelector('body').classList.add('no-webp');
		}
	});
}

isWebp();

// Плавный скрол до ссылки
function slowScroll(id) {
	var offset = 100; // Этот параметр отвечает за сдвиг вниз
	$('html, body').animate({
		scrollTop: $(id).offset().top - offset
	}, 1000);
	return false
}





// Появление и закрытие поп апа
$(document).ready(function () {
	$('.popup-link').click(function (event) {
		$('body').toggleClass('lock');
	})
})

$(document).ready(function () {
	$('.popup__area, .popup__close').click(function (event) {
		$('body').removeClass('lock');
	})
})



// Для бургер меню
$(document).ready(function () {
	$('.header__bg-burger').click(function (event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('.header__logo,.header__logo-color').toggleClass('hidden')
		$('body').toggleClass('lock');
	});
	// А это делает что бы бургер закрывался при клике на кнопки в бурегер
	$('.header__link').click(function (event) {
		$('.header__burger,.header__menu').removeClass('active');
		$('.header__logo,.header__logo-color').removeClass('hidden')
		$('body').removeClass('lock');
	})
})



// Отвечает за появление при скролле кнопки скролл ап
$(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 800) {
			$('.scroll-up').show();
		} else {
			$('.scroll-up').hide();
		}
	});
});

// Объявляю переменную вар которая содержит в себе значения для булетов моего слайдера
// Булеты для слайдера ПРОДУКТЫ
var letters = ['GPS-трекеры', 'Контроль топлива', 'Контроль температуры', 'Дополнительное оборудование'];
// Булеты для слайдера сертификаты
var certificatesName = ['ЕЭС Декларация о соответствии ДУТ', 'Товарный знак по Gelios', 'ФСТЭК ARNAVI', 'Сертификат соответствия Навигационный контроллер', 'ЕЭС Декларация о соответствии Навигационный контроллер', 'Сертификат соответствия ДУТ и Температурных датчиков'];



// Слайдер
$(document).ready(function () {
	// Главный слайдер продукты
	$('.products__megaslider').slick({
		// Включает отображение стрелок
		arrows: false,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		adaptiveHeight: true,
		// Количество слайдов на экране
		slidesToShow: 1,
		//Скорость
		speed: 1500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Данная функция реализует замену цифр в булетах слайдера на конкретные слова!
		customPaging: function (slider, i) {
			var thumb = $(slider.$slides[i]).data();

			return '<a>' + letters[i] + '</a>';
		},
		// Адаптивное поведение
		responsive: [
			{
				breakpoint: 992,
				settings: {
					swipe: false,
					arrows: false,
				}
			}
		]
	});
	// Слайдер трекеров
	$('.tracker').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 2,
		//Скорость
		speed: 500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 1000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Связь с другим слайдером
		// Адаптивное поведение
		rows: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					draggable: true,
					arrows: true,
				},
			}
		],
	});
	// Слайдер контроль топлива
	$('.fuel').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 2,
		//Скорость
		speed: 500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Связь с другим слайдером
		// Адаптивное поведение
		rows: 1,
		slidesPerRow: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					draggable: true,
					arrows: true,
				},
			}
		]
	});
	// Слайдер датчиков температуры
	$('.temperature').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: false,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 2,
		//Скорость
		speed: 500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Связь с другим слайдером
		// Адаптивное поведение
		rows: 1,
		slidesPerRow: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					draggable: true,
					arrows: true,
				},
			}
		]
	});
	// Слайдер маяков
	$('.gps').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 2,
		//Скорость
		speed: 500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Связь с другим слайдером
		// Адаптивное поведение
		rows: 1,
		slidesPerRow: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					draggable: true,
					arrows: true,
				},
			}
		]
	});
	// Слайдер доп оборудования
	$('.equip').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 2,
		//Скорость
		speed: 500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Адаптивное поведение
		rows: 1,
		slidesPerRow: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					draggable: true,
					arrows: true,
				},
			}
		]
	});
	// Слайдер картинок сертификатов(связан со слайдером названия сертификатов)
	$('.certificates__slider').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 1,
		// Количество пролистываемых слайдов
		slidesToScroll: 1,
		//Скорость
		speed: 1500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Затухание слайда
		fade: true,
		// Связь с другим слайдером
		asNavFor: ".certificates__sliders-text",
		// Адаптивное поведение
		responsive: [
			{
				breakpoint: 639,
				settings: {
					arrows: false,
				}
			}
		]
	});
	// Слайдер названия сертификатов(связан со слайдером картинок сертификатов)
	$('.certificates__sliders-text').slick({
		// Включает отображение стрелок
		arrows: false,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		adaptiveHeight: true,
		// Количество слайдов на экране
		slidesToShow: 1,
		//Скорость
		speed: 1500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: false,
		// Скорость прокрутки
		autoplaySpeed: 3000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: true,
		// Данная функция реализует замену цифр в булетах слайдера на конкретные слова!
		customPaging: function (slider, i) {
			var thumb = $(slider.$slides[i]).data();
			return '<a>' + certificatesName[i] + '</a>';
		},
		// Связываю слайдеры
		asNavFor: ".certificates__slider",
		// Адаптивное поведение
		responsive: [
			{
				breakpoint: 639,
				settings: {
					arrows: false,
					dots: false,
				}
			}
		]
	});
	// Слайдер компаний
	$('.company__slider').slick({
		// Включает отображение стрелок
		arrows: true,
		// Булеты
		dots: true,
		// Адаптивная высота слайдера
		// Количество слайдов на экране
		slidesToShow: 3,
		// Количество пролистываемых слайдов
		slidesToScroll: 1,
		//Скорость
		speed: 1500,
		// Бесконечность
		infinite: true,
		// Автоматическая прокрутка
		autoplay: true,
		// Скорость прокрутки
		autoplaySpeed: 5000,
		// Управление мышкой
		draggable: false,
		// Пауза при наведении мышкой
		pauseOnHover: false,
		// Адаптивное поведение
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					arrows: false,
					autoplaySpeed: 3000,
				}
			}
		]
	});
});

// Данная функция позволяет создавать анимацю появления объектов при скролле сайта
// Проверяем наличие класса у объекта который будем анимировать
let animItems = document.querySelectorAll('.anim-items');
// Если они есть то выполняется следущие условия
if (animItems.length > 0) {
	window.addEventListener('scroll', animOnScroll)
	function animOnScroll() {
		for (let index = 0; index < animItems.length; index++) {
			const animItem = animItems[index];
			const animItemHeight = animItem.offsetHeight;
			const animItemOffset = offset(animItem).top;
			const animStart = 4;


			let animItemPoint = window.innerHeight - animItemHeight / animStart;

			if (animItemHeight > window.innerHeight) {
				animItemPoint = window.innerHeight - window.innerHeight / animStart;
			}
			if ((window.scrollY > animItemOffset - animItemPoint) && window.scrollY < (animItemOffset + animItemHeight)) {
				animItem.classList.add('anim');
			} else {
				if (!animItem.classList.contains('no-anim-again')) {
					animItem.classList.remove('anim')
				}
			}
		}
	}
	function offset(el) {
		const rect = el.getBoundingClientRect();
		let scrollLeft = window.scrollY || document.documentElement.scrollLeft;
		let scrollTop = window.scrollY || document.documentElement.scrollTop;

		return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
	}
	animOnScroll()
};


// Позволяет реализовать спойлеры
$(document).ready(function () {
	$('.gelios__label').click(function (event) {
		// Если открыт один спойлер, второй обязательно закрыт
		if ($('.gelios__spoiler').hasClass('open-one')) {
			$('.gelios__label').not($(this)).removeClass('active');
			$('.gelios__text').not($(this).next()).slideUp(300);
		};
		$(this).toggleClass('active').next().slideToggle(300);
	});
});



// Данный перечень функций позволяет делать появление картинком при условии что один из спойлеров активен

// Мониторнг транспорта онлайн
$(document).ready(function () {
	$('.gelios__label_1').click(function (event) {
		$('.gelios__image_1').toggleClass('active');
		$('.gelios__image-spoiler_1').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Контроль топлива
$(document).ready(function () {
	$('.gelios__label_2').click(function (event) {
		$('.gelios__image_2').toggleClass('active');
		$('.gelios__image-spoiler_2').toggleClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_1').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Уведомления
$(document).ready(function () {
	$('.gelios__label_3').click(function (event) {
		$('.gelios__image-spoiler_3').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_3').toggleClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_1').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Контроль водетелей
$(document).ready(function () {
	$('.gelios__label_4').click(function (event) {
		$('.gelios__image_4').toggleClass('active');
		$('.gelios__image-spoiler_4').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_1').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Маршруты
$(document).ready(function () {
	$('.gelios__label_5').click(function (event) {
		$('.gelios__image_5').toggleClass('active');
		$('.gelios__image-spoiler_5').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_1').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Техобслуживание
$(document).ready(function () {
	$('.gelios__label_6').click(function (event) {
		$('.gelios__image_6').toggleClass('active');
		$('.gelios__image-spoiler_6').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image-spoiler_7').removeClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_1').removeClass('active');
		$('.gelios__image_7').removeClass('active');
	})
})

// Построение отчетов
$(document).ready(function () {
	$('.gelios__label_7').click(function (event) {
		$('.gelios__image_7').toggleClass('active');
		$('.gelios__image-spoiler_7').toggleClass('active');
		$('.gelios__image-spoiler_2').removeClass('active');
		$('.gelios__image-spoiler_3').removeClass('active');
		$('.gelios__image-spoiler_4').removeClass('active');
		$('.gelios__image-spoiler_5').removeClass('active');
		$('.gelios__image-spoiler_6').removeClass('active');
		$('.gelios__image-spoiler_1').removeClass('active');
		$('.gelios__image_2').removeClass('active');
		$('.gelios__image_3').removeClass('active');
		$('.gelios__image_4').removeClass('active');
		$('.gelios__image_5').removeClass('active');
		$('.gelios__image_6').removeClass('active');
		$('.gelios__image_1').removeClass('active');
	})
})





// Данны функции позволяют реализовывать табы
// Табы страницы ПРОДУКТЫ
$(document).ready(function () {
	$('.tabs__item').click(function (e) {
		e.preventDefault();

		$('.tabs__item').removeClass('active');
		$('.tabs__block').removeClass('active');

		$(this).addClass('active');
		$($(this).attr('href')).addClass('active');
	});

	$('.tabs__item:first').click();
});

// Табы страницы ТОВАР
$(document).ready(function () {
	$('.tabs-info__tab').click(function (e) {
		e.preventDefault();

		$('.tabs-info__tab').removeClass('active');
		$('.tabs-info__block').removeClass('active');

		$(this).addClass('active');
		$($(this).attr('href')).addClass('active');
	});
	if ($('#trackers').hasClass('active')) {
		$('.breadcrumb__tab_trackers').toggleClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
	};
	$('.tabs-info__tab:first').click();
});







