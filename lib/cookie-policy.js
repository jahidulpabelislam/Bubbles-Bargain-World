//sets a new cookie & removes the cookie banner
var setCookie = function () {
        document.getElementById("cookiebanner").style.display = 'none';
        var date = new Date();
        date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000)); //add 30 days to current date
        var expires = "; expires=" + date.toGMTString();
        document.cookie = "cookiesbanner=true" + expires + ";domain=.bubblesbargainworld.co.uk;path=/"; //sets cookie
    },

//get all cookies
    getCookies = function () {
        //splits each cookie up
        var i, cookies = document.cookie.split(';');
        //loops through the cookies
        for (i = 0; i < cookies.length; i++) {
            //checks if the cookiebanner cookie is set
            if (cookies[i].indexOf("cookiesbanner=true") != -1) {
                //if set removes the banner and sets a new cookie
                setCookie();
            }
        }
    }();

//sets up event when user clicks 'ok' button on banner
document.getElementById("ok").addEventListener("click", setCookie);