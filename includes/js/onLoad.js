function onReady() {
	setTimeout(function() {
		var contentHt = $('aside').next().height();
		$('main').css('min-height', '1000px');
		$('aside').height(contentHt).find('iframe').css({ width: '100%' });
	}, 1000);
}
$(document).ready(onReady());