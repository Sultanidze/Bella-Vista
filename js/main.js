$(function() {
//	мобільне меню
	$('.b-menuBtn').click(function() {
		$('.b-menu__nav_mobile').slideDown(200);
	});
	$('.b-menu__close_mobile').click(function() {
		$('.b-menu__nav_mobile').slideUp(200);
	});
// datepicker
	$.datepicker.regional['ru'] = {
		closeText: 'Закрыть',
		prevText: 'Пред',
		nextText: 'След',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
		'Июл','Авг','Сен','Окт','Ноя','Дек'],
		dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
		dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false
	};

$.datepicker.setDefaults($.datepicker.regional['ru']);
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    };
//	Додаємо маску на номер телефона в формах
	$(".b-form input[type='tel']").mask("(999) 999-99-99");

//	стилізуємо select
	$('select').selectric({
		onInit: function() {
			$(".selectric-wrapper>.selectric-items ul>li.disabled").remove();	//прибираємо з меню неактивний пункт
		}
	});
// iphone hover animations fix
$(".b-apartment__description, .b-season__block").hover(function(){})
//	ініціалізація слайдера
	// main slider
	$('.b-slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [{
				breakpoint: 992,
				settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
		}]
	});
	// apartment page slider 
	$('.b-apartmentSlider').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		vertical: true,	
		verticalSwiping: true,
		arrows: false,
		infinite: true,
		speed: 800,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 550,
			  settings: {
					vertical: false,	
					verticalSwiping: false,
					slidesToShow: 3,
					slidesToScroll: 1
			  }
			}
		]
	});
	// --youtube video
	$(".various").fancybox({
        
		padding : [0, 0, 0, 0],
		width	: 854,
		height	: 480,
        maxWidth: '100%',
        aspectRatio: true,
		fitToView	: true,
//		width		: '100%',
//		height		: '34%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	//--галереї
	$(".fancybox-thumb").fancybox({
		padding : 0,
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
//----модальні вікна
	//--колбек форма
	$(".js-modal_callback, .js-modal_request, .js-modal_success, .js-modalResponce_success").fancybox({
		padding : [30, 10, 35, 10],
		margin : [0, 5, 0, 5],
		autoWidth: true,
		//minWidth: 285,
		autoHeight: true,
		minHeight: 0,
		tpl		: {
			wrap     : '<div class="fancybox-wrap b-modal" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
			image    : '<img class="fancybox-image" src="{href}" alt="" />',
			error    : '<p class="fancybox-error">Запрашиваемый контент недоступен.<br/>Пожалуйста, попробуйте позже.</p>',
			closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			prev     : '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		},
		helpers	: {
			title	: null
		}
	});
	$(".js-btn_callback").click(function(event){	//призначаємо модалку колбека на кнопку
		event.preventDefault();
		$(".js-modal_callback").trigger("click");
	});
	$(".js-btn_request").click(function(event){	//призначаємо модалку бронювання на кнопку
		event.preventDefault();
		$(".js-modal_request").trigger("click");
	});
//	$(".js-btn_success").click(function(event){	//призначаємо модалку успішної заявки на приховане посилання
//		event.preventDefault();
//		$(".js-modal_success").trigger("click");
//	});
//	$(".js-btn_success").click(function(event){	//призначаємо модалку успішного відгуку на приховане посилання
//		event.preventDefault();
//		$(".js-modalResponce_success").trigger("click");
//	});
	//вивід кількості файлів для відвантаження
	$('.b-responseForm input[type="file"]').change(function () {
		var  filesNum = this.files.length
			,filesText = filesNum  + " файл"
			,filesField = $('.b-responseForm .b-upload__text')	//вивід тексту к-ті файлів
			;
			
		if (filesNum > 4){
			filesText+="ов";
		} else if (filesNum > 1){
			filesText+="а";
		}
		filesField.text(filesText + " выбрано");
	});
});
 
var $galleryMsnry = $(".b-gallery__container.js-masonry__container").masonry(
    {
        itemSelector: '.b-gallery__item',
        // columnWidth:  function( containerWidth ) { return containerWidth / columns; },
        columnWidth: '.b-gallery__item',
		percentPosition: true
    });

$galleryMsnry.imagesLoaded().progress( function() {
  $galleryMsnry.masonry('layout');
});