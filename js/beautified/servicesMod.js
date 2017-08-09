var modal, modalContent, modalImg, captionText;

$(window).on('load', function() {
    modal = $('#servImgModal');
    modalContent = modal.find('.modal-content');
    modalImg = $("#modImg01");
    captionText = $("#modCaption");
    
    var images = $('.service-img'),
        span = modal.find('.close');

    images.click(function() {
        modal.show();
        $(window).on('keydown', escapeModal);
        modalContent.attr('href', $(this).attr('src'))
        modalImg.attr('src', $(this).attr('src'));
        captionText.html($(this).attr('alt'));
        setTimeout(function() {
            $('body').on('click', destroyModal);
        }, 0);
    });

    span.click(function() {
        hideModal();
    });
});

function escapeModal(event) {
    if(event.keyCode == 27) {
        hideModal();
    }
    return true;
}

function destroyModal(event) {
    if((event.target.id !== 'modImg01') && (event.target.id !== 'modCaption')) {
        hideModal();
    }
}

function hideModal() {
    modal.hide();
    $(window).off('keydown', escapeModal);
    $('body').off('click', destroyModal);
    modalContent.attr('href', '');
    modalImg.attr('src', '');
    captionText.html('');
}