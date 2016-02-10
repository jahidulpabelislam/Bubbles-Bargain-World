var validate = function (form) { 
  //validate each required user input

	var validinput = true;
	var message = "<p>Please fix the following errors:</p>";

  //Gets the postition of @
	var atpos = form.email.value.indexOf("@");
  //Gets the postition of the last .
	var dotpos = form.email.value.lastIndexOf(".");

  //checks if message is empty
  if (form.message.value == "") { 
   	//message is empty
   	message += "<p>Message must be filled out.</p>";
   	validinput= false; 
  }
  //checks if email is empty
  if (form.email.value == "") {
  	//email is empty
   	message += "<p>Email must be filled out.</p>";          
   	validinput= false;
  }

  //checks if email is valid
  else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
    //email is not valid
    message += "<p>Email must be a valid email.</p>";          
    validinput= false;
  }
    
  //if invalid give user message
  if(!validinput) {
   	document.getElementById("errors").innerHTML = message;
  }

  //return true if input is valid false if invalid
	return validinput;
},
messagevalidate = function (mess) { 
  //checks is message is empty
  if (mess.value == "") { 
   	//give user message
   	document.getElementById("errors").innerHTML = "<p>Message must be filled out.</p>";
  }
},
emailvalidate = function (mail) {
  //Gets the postition of @
	var atpos = mail.value.indexOf("@");
  //Gets the postition of the last .
	var dotpos = mail.value.lastIndexOf(".");

  //checks if email is empty
	if (mail.value == "") {
    //give user message
    document.getElementById("errors").innerHTML = "<p>Email must be filled out.</p>";          
  }
  //checks if email is valid
  else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.value.length) {
  	//give user message
   	document.getElementById("errors").innerHTML = "<p>Email must be a valid email.</p>";          
  }  
};