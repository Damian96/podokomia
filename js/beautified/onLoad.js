document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    var aside = document.querySelector('aside'),
        contentHeight;

    if(window.innerWidth <= 980) {
        contentHeight = aside.offsetHeight + aside.nextElementSibling.offsetHeight;

        document.querySelector('main').style.minHeight = contentHeight + 'px';

    } else {
        contentHeight = aside.nextElementSibling.offsetHeight;

        document.querySelector('main').style.minHeight = '1200px';
        aside.style.height = contentHeight + 'px';
        document.querySelector('aside iframe').style.width = '100%';

    }

});