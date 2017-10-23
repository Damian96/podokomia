var originalImages, modal, modalContent, modalImg, captionText, modalImgIndex;

$(window).on('load', function() {
    modal = $('#servImgModal');
    modalContent = modal.find('.modal-content');
    modalImg = $("#modImg01");
    captionText = $("#modCaption")
    originalImages = $('.service-img');
    var span = modal.find('.close');

    originalImages.click(function() {
        modal.show();
        modalImgIndex = getIndexOfClickedImg($(this).attr('src'));
        $(window).on('keydown', escapeModal);
        modalContent.attr('href', $(this).attr('src'));
        modalImg.attr('src', $(this).attr('src'));
        captionText.html($(this).attr('alt'));
        setTimeout(function() {
            $('body').on('click', destroyModal);
        }, 0);
    });

    span.click(function() {
        hideModal();
    });

    modal.find('.glyphicon').click(handleControlClick);
});

function escapeModal(event) {
    if(event.keyCode == 27) {
        hideModal();
    }
    return true;
}

function destroyModal(event) {
    if((event.target.id !== 'modImg01') && (event.target.id !== 'modCaption')) {
        if((event.target.id !== 'modal-controls') && !event.target.classList.contains('glyphicon')) {
            hideModal();
        }
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

function handleControlClick(event) {
    var newIndex, newImage,
        length = originalImages.length - 1;
    if(event.target.classList.contains('glyphicon-arrow-left')) {
        if((modalImgIndex - 1) >= 0) {
            newIndex = modalImgIndex - 1;
        } else {
            newIndex = length;
        }
    } else if(event.target.classList.contains('glyphicon-arrow-right')) {
        if((modalImgIndex + 1) <= length) {
            newIndex = modalImgIndex + 1;
        } else {
            newIndex = 0;
        }
    } else {
        return;
    }
    newImage = originalImages.eq(newIndex);
    modalImg.attr('src', newImage.attr('src'));
    captionText.html(newImage.attr('alt'));
    modalContent.attr('href', newImage.attr('src'));
    modalImgIndex = newIndex;
    return true;
}

function getIndexOfClickedImg(src) {
    var number;
    originalImages.each(function() {
        if($(this).attr('src') === src) {
            number = $(this).index();
            return false;
        }
    });
    return number;
}