// Get references to the buttons and forms by their IDs
const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

// Add a click event listener to the sign-up button
signUpButton.addEventListener('click', function() {
	// When the sign-up button is clicked, hide the sign-in form
    signInForm.style.display = "none";
	// Display the sign-up form
    signUpForm.style.display = "block";
});

// Add a click event listener to the sign-in button
signInButton.addEventListener('click', function() {
	// When the sign-in button is clicked, show the sign-in form
    signInForm.style.display = "block";
	// Hide the sign-up form
    signUpForm.style.display = "none";
});
