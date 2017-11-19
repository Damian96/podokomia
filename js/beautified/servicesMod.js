var originalImages,
    modal,
    modalContent,
    modalImg,
    captionText,
    modalImgIndex,
    getIndexOfClickedImg = function(src) {

        var number;

        Array.from(originalImages).forEach(function(image, index) {

            if(image.src == src) {

                number = index;
                return false;

            }

        });

        return number;

    },
    escapeModal = function(event) {

        if(event.keyCode == 27) {

            hideModal();

        }
    },
    destroyModal = function(event) {

        if(event.type == 'keydown' && event.keyCode == 27) {

            hideModal();

        } else if(event.type == 'click') {

            if((event.target.id != 'modImg01') && (event.target.id != 'modCaption') && (event.target.id != 'modal-controls') && !event.target.classList.contains('glyphicon')) {

                hideModal();

            }
        }

        return false;

    },
    handleControlClick = function(event) {

        var newIndex,
            newImage,
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
            return true;
        }

        newImage = originalImages[newIndex];
        modalImg.src = newImage.src;
        captionText.innerText = newImage.alt;
        modalContent.href = newImage.src;
        modalImgIndex = newIndex;

        return true;

    },
    hideModal = function() {

        modal.style.display = 'none';
        window.removeEventListener('keydown', destroyModal);
        modal.removeEventListener('click', destroyModal);
        modalContent.href = modalContent.src = captionText.innerText = '';

    };

document.addEventListener('DOMContentLoaded', function() {

    var span = document.querySelector('#servImgModal .close'),
        modalControls = document.querySelectorAll('#servImgModal .glyphicon');

    modal = document.getElementById('servImgModal');
    modalContent = document.querySelector('#servImgModal .modal-content');
    modalImg = document.getElementById('modImg01');
    captionText = document.getElementById('modCaption');
    originalImages = document.getElementsByClassName('service-img');

    Array.from(originalImages).forEach(function(image) {

        image.addEventListener('click', function() {

            modal.addEventListener('click', destroyModal, { once: true });
            window.addEventListener('keydown', destroyModal, { once: true });
            modal.style.display = 'block';
            modalImgIndex = getIndexOfClickedImg(this.src);
            modalContent.href = this.src;
            modalImg.src = this.src;
            captionText.innerText = this.alt;

        });

    });

    span.onclick = hideModal;

    Array.from(modalControls).forEach(function(icon) {

        icon.onclick = handleControlClick;

    });

});