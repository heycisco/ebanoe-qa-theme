jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});


jQuery(document).ready(function ($) {
var contentheight = $( "main" ).height();
var bgcount = Math.round(contentheight / 254);
$.each(new Array(bgcount), function() {
	$('<div></div>').clone().appendTo('.container-bg');
});
});


// (function($){'use strict';$(window).load(function(){$('section.feed').masonry({itemSelector:'article',percentPosition:true,horizontalOrder:true});});}(jQuery));


// wow = new WOW({
// 	boxClass: 'feed-item',
// 	offset: 50,
// 	mobile: true,
// 	live: false
// })
// wow.init();

