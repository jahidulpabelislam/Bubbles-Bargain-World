//used to expand height of section if content is too short for screen
var expand = function () {
	//calculates the height of view at the moment
    var height = $('section').height() + $('#header').height() + $('nav').height() + $('footer').height();

    //checks if height is shorter than screen height
    if (height < $(window).height()) {
    	//if shorter, section is extended to fill the difference
        $('section').height(($(window).height() - height) + $('section').height());
    }
}();