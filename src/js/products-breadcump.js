// Хлебные крошки в продуктах на мобильной версии
// Все продукты
$(document).ready(function () {
	$('.tabs__item_all').click(function (event) {
		$('.breadcrumb__tab_all').toggleClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
	})
})

// Трекеры
$(document).ready(function () {
	$('.tabs__item_trackers').click(function (event) {
		$('.breadcrumb__tab_trackers').toggleClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
})

// Контроль топлива
$(document).ready(function () {
	$('.tabs__item_fuel').click(function (event) {
		$('.breadcrumb__tab_fuel').toggleClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
})

// Контроль температуры
$(document).ready(function () {
	$('.tabs__item_temperature').click(function (event) {
		$('.breadcrumb__tab_temperature').toggleClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// GPS маяки
$(document).ready(function () {
	$('.tabs__item_gps').click(function (event) {
		$('.breadcrumb__tab_gps').toggleClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Беспроводные устройства
$(document).ready(function () {
	$('.tabs__item_ble').click(function (event) {
		$('.breadcrumb__tab_ble').toggleClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Дополнительное оборудование
$(document).ready(function () {
	$('.tabs__item_equipment').click(function (event) {
		$('.breadcrumb__tab_equipment').toggleClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
})

// Хлебные крошки в продуктах на десктопной и планшетной версии
// Все продукты
$(document).ready(function () {
	$('.filter__item_all').click(function (event) {
		$('.breadcrumb__tab_all').toggleClass('active');
		$('.breadcrumb__tab_trackers').remove('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
	})
});

// Трекеры
$(document).ready(function () {
	$('.filter__item_trackers').click(function (event) {
		$('.breadcrumb__tab_trackers').toggleClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Контроль топлива
$(document).ready(function () {
	$('.filter__item_fuel').click(function (event) {
		$('.breadcrumb__tab_fuel').toggleClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Контроль температуры
$(document).ready(function () {
	$('.filter__item_temperature').click(function (event) {
		$('.breadcrumb__tab_temperature').toggleClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// GPS маяки
$(document).ready(function () {
	$('.filter__item_gps').click(function (event) {
		$('.breadcrumb__tab_gps').toggleClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Беспроводные устройства
$(document).ready(function () {
	$('.filter__item_ble').click(function (event) {
		$('.breadcrumb__tab_ble').toggleClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_equipment').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
});

// Дополнительное оборудование
$(document).ready(function () {
	$('.filter__item_equipment').click(function (event) {
		$('.breadcrumb__tab_equipment').toggleClass('active');
		$('.breadcrumb__tab_ble').removeClass('active');
		$('.breadcrumb__tab_gps').removeClass('active');
		$('.breadcrumb__tab_temperature').removeClass('active');
		$('.breadcrumb__tab_fuel').removeClass('active');
		$('.breadcrumb__tab_trackers').removeClass('active');
		$('.breadcrumb__tab_all').removeClass('active');
	})
})



// Данный блок позволяет скрывать продукты при выборе определенной категории
const filterBlock = document.querySelectorAll('.product__el')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlock.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});

// Данный блок скрывает продукты при выборе определенной категории на мобилке
const filterBlockHideFilter = document.querySelectorAll('.filter__tab')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockHideFilter.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});

// Данный блок скрывает и показывает фильтры при выборе категории "трекеры"
const filterBlockHideFilterGps = document.querySelectorAll('.filter__gps')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockHideFilterGps.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});

// Данный блок скрывает и показывает фильтры при выборе категории "дополнительное оборудование"
const filterBlockHideFilterEquip = document.querySelectorAll('.filter__equip')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockHideFilterEquip.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});

// Данный блок реализует увеличение длинные блока с фильтрами при выборе определенных категорий таких как "Трекеры" и "Дополнительное оборудование"
const filterBlockHeightFilter = document.querySelectorAll('.filter')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockHeightFilter.forEach(elem => {
		elem.classList.remove('height');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('height');
		}
	});
});

// Данный блок скрывает и показывает кнопку "Сбросить" при выборе определенных категорий
const filterBlockHideButton = document.querySelectorAll('.filter__button')

document.querySelector('.filter').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockHideButton.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});

// Честно не помню что показывает и скрывает данный блок
const filterBlockTab = document.querySelectorAll('.product__el')

document.querySelector('.tabs__items').addEventListener('click', event => {
	if (event.target.tagName !== 'LI') return false;

	let filterClass = event.target.dataset['f'];

	filterBlockTab.forEach(elem => {
		elem.classList.remove('hide-product');
		if (!elem.classList.contains(filterClass)) {
			elem.classList.add('hide-product');
		}
	});
});






// Показывает при открытие страницы только трекереы, а так же делает активным только тамб трекеров, остальные скрывает
$(document).ready(function () {
	$('.filter__item').click(function (e) {
		e.preventDefault();

		$('.filter__item').removeClass('active');
		$(this).addClass('active');
	});


	// $('.click').toggleClass('hide')
});





// Позволяет реализовать спойлеры и поменть слова показать еще
$(document).ready(function () {
	$('.filter__more').click(function (event) {
		// Если открыт один спойлер, второй обязательно закрыт
		$(this).toggleClass('active').prev().slideToggle(300);
		if ($('.filter__more').hasClass('active')) {
			$(this).text($(".filter__more").text().replace("Посмотреть еще", "Скрыть"));
		} else {
			$(this).text($(".filter__more").text().replace("Скрыть", "Посмотреть еще"));
		}
	});
});




// Позволяет реализовать спойлеры и поменть слова показать еще в моб версии
$(document).ready(function () {
	$('.filter-pop__more').click(function (event) {
		// Если открыт один спойлер, второй обязательно закрыт
		$('.filter-pop__hidden').toggleClass('active');
	});
});

