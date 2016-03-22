var getCurrentImage = function () {
        var i, i2, idOfImg,
        //gets all the images of slideshows
            slideshows = document.getElementsByClassName("slideshow");

        //loops through all slideshows images
        for (i = 0; i < slideshows.length; i++) {

            //checks if the current loop is the current image on slideshow
            if (slideshows[i].style.display == "block") {

                //get the id of current slide
                idOfImg = slideshows[i].id;

                //loops through slideshow images again
                for (i2 = 0; i2 < slideshows.length; i2++) {
                    //makes all not to display
                    slideshows[i2].style.display = "none";
                }
                //returns the int of id of current slide
                return parseInt(idOfImg);
            }
        }
    },
//goes to previus image on slideshow
    previous = function () {
        var idOfImg,
            idOfImg = getCurrentImage();
        if (idOfImg == 1) {
            idOfImg = 5;
        }
        else {
            idOfImg--;
        }
        document.getElementById(idOfImg).style.display = "block";
    },
//goes to the next image on slidehow
    next = function () {
        var idOfImg,
            idOfImg = getCurrentImage();
        if (idOfImg == 5) {
            idOfImg = 1;
        }
        else {
            idOfImg++;
        }
        document.getElementById(idOfImg).style.display = "block";
    },
//sets up a timer so slideshow goes to next slide every 5 seconds
    setup = function () {
        setInterval(next, 5000);
    }();

//sets up event listener for when user clicks on previous button
document.getElementById("previous").addEventListener("click", previous);
//sets up event listener for when user clicks on next button
document.getElementById("next").addEventListener("click", next);