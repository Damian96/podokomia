var prevImg = 0,
    slideImgs,
    srcs = [
        'images/slideshow-1.jpg',
        'images/slideshow-2.jpg',
        'images/slideshow-3.jpg'
    ],
    baseURL,
    container;

document.addEventListener('DOMContentLoaded', function() {

    'use strict';

    var code = '';

    container = document.getElementById('slideshow');
    baseURL = container.dataset.baseUrl;

    for(var i=0;i < srcs.length;i++) {

        code += "\n<img class='slide-img' src='" + baseURL + '/' + srcs[i] + "'/>\n";

    }

    container.innerHTML = code;

    slideImgs = document.getElementsByClassName('slide-img');

    Array.from(slideImgs).forEach(function(img) {

        img.addEventListener('animationend', function(event) {

            var index;

            for(var i=0;i < srcs.length;i++) {

                if(srcs[i] === event.target.getAttribute('src')) {

                    index = i;
                    break;

                }

            }

            if(index != null) {

                if(event.animationName === 'fadeOut') {

                    event.target.classList.remove('fadeOut');

                }

                if(event.animationName === 'fadeIn') {

                    event.target.classList.remove('fadeIn');
                    event.target.classList.add('fadeOut');

                    if((index + 1) <= (slideImgs.length - 1)) {

                        slideImgs[index + 1].classList.add('fadeIn');

                    } else {

                        slideImgs[0].classList.add('fadeIn');

                    }

                }

            }

            return true;

        });

    });

    slideImgs[0].classList.add('fadeIn');

});