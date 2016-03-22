<?php
$title = "Home";
$description = "Come and view our Website for our shop Bubbles Bargain World and the big range of products we have. We have Savings you'll love.";
$keywords = "shop, savings, discount, bubbles, bargain, world, west, sussex, bognor, regis, local, cards, toys, sweets, character, merchandise, party, arts, craft, novelty, gifts, stationary, glassware, baby, plaque, sign, souvenirs";
include "inc/header.php";
?>
    <!-- Script to make slideshow work -->
    <script type="text/javascript" src="/lib/slideshow.js"></script>

    <!-- Container for slideshow -->
    <div id="slideshow">

        <!-- the slideshow navaigation images -->
        <img class="slideshownav" id="previous" src="images/previous.svg" alt="Previous Image">
        <img class="slideshownav" id="next" src="images/next.svg" alt="Next Image">

        <!-- the images for slidehow -->
        <img class="slideshow" id="1" src="images/store.jpg" alt="A image of a product" style="display:block;">
        <img class="slideshow" id="2" src="images/display1.jpg" alt="A image of a product" style="display:none;">
        <img class="slideshow" id="3" src="images/display2.jpg" alt="A image of a product" style="display:none;">
        <img class="slideshow" id="4" src="images/card1.jpg" alt="A image of a product" style="display:none;">
        <img class="slideshow" id="5" src="images/party1.jpg" alt="A image of a product" style="display:none;">
    </div>

    <p>Welcome to Bubblesbargainworld.co.uk, one of the England's South Coast's leading retailer with a relentless drive
        to exceed expectations. We dedicate to provide you the best shopping experience at great discount prices.</p>

    <p>Trading 7 days a weeks, Bubbles Bargain World offers you the hottest bargain which means you do not have to
        travel far to make a bargain purchase. We stock a wide selection of goods ranging from cards, fancy dress, toys,
        party item, flowers and pet supplies.</p>

    <!-- The Facebook feed div -->
    <div class="fb-page" data-href="https://www.facebook.com/Bubbles-Bargain-World-1553944361587066"
         data-tabs="timeline" data-width="340" data-small-header="false" data-adapt-container-width="true"
         data-hide-cover="false" data-show-facepile="true"></div>

    <!-- Script for Facebook feed embed to set it up-->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- The actual Twitter feed-->
    <a class="twitter-timeline" href="https://twitter.com/BubblesBognor" data-widget-id="710121628290699265">Tweets by
        @BubblesBognor</a>

    <!-- The script for Twitter feed-->
    <script>!function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + "://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");</script>
<?php
include "inc/footer.html";
?>