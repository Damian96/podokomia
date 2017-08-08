var modal;

$(window).on('load', function() {
    modal = $('#servImgModal');

    var images = $('.service-img');
    var modalImg = $("#modImg01");
    var captionText = $("#modCaption");

    images.click(function() {
        modal.show();
        $(window).on('keydown', escapeModal);
        modalImg.attr('src', $(this).attr('src'));
        captionText.html($(this).attr('alt'));
    });

    var span = modal.find('.close');

    span.click(function() {
        modal.hide();
        $(window).off('keydown');
    });
    
    modalImg.click(function() {
       window.location.replace($(this).attr('src')); 
    });
});

function escapeModal(event) {
    if(event.keyCode == 27) {
        modal.hide();
    }
    return true;
}