function postButtonsSizeCalc() {
	let maxWidth = Math.max.apply(null,
		$(postButtonsNav).map(function() {
			return $(this).innerWidth() + 4;
		}).get());
	let maxWidthOptimized = maxWidth.toFixed(1);
	$(postButtonsNav).css({ 'min-width': maxWidthOptimized + 'px' });
}

function preventDefault() {
	$('button').on('click', function(event) {
		event.preventDefault();
	});
}

function inputPlaceholdersStyle() {
	$(customisedInputs).each(function(i) {
		if ($(this).is('[placeholder]')) {
			let inputPlaceholderText = $(this).attr('placeholder');
			console.log(inputPlaceholderText);
		}
	});
	console.log('Надо сделать нормально эти хуйни');
}



