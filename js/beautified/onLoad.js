document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    setTimeout(function() {
        'use strict';
        var aside = document.querySelector('aside'),
            contentHeight;

        if(aside == null) {

            return true;

        }

        if(window.innerWidth <= 980) {
            contentHeight = aside.offsetHeight + aside.nextElementSibling.offsetHeight;

            document.querySelector('main').style.minHeight = contentHeight + 'px';

        } else {
            contentHeight = aside.nextElementSibling.offsetHeight;

            document.querySelector('main').style.minHeight = '1200px';
            aside.style.height = contentHeight + 'px';
            if(document.querySelector('aside iframe') != null) {

                document.querySelector('aside iframe').style.width = '100%';

            }

        }

    }, 2000);

}, {
    once: true
});