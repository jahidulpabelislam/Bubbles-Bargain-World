<?php
$title = "Contact";
$description = "Contact Information for our shop Bubbles Bargain World.";
$keywords = "shop, savings, discount, bubbles, bargain, world, west, sussex, bognor, regis, local, cards, toys, sweets, character, merchandise, party, arts, craft, novelty, gifts, stationary, glassware, baby, plaque, sign, souvenirs";
include '../inc/header.php';
?>
    <p>Have any questions you want to ask or feedback you want to tell us use the following to contact us.</p>
    <h2>Form</h2>
    <p id="errors">
        <?php
        if ($_POST['submit']) { //checks if user clicked submit
            $to = 'jahidul.pabel.islam@hotmail.com'; //the address to send mail to
            $subject = $_POST['subject']; //the subject user provided for message
            $message = $_POST['message']; //the message user wrote
            $email = $_POST['email']; //the email user provided to reply to
            $headers = 'From: contact@bubblesbargainworld.co.uk' . "\r\n" . 'Reply-To: ' . trim($email);
            if (trim($message) != "") { //checks if message is not empty
                if (trim($email) != "") { //checks if email is not empty
                    if (preg_match("/\b[\w._-]+@[\w-]+.[\w]{2,}\b/im", $email)) {
                        if (trim($subject) == "") {
                            $subject = 'Bubbles Bargain World Contact Form'; //if user didn't provide subject a default one is assigned
                        }
                        if (mail($to, $subject, $message, $headers)) { //try to send email
                            echo 'Your message has been sent!';
                        } else {
                            echo '<span class="required">Something went wrong, please try again!</span>';
                        }
                    }
                }
            }
        }
        ?>
    </p>

    <p id="emailmessage" class="required">
        <?php
        if (isset($email)) {
            if (trim($email) === "") { //checks if email is not empty
                echo "Email wasn't provided!";
            } else if (!preg_match("/\b[\w._-]+@[\w-]+.[\w]{2,}\b/im", $email)) {
                echo "Email wasn't valid!";
            }
        }
        ?>
    </p>
    <p id="messagemessage" class="required">
        <?php
        if (isset($message)) {
            if (trim($message) === "") { //checks if message is not empty
                echo "Message wasn't provided!";
            }
        }
        ?>
    </p>

    <form name="contactform" method="post" onsubmit="return validateForm(this)">
        <!--validate using JavaScript when submitted-->
        <p><span class="required">*</span> indicates a required field</p>

        <label for="email">Email <span class="required">*</span></label>
        <input type="email" name="email" placeholder="Enter your email here." required tabindex="1"
               oninput="validateEmail(this.value);" id="email">

        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Enter the subject here." tabindex="2" id="subject">

        <label for="message">Message <span class="required">*</span></label>
        <textarea name="message" placeholder="Enter your message here." required tabindex="3"
                  oninput="validateMessage(this.value);" id="message"></textarea>

        <button name="submit" type="submit">Submit</button>

    </form>
    <h2>Phone Number</h2>
    <p><a class="link" href="tel:+441243842209">+44 1243 842209</a></p>
    <h2>Email</h2>
    <p><a class="link" href="mailto:contact@bubblesbargainworld.co.uk">contact@bubblesbargainworld.co.uk</a></p>
    <h2>Social Media</h2>
    <p>Facebook: <a class="link" href="https://www.facebook.com/Bubbles-Bargain-World-1553944361587066"
                    target="_blank">/bubblesbargainworld</a></p>
    <p>Twitter: <a class="link" href="https://twitter.com/BubblesBognor" target="_blank">@BubblesBognor</a></p>
    <h2>Address</h2>
    <p>39 High Street,<br>
        Bognor Regis,<br>
        West Sussex,<br>
        PO21 1RS</p>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.596676121986!2d-0.6760231847678816!3d50.783049771225144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875ac42278a5aa5%3A0x843154c27bf11a78!2sBubbles+Bargain+World!5e0!3m2!1sen!2suk!4v1450465572350"
        allowfullscreen></iframe>
<?php
include '../inc/footer.html';
?>