function onReady() {
    setTimeout(function() {
        $("img").css("filter", "blur(0px)");
        $("img").css("-webkit-filter", "blur(0px)");
    }, 1e3)
}
$(document).ready(onReady());