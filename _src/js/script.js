@@include('jquery-1.12.4.js');
jQuery(function() {

	@@include('variables.js'); // тут переменные
	@@include('functions.js'); // все функции



	preventDefault() // отключаем кнопки
	inputPlaceholdersStyle(); // Преобразуем placeholder в div



	$(window).on('load', function() {
		postButtonsSizeCalc(); // подгоняем ширину кнопок внизу поста


	});
});
