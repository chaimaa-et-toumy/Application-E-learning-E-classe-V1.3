let   form = document.getElementById('form');
let username = document.getElementById('username');
let email = document.getElementById('email');
let password = document.getElementById('password');
let password2 = document.getElementById('password2');
//////////  side bar  //////////
function togglesidebar() {
    var sidebar = document.querySelector(".myside-bar");
    sidebar.classList.toggle("toggle-myside-bar");
}

//////////// sign up /////////////
document.getElementById("sign_up").addEventListener('click', () => {
    validateInputs();
});

function invalid (element, message) {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

function success (element){
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

let exp =/^[A-Za-z]{4,}$/;
let expEmail =/[a-z][0-9]*@[a-z]+\.[a-z]{2,3}/;

function validateInputs (){
    let usernameValue = username.value.trim();
    let emailValue = email.value.trim();
    let passwordValue = password.value.trim();
    let password2Value = password2.value.trim();
    var i = 0;

    if(usernameValue === '') {
        invalid(username, 'Username is required');
    } 
	else if (exp.test(usernameValue) == false){
		invalid(username, 'Provide a valid username ');
	} 
	else {
        success(username);
        i++; 
    }

    if(emailValue === '') {
        invalid(email, 'Email is required');
    } 
	else if (expEmail.test(emailValue) == false) {
		    invalid(email, 'Provide a valid email address');
	}
	else {
        success(email);
        i++; 
    }

    if(passwordValue === '') {
        invalid(password, 'Password is required');
    } else if (passwordValue.length < 6 ) {
        invalid(password, 'Password must be at least 6 character.')
    } else {
        success(password);
        i++; 
    }

    if(password2Value === '') {
        invalid(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        invalid(password2, "enter same password");
    } else {
        success(password2);
        i++; 
    }

    if (i == 4) 
        form.submit(); 
};
