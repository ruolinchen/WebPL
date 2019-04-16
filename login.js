//Author: Sandy Gould (sjg5rv)

var loginForm = document.getElementById("login");
var username = document.getElementById("username-input");
var password = document.getElementById("pswd-input")

function usernameValidation(){
	var msg = document.getElementById("user-msg");

	if(username.value.length < 3){
		msg.textContent = "Username is too short";
		msg.style.color = "red";
		msg.style.fontSize = "2vmax";
		return false;
	}
	else{
		msg.textContent = "";
		return true;
	}
}

function passwordValidation(){
	var msg = document.getElementById("pswd-msg");

	if(password.value.length < 8){
		msg.textContent = "Password too short";
		msg.style.color = "red";
		msg.style.fontSize = "2vmax";
		return false;
	}
	else{
		msg.textContent = "";
		return true;
	}
}

function validateForm(){
	pswd_valid = passwordValidation();
	user_valid = usernameValidation();

	if(user_valid && pswd_valid){
		return true;
	}
	else{
		alert("Please fill out both username and password fields with valid entries");
		return false;
	}

}

username.addEventListener("blur", usernameValidation, false);
password.addEventListener("blur", passwordValidation, false);
