// JavaScript Document
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elEmail = document.getElementById('email');
var firstName = document.getElementById('firstname');
var lastName = document.getElementById('lastname');
var phoneNumber = document.getElementById('phone');
var elComments = document.getElementById('comments');
var digitsRegex = /^\d{10}$/;

function checkName(minLength, inputId, feedback, form_group)
{
	var regex = /^[A-Za-z'-]+$/ ;
	var el = document.getElementById(inputId); 
	var elMsg = document.getElementById(feedback); 
	var main_group = document.getElementById(form_group)
	if (el.value.length >= minLength && el.value.match(regex)) 
	{     			
		elMsg.innerHTML =''; 	
		main_group.classList.remove("has-error");
		main_group.classList.add("has-success")
	} 
	else 
	{                                              				elMsg.innerHTML = inputId.toUpperCase() + ' must be ' +minLength+' characters or more'; 
		main_group.classList.add("has-error");		
	}
	
}

function checkData(minLength, inputId, feedback, form_group) 
{   
	var el = document.getElementById(inputId); 
	var elMsg = document.getElementById(feedback); 
	var main_group = document.getElementById(form_group)
	if (el.value.length < minLength) 
	{     			
		elMsg.innerHTML = inputId.toUpperCase() + ' must be ' +minLength+' characters or more'; 
		main_group.classList.add("has-error");
	} 
	else 
	{                                              						
		elMsg.innerHTML =''; 	
		main_group.classList.remove("has-error");
		main_group.classList.add("has-success")
	}
}
function validatePhone() 
{
	var phone_number_feedback = document.getElementById('phoneFeedback');
	var phone_number_group = document.getElementById('phone_number_group');
	if (phoneNumber.value.match(digitsRegex))
	{
		phone_number_feedback.innerHTML = "";
		phone_number_group.classList.remove("has-error");
		phone_number_group.classList.add("has-success");
	}
	else
	{
		phone_number_feedback.innerHTML = "Invalid phone number";
		phone_number_group.classList.add("has-error");
	}
		
}
function validateEmail(email) 
{
	var emailVar = document.getElementById(email);
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var elMsg = document.getElementById('emailFeedback');
	var email_group = document.getElementById('email_address_group');
	if (emailVar.value.match(validRegex))
	{
		//code to display a correct email was entered
		elMsg.innerHTML = "";
		email_group.classList.remove("has-error");
		email_group.classList.add("has-success");
	}
	else
	{
		//code to display an incorrect email was entered
		elMsg.innerHTML = "Invalid email was entered";
		email_group.classList.add("has-error");
	}
}

function validateComments() 
{
	var elCommentsMsg = document.getElementById('commentsFeedback');
	var elCommentsGroup = document.getElementById('comments_group');
	if (elComments.value.length < 1) {
		elCommentsMsg.innerHTML = "Comments section cannot be empty";
		elCommentsGroup.classList.add("has-error");	
	}
	else 
	{
		elCommentsGroup.classList.remove("has-error");
		elCommentsGroup.classList.add("has-success");
		elCommentsMsg.innerHTML="";
	}
}
elUsername.addEventListener('blur', function() {
	checkData(6,'username','unFeedback','user_name_group');
	},false);
elPassword.addEventListener('blur', function() {
	checkData(6,'password','pwFeedback','password_group');
	},false);
elEmail.addEventListener('blur', function() {
	validateEmail('email');
	},false);

elComments.addEventListener('blur', function() {
	validateComments();
}, false);

phoneNumber.addEventListener('blur', function() {
	validatePhone();
}, false);

firstName.addEventListener('blur', function() {
	checkName(2, "firstname", "fnFeedback", "first_name_group");
});
lastName.addEventListener('blur', function() {
	checkName(2, "lastname", "lnFeedback", "last_name_group");
});
	//we can check if the form-group id for all form-groups has a "has-error" or "has-success" on it
	//if not we add it to that class - that is all we have to do