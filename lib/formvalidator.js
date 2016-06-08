//validates the whole form
var validateForm = function (form) {
        var validInputs;

        //validate each required user input
        validInputs = (validateEmail(form.email.value) & validateMessage(form.message.value)) ? true : false;

        //if invalid give user message
        if (!validInputs) {
            formFeedback.innerHTML = '<span class="error">Please fix the following error/s:</span>';
        }

        //return true if input is valid false if invalid
        return validInputs;
    },
//validate the message input
    validateMessage = function (mess) {

        formFeedback.innerHTML = "";

        //checks is message is empty
        if (mess.trim() == "") {
            //give user message
            messageFeedback.innerHTML = "Message must be filled out.";
            message.style.borderColor = "red";
            return false;
        }
        else {
            message.style.borderColor = "initial";
            messageFeedback.innerHTML = "";
            removeErrors();
            return true;
        }
    },
//validate the emaill address
    validateEmail = function (mail) {

        formFeedback.innerHTML = "";

        var validEmailPattern = /\b[\w._-]+@[\w-]+.[\w]{2,}\b/im,
            result = validEmailPattern.test(mail);

        //checks if email is empty
        if (mail.trim() == "") {
            //give user message
            emailFeedback.innerHTML = "Email must be provided.";
            email.style.borderColor = "red";
            return false
        }
        //checks if email is valid
        else if (!result) {
            //give user message
            emailFeedback.innerHTML = "Email must be a valid email.";
            email.style.borderColor = "red";
            return false;
        }
        else {
            email.style.borderColor = "initial";
            emailFeedback.innerHTML = "";
            removeErrors();
            return true;
        }
    },
    removeErrors = function () {
        if (emailFeedback.innerHTML == "" && messageFeedback.innerHTML == "") {
            formFeedback.innerHTML = "";
        }
    };