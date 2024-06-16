// JavaScript Document
function checkData() 
{                             								// Declare function  
	var elMsg = document.getElementById('feedback');     			// Get feedback element  
	var elMsg2 = document.getElementById('feedback2');
	var elUsername = document.getElementById('username');		// Get username input 
	var userNameGroup = document.getElementById('username_group');
	var elPassword = document.getElementById('password');
	var passwordNameGroup = document.getElementById('password_group');
	
	userNameGroup.classList.remove('has-error', 'has-success'); // Remove both classes to reset state
	passwordNameGroup.classList.remove('has-error', 'has-success'); // Removes both classes to reset state
	if (elUsername.value.length < 5) 
	{                   								// If username too short    
		userNameGroup.classList.add('has-error');
		elMsg.innerHTML = 'Username must be 5 characters or more'; // Set msg  
	} 
	else //otherwise
	{                                     
		userNameGroup.classList.add('has-success');
		elMsg.innerHTML = ''; 						// Clear message  
	}
	if (elPassword.value.length < 5) 
	{                   								// If username too short    
		passwordNameGroup.classList.add('has-error');
		elMsg2.innerHTML = 'Password must be 5 characters or more'; // Set msg  
	} 
	else //otherwise
	{                                     
		passwordNameGroup.classList.add('has-success');
		elMsg2.innerHTML = ''; 						// Clear message  
	}
}

function checkEmail() 
{
	var emailEl=document.getElementById('email');
	var validRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	if (emailEl.value.match(validRegex)) 
	{
		
	}
	else 
	{
		
	}
}



var el = document.getElementById('username');
el.addEventListener('blur', checkData, false);

var fnel = document.getElementById('firstname');
el.addEventListener('blur', checkData, false);

var lnel = document.getElementById('lastname');
el.addEventListener('blur', checkData, false);

var phoneel = document.getElementById('phone');
el.addEventListener('blur', checkData, false);

var emailEl = document.getElementById('email');
emailEl.addEventListener('blur',checkEmail,false);
