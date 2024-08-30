<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Specifies the character encoding for the HTML document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensures the page is responsive and scales properly on all devices -->
    <title>Register & Login</title> <!-- Title displayed on the browser tab -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"><!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="../css/styles_login.css"><!-- Link to the custom CSS file for styling the form -->
</head>
<body>
   <!-- Registration Form Container --> 
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1><!-- Title for the registration form -->
    <form method="post" action="register.php"><!-- Form submission method and action -->
        <!-- Input field for first name -->
        <div class="input-group">
            <i class="fas fa-user"></i><!-- Icon for the input field -->
            <input type="text" name="fName" id="fName" placeholder="First Name" required><!-- Input for first name -->
            <label for="fName">First Name</label><!-- Label for the first name input -->
        </div>
        <!-- Input field for last name -->
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <!-- Input field for email -->
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <!-- Input field for password -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="password" required name="password">
            <label for="password">Password</label>
        </div>
        <!-- Input field for phone number -->
        <div class="input-group">
            <i class="fas fa-phone"></i>
            <input type="text" name="contact" id="contact" placeholder="Phone number" required>
            <label for="contact">Phone Number</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp"> <!-- Submit button for the registration form -->
    </form>
    <p class="or">---------or---------</p> <!-- Separator text for alternative sign-up methods -->
    <!-- Social media icons for alternative sign-up options -->
    <div class="icons">
        <i class="fab fa-google"></i> <!-- Google icon -->
        <i class="fab fa-facebook"></i> <!-- Facebook icon -->
    </div>
    <div class="links">
        <p>Already Have Account?</p> <!-- Text prompting the user to sign in if they already have an account -->
        <button id="signInButton">Sign In</button> <!-- Button to switch to the sign-in form -->
    </div>
  </div>

   <!-- Login Form Container -->
  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1> <!-- Title for the login form -->
    <form method="post" action="register.php"> <!-- Form submission method and action -->
        <!-- Input field for email -->
        <div class="input-group">
            <i class="fas fa-envelope"></i> <!-- Icon for the input field -->
            <input type="email" name="email" id="email" placeholder="Email" required> <!-- Input for email -->
            <label for="email">Email</label> <!-- Label for the email input -->
        </div>
        <!-- Input field for password -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="password" required name="password">
            <label for="password">Password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a> <!-- Link for recovering the password -->
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn"> <!-- Submit button for the login form -->
    </form>
    <p class="or">---------or---------</p> <!-- Separator text for alternative sign-in methods -->
    <!-- Social media icons for alternative sign-in options -->
    <div class="icons">
        <i class="fab fa-google"></i> <!-- Google icon -->
        <i class="fab fa-facebook"></i> <!-- Facebook icon -->
    </div>
    <div class="links">
        <p>Don't Have Account?</p> <!-- Text prompting the user to sign up if they don't have an account -->
        <button id="signUpButton">Sign Up</button> <!-- Button to switch to the sign-up form -->
    </div>
  </div>
  <script src="../js/script.js"></script> <!-- Link to the JavaScript file handling the form switching -->
</body>
</html>
  