var slideImgs,
    srcs = [
        'images/slideshow-1.jpg',
        'images/slideshow-2.jpg',
        'images/slideshow-3.jpg'
    ],
    baseURL,
    container,
    slideNextImage = function(event) {

        var imageIndex;

        srcs.forEach(function(item, index) {

            var url = baseURL + '/' + item;
            if(url == this.src) {
                imageIndex = index;
                return false;
            }

        }.bind(this));

        if(imageIndex != null) {

            if(event.animationName == 'fadeOut') {

                this.classList.remove('fadeOut');

            }

            if(event.animationName == 'fadeIn') {

                this.classList.remove('fadeIn');
                this.classList.add('fadeOut');

                if((imageIndex + 1) <= (slideImgs.length - 1)) {

                    slideImgs[imageIndex + 1].classList.add('fadeIn');

                } else {

                    slideImgs[0].classList.add('fadeIn');

                }

            }

        }

        return true;

    },
    insertSlideshow = function() {

        if(window.innerWidth <= 1000) {
            return true;
        }

        var code = '';

        container = document.getElementById('slideshow');
        baseURL = container.dataset.baseUrl;

        srcs.forEach(function(item, index) {

            item = baseURL + '/' + item;
            code += "\n<img class='slide-img' src='" + item + "'";
            code += " alt='image of cows in slideshow " + index + "1'/>\n";

        });

        container.innerHTML = code;

        slideImgs = document.getElementsByClassName('slide-img');

        Array.from(slideImgs).forEach(function(img) {

            img.addEventListener('animationend', slideNextImage);
            img.addEventListener('webkitAnimationEnd', slideNextImage);
            img.addEventListener('oAnimationEnd', slideNextImage);
            img.addEventListener('msAnimationEnd', slideNextImage);

        });

        slideImgs[0].classList.add('fadeIn');

    };

document.addEventListener('DOMContentLoaded', insertSlideshow, { once: true });

window.onresize = insertSlideshow;