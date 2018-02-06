var originalImages,
    modal,
    modalContent,
    modalImg,
    captionText,
    modalImgIndex,
    modalControls,
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
    destroyModal = function(event) {

        if(event.type == 'keydown' && event.keyCode == 27) {

            hideModal();

        } else if((event.type == 'click') && (!event.target.classList.contains('image-modal') || event.target.id == 'modal-image-container')) {

            hideModal();

        }

        return true;

    },
    arrangeModalImage = function() {

        if(this.offsetHeight < modalContent.offsetHeight) {

            modalContent.style.paddingTop = ((modalContent.offsetHeight - this.offsetHeight) / 2) + 'px';

        }

        modalImg.style.opacity = 1;

    },
    handleControlClick = function(event) {

        var newIndex,
            newImage,
            length = originalImages.length - 1;

        if(event.target.classList.contains('icon-left-big')) {

            if((modalImgIndex - 1) >= 0) {

                newIndex = modalImgIndex - 1;

            } else {

                newIndex = length;

            }

        } else if(event.target.classList.contains('icon-right-big')) {

            if((modalImgIndex + 1) <= length) {

                newIndex = modalImgIndex + 1;

            } else {

                newIndex = 0;

            }

        } else {
            return true;
        }

        modalImg.style.opacity = 0;
        modalContent.style.paddingTop = '';
        newImage = originalImages[newIndex];
        modalImg.addEventListener('load', arrangeModalImage, { once: true });
        modalImg.src = newImage.src;
        captionText.innerText = newImage.alt;
        modalContent.href = newImage.src;
        modalContent.title = newImage.alt;
        modalImgIndex = newIndex;

        return true;

    },
    hideModal = function() {

        modal.style.display = 'none';
        window.removeEventListener('keydown', destroyModal);
        modal.removeEventListener('click', destroyModal);
        modalContent.href = modalContent.src = captionText.innerText = '';
        modalContent.style.paddingTop = '';

    },
    arrangeIcons = function() {

        Array.from(modalControls).forEach(function(value) {
            'use strict';

            var top = modalContent.offsetTop + modalContent.offsetHeight / 2 - value.offsetHeight / 2,
                left = modalContent.offsetLeft;

            value.style.top = top + 'px';

            if(value.classList.contains('icon-left-big')) {

                value.style.left = left + 'px';

            } else {

                value.style.left = (left + modalContent.offsetWidth - value.offsetWidth) + 'px';

            }

        });

    };

document.addEventListener('DOMContentLoaded', function() {

    if(window.innerWidth >= 768) {

        var span = document.querySelector('#modal-image-container .close');

        modalControls = document.querySelectorAll("#modal-image-container [class^='icon']");
        modal = document.getElementById('modal-image-container');
        modalContent = document.querySelector('#modal-image-container .image-modal-content');
        modalImg = document.getElementById('main-modal-image');
        captionText = document.getElementById('modal-caption');
        originalImages = document.getElementsByClassName('modal-image');

        Array.from(originalImages).forEach(function(image) {

            image.addEventListener('click', function() {

                modal.addEventListener('click', destroyModal);
                window.addEventListener('keydown', destroyModal, { once: true });
                modal.style.display = 'block';
                if(document.querySelector('main').classList.contains('services')) {

                    arrangeIcons();

                }
                modalImgIndex = getIndexOfClickedImg(this.src);
                modalContent.href = this.src;
                modalContent.title = this.alt;

                modalImg.addEventListener('load', arrangeModalImage, { once: true });

                modalImg.src = this.src;
                captionText.innerText = this.alt;

            });

        });

        span.onclick = hideModal;

        if(document.querySelector('main').classList.contains('services')) {

            Array.from(modalControls).forEach(function(icon) {

                icon.onclick = handleControlClick;

            });

        }

    } else if(window.innerWidth < 768 && document.querySelectorAll('.modal-image').length > 0) {

        Array.from(document.querySelectorAll('.modal-image')).forEach(function(image) {
            image.addEventListener('click', function() {
                window.open(this.src, '_blank');
            });
        });
    }

}, {
    once: true
});