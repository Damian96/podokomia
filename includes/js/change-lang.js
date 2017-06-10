var body, html, body_id, pageNameEl, pageNameEn, hreflang, tweets;

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);

        }
    }
    return "";
}

function setElements() {
    body = $("body"), html = $("html"), body_id = $("body").attr("id"), pageNameEl = $("body").attr("pg_title_el"), pageNameEn = $("body").attr("pg_title_en"), hreflang = $("link[rel='alternate']");
}

/**
  * Changes the title and html lang attribute to the specified language.
  * @param e Boolean True equals to greek, false to english.
  * @return void
  */
function changeHead(e) {
    if(e) {
        document.title = "Ποδοκομία Αγελάδων - " + pageNameEl;
        html.attr("lang", "el-gr");
    } else {
        document.title = "Cattle Hoof Trimming " + pageNameEn;
        html.attr("lang", "en-uk");
    }
}

/**
  * Changes the page content to the specified language.
  * @param e Boolean True equals to greek, false to english.
  * @return void
  */
function changeContent(e) {
    var t;
    if(e) {
        $("*:not(html)").each(function() {
            t = $(this).attr("langtype");
            if(t === "el") {
                $(this).show()
            } else if(t ==="en") {
                $(this).hide();
            }
        });
    } else {
        $("*:not(html)").each(function() {
            t = $(this).attr("langtype");
            if(t === "el") {
                $(this).hide()
            } else if(t ==="en") {
                $(this).show();
            }
        });
    }
}

$(window).on('load', function() {
    var e = getCookie("prefLang");
    if("en" == e) {
        changeHead(false);
        changeContent(false);
    } else {
        changeHead(true);
        changeContent(true);
    }
});

$(document).ready(setElements());

$(".l-img").click(function() {
    var e = $(this).attr("src");
    if(e.indexOf("gr.ico") != -1) {
        changeHead(true);
        changeContent(true);
        setCookie("prefLang", "el", 5)
    } else if(e.indexOf("uk.ico") != -1) {
        changeHead(false);
        changeContent(false);
        setCookie("prefLang", "en", 5)
    };
});