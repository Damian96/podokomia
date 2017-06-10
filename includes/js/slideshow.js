var prevImg = 0,
    slideImgs = new Array;

$(".slide-img").each(function() {
    slideImgs.push($(this))
});

$(".slide-img:not(:first-of-type)").css("opacity", "0");

var lastImg = slideImgs.length - 1;

setInterval(function() {
    var s;
    switch (prevImg) {
        case lastImg:
            s = 0;
            break;
        default:
            s = prevImg + 1
    }
    slideImgs[prevImg].animate({
        opacity: 0
    }, 1500, function() {
        $(this).css("opacity", "0")
    });
    slideImgs[s].animate({
        opacity: 1
    }, 1500, function() {
        $(this).css("opacity", "1")
    });
    prevImg = s
}, 1500);