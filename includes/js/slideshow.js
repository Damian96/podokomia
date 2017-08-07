var prevImg = 0,
    slideImgs = [],
    lastImg,
    srcs = [
        'images/slideshow-1.jpg',
        'images/slideshow-2.jpg',
        'images/slideshow-3.jpg'
    ],
    container,
    imgHeight = 120;

$(window).on('load', function() {
    container = $('#slideshow');
    var code = '';
    $.each(srcs, function(index, item) {
        code += "\n<img class='slide-img' src='" + item + "'/>\n";
	});
    container.html(code);

    slideImgs = $('.slide-img');
    var heightSum = 0;
    slideImgs.each(function(index) {
        $(this).css('z-index', 10 + index + 1);
        if(index == 1) {
            heightSum += imgHeight;
            $(this).css('top', -imgHeight + 'px');
        } else if(index > 1) {
            heightSum += imgHeight;
            $(this).css('top', -heightSum + 'px');
        }
    });
	container.height(container.prev().height());
	$('header > div:nth-child(2)').height($('header > div:first-child').height());
    lastImg = slideImgs.length - 1;
});

$(document).ready(function() {
	setInterval(function() {
        var s;
        switch (prevImg) {
            case lastImg:
                s = 0;
                break;
            default:
                s = prevImg + 1
        }
        slideImgs.eq(prevImg).animate({
            opacity: 0
        }, 1500, function() {
            $(this).css("opacity", "0");
        });
        slideImgs.eq(s).animate({
            opacity: 1
        }, 1500, function() {
            $(this).css("opacity", "1");
        });
        prevImg = s
    }, 3000);
})