$(function(){
	var aboutUs = $(".aboutUs");
	var menu = $(".menu li a");
	var mes = "Якщо ви бачите цей текст, то ви, таки невдаха, або в мене криві руки. З повагою куратор творчої студії \"Костиль\""

	for (var i=0; i<menu.length; i++){
		menu.eq(i).hover(function() {

			/*switch($(this).attr('title')){
				case "events":
					mes = "Обо всем и обо всех из первых уст"
					break;
				case "places":
					mes = "Выбирайте заведение на Ваш вкус"
					break;
				case "people":
					mes = "Известные и не очень о своей любимой еде"
					break;
				case "food":
					mes = "Все, что вы хотели узнать, но боялись спросить"
					break;
				case "myCook":
					mes = "Приготовлено и опробовано мной"
					break;
				case "notes":
					mes = "По чуть-чуть обо всем"
					break;
			}*/
			var t=$(this)
			mes = $(this).attr('title');

			$(document).mousemove(function(e){
				
				var y = e.pagey;
				/* Stuff to do when the mouse enters the element */
				aboutUs.css({
					"position" : "absolute",
					"top" : e.pageY-100,
					"left":e.pageX,
					"z-index" : 30,
					"padding" : "10px",
					"width": '200px',
					"background" : "rgba(255,255,255,.6)",
					"border-radius" : "12px"
				})
			})

			aboutUs.stop().fadeIn(400);
			aboutUs.text(mes)
		}, function() {
			/* Stuff to do when the mouse leaves the element */
			aboutUs.stop().fadeOut(500);
		});
	}
	/*при наведенні мишки зявляється кнопка пошуку*/
	/*перевірка чи в .header_widget не встановлено display:none інакше все працюватиме навпаки*/
	if ($(".header_widget button").css('display') == 'none'){
		$(".header_widget").hover(function() {
			$(".header_widget button").css('display','block')
		}, function() {
			$(".header_widget button").css('display','none')
		});
	}



	/*инпут настройка*/
	$('input[name=s]').focus(function(event){
		$('input[name=s]').attr('value','');
	});
	$('input[name=s]').blur(function(event){
		$('input[name=s]').attr('value','Поиск');
	});
});