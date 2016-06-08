var getCurrentImage = function () {
        var i,
            //gets all the images of slideShows
            slideShows = document.getElementsByClassName("slideShow");

        //loops through all slideShows images
        for (i = 0; i < slideShows.length; i++) {

            //checks if the current loop is the current image on slideShow
            if (slideShows[i].style.display == "block") {
                //makes current slide to disapper
                slideShows[i].style.display = "none";
                //return the id of current slide
                return parseInt(slideShows[i].id);
            }
        }
    },

    //goes to previous image on slideShow
    previous = function () {
        var idOfImg = getCurrentImage();
        idOfImg = (idOfImg == 1) ? 5 : idOfImg - 1;
        document.getElementById(idOfImg).style.display = "block";
    },

    //goes to the next image on side show
    next = function () {
        var idOfImg = getCurrentImage();
        idOfImg = (idOfImg == 5) ? 1 : idOfImg + 1;
        document.getElementById(idOfImg).style.display = "block";
    },

    //sets up a timer so slideShow goes to next slide every 5 seconds
    setup = function () {
        setInterval(next, 5000);
    }();

//sets up event listener for when user clicks on previous button
document.getElementById("previous").addEventListener("click", previous);
//sets up event listener for when user clicks on next button
document.getElementById("next").addEventListener("click", next);