//goes to previus image on slideshow
var previous = function () {
	var i, i2, idOfImg, 
	slideshows = document.getElementsByClassName("slideshow");

	for (i = 0; i<slideshows.length; i++) {
		if (slideshows[i].style.display == "block") {
			idOfImg = slideshows[i].id;
			for (i2 = 0; i2<slideshows.length; i2++) {
				slideshows[i2].style.display = "none";
			}
			idOfImg = parseInt(idOfImg);
			if (idOfImg == 1) {
				idOfImg = 5;
			}
			else {
				idOfImg --;
			}
			document.getElementById(idOfImg).style.display = "block";
			break;
		}
	}
},
//goes to the next image on slidehow
next = function () {
	var i, i2, idOfImg, 
	slideshows = document.getElementsByClassName("slideshow");

	for (i = 0; i<slideshows.length; i++) {
		if (slideshows[i].style.display == "block") {
			idOfImg = slideshows[i].id;
			for (i2 = 0; i2<slideshows.length; i2++) {
				slideshows[i2].style.display = "none";
			}
			idOfImg = parseInt(idOfImg);
			if (idOfImg == 5) {
				idOfImg = 1;
			}
			else {
				idOfImg ++;
			}
			document.getElementById(idOfImg).style.display = "block";
			break;
		}
	}
},
//sets up a timer so slideshow goes to next slide every 5 seconds
setup = function () {
	setInterval(next, 5000);
}();

//sets up event listener for when user clicks on previous button
document.getElementById("previous").addEventListener("click", previous);
//sets up event listener for when user clicks on next button
document.getElementById("next").addEventListener("click", next);