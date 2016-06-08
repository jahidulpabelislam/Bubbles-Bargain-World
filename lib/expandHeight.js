//used to expand height of section if content is too short for screen
var expand = function () {

	document.querySelector("section").style.height = "auto";

    //calculates the height of view at the moment
    var height = $('header').outerHeight(true) + $('section').outerHeight(true) + $('footer').outerHeight(true);
    
    //checks if height is shorter than screen height
    if (height < $(window).height()) {
        
        //section is extended to fill the difference
        $('section').height(($(window).height() - height) + $('section').height());
    }
};

window.addEventListener("load", expand);
window.addEventListener("orientationchange", expand);
document.addEventListener("onscoll", expand);