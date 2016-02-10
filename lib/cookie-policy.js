var getCookies = function () {
    var cookies = document.cookie.split(';');
    for (var i=0; i<cookies.length; i++){
        var cookie = cookies[i];
        if (cookie.indexOf("cookiesbanner=true") != -1) {
            clicked();
        }
    }
},
clicked = function() {
    document.getElementById("cookiebanner").style.display = 'none';
    setCookie();
},
setCookie = function() {
    var date = new Date();
    date.setTime(date.getTime() + (30*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
    document.cookie = "cookiesbanner=true" + expires + ";domain=.bubblesbargainworld.co.uk;path=/";
};
window.addEventListener("load", getCookies);
document.getElementById("ok").addEventListener("click", clicked);