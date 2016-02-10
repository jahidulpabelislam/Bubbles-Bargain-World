var setup = function () {
	setInterval(next, 5000);
},
previous = function () {
	var i, idofimg, slideshows = document.getElementsByClassName("slideshow");
	for (i=0; i<slideshows.length; i++) {
		if (slideshows[i].style.display == "block") {
			idofimg = slideshows[i].id;
			for (i2=0; i2<slideshows.length; i2++) {
				slideshows[i2].style.display = "none";
			}
			idofimg = parseInt(idofimg);
			if (idofimg == 1) {
				idofimg = 5;
			}
			else {
				idofimg --;
			}
			document.getElementById("" + idofimg + "").style.display = "block";
			break;
		}
	}
},
next = function () {
	var i, idofimg, slideshows = document.getElementsByClassName("slideshow");
	for (i=0; i<slideshows.length; i++) {
		if (slideshows[i].style.display == "block") {
			idofimg = slideshows[i].id;
			for (i2=0; i2<slideshows.length; i2++) {
				slideshows[i2].style.display = "none";
			}
			idofimg = parseInt(idofimg);
			if (idofimg == 5) {
				idofimg = 1;
			}
			else {
				idofimg ++;
			}
			document.getElementById("" + idofimg + "").style.display = "block";
			break;
		}
	}
};

document.getElementById("previous").addEventListener("click", previous);
document.getElementById("next").addEventListener("click", next);
window.addEventListener("load", setup);