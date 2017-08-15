function onReady() {
	setTimeout(function() {
        if($(window).innerWidth() <= 980) {
            var contentHt = $('aside').height() + $('aside').next().height();
            $('main').css('min-height', contentHt + 'px');
        } else {
            var contentHt = $('aside').next().height();
            $('main').css('min-height', '1200px');
            $('aside').height(contentHt).find('iframe').css({ width: '100%' });
        }
	}, 2000);
}
$(document).ready(onReady());