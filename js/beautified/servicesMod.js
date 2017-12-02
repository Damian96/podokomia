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
    escapeModal = function(event) {

        if(event.keyCode == 27) {

            hideModal();

        }
    },
    destroyModal = function(event) {

        if(event.type == 'keydown' && event.keyCode == 27) {

            hideModal();

        } else if((event.type == 'click') && (!event.target.classList.contains('image-modal') || event.target.id == 'modal-image-container')) {

            hideModal();

        }

        return true;

    },
    handleControlClick = function(event) {

        var newIndex,
            newImage,
            length = originalImages.length - 1;

        if(event.target.classList.contains('icon-arrow-left')) {

            if((modalImgIndex - 1) >= 0) {

                newIndex = modalImgIndex - 1;

            } else {

                newIndex = length;

            }

        } else if(event.target.classList.contains('icon-arrow-right')) {

            if((modalImgIndex + 1) <= length) {

                newIndex = modalImgIndex + 1;

            } else {

                newIndex = 0;

            }

        } else {
            return true;
        }

        newImage = originalImages[newIndex];
        modalImg.addEventListener('load', function() {

            if(this.offsetHeight < modalContent.offsetHeight) {

                modalContent.style.paddingTop = ((modalContent.offsetHeight - this.offsetHeight) / 2) + 'px';

            }

        }, {
            once: true
        });
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
        modalImg.style.paddingTop = '';

    },
    arrangeIcons = function() {

        Array.from(modalControls).forEach(function(value) {
            'use strict';

            var top = modalContent.offsetTop + modalContent.offsetHeight / 2 - value.offsetHeight / 2,
                left = modalContent.offsetLeft;

            value.style.top = top + 'px';

            if(value.classList.contains('icon-arrow-left')) {
                value.style.left = left + 'px';
            } else {
                value.style.left = (left + modalContent.offsetWidth - value.offsetWidth) + 'px';
            }

        })

    };

document.addEventListener('DOMContentLoaded', function() {

    if(document.querySelector('main').classList.contains('services') || document.querySelector('main').classList.contains('articles')) {

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
                arrangeIcons();
                modalImgIndex = getIndexOfClickedImg(this.src);
                modalContent.href = this.src;

                modalImg.addEventListener('load', function() {

                    if(this.offsetHeight < modalContent.offsetHeight) {

                        modalContent.style.paddingTop = ((modalContent.offsetHeight - this.offsetHeight) / 2) + 'px';

                    }

                }, {
                    once: true
                });


                modalImg.src = this.src;
                captionText.innerText = this.alt;

            });

        });

        span.onclick = hideModal;

        Array.from(modalControls).forEach(function(icon) {

            icon.onclick = handleControlClick;

        });

    }

}, {
    once: true
});