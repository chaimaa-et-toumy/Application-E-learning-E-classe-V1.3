const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
//////////  side bar  //////////
function togglesidebar() {
    var sidebar = document.querySelector(".myside-bar");
    sidebar.classList.toggle("toggle-myside-bar");
}

//////////// sign up /////////////
document.getElementById("sign_up").addEventListener('click', e => {
    // e.preventDefault();
    validateInputs();
});

function setError (element, message) {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

function setSuccess (element){
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const exp =/^[A-Za-z]{4,}$/;
const expEmail =/[a-z][0-9]*@[a-z]+\.[a-z]{2,3}/;

function validateInputs (){
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    var i = 0;

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } 
	else if (exp.test(usernameValue) == false){
		setError(username, 'Provide a valid username ');
	} 
	else {
        setSuccess(username);
        i++; 
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } 
	else if (expEmail.test(emailValue) == false) {
		    setError(email, 'Provide a valid email address');
	}
	else {
        setSuccess(email);
        i++; 
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 6 ) {
        setError(password, 'Password must be at least 6 character.')
    } else {
        setSuccess(password);
        i++; 
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "enter same password");
    } else {
        setSuccess(password2);
        i++; 
    }

    if (i == 4) 
        form.submit(); 
};
