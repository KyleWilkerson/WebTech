// JavaScript Document
var elMsg = document.getElementById('feedback');     			
var elUsername = document.getElementById('username');
function checkData(minLength, feedbackUN) 
{                             			
var elFeedback=document.getElementById(feedbackUN);	
if (elUsername.value.length < minLength) 
{                   								
	elMsg.innerHTML = 'Username must be '+minLength+' characters or more'; 
} 
else 
{                                               						
	elMsg.innerHTML = ''; 						
}
}
elUsername.addEventListener('blur', function() {
	checkData(5, 'feedbackUN');
	},false);
