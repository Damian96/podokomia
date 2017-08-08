$(window).on('load', function() {
    var modal = $('#servImgModal');

    var images = $('.service-img');
    var modalImg = $("#modImg01");
    var captionText = $("#modCaption");

    images.click(function() {
        modal.show();
        modalImg.attr('src', $(this).attr('src'));
        captionText.html($(this).attr('alt'));
    });

    var span = modal.find('.close');

    span.click(function() {
        modal.hide();
    });
});