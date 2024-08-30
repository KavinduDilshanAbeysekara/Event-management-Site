<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensure proper scaling on mobile devices -->
    <title>Admin Login</title>

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Link to external CSS file for styling -->
    <link rel="stylesheet" href="../css/styles_login.css">
</head>
<body>
    <div class="container" id="signIn">
        <h1 class="form-title">Admin Login</h1>

        <!-- Form for Admin Login -->
        <form method="post" action="event.php"> <!-- Form submission sends data to 'event.php' -->
            <div class="input-group">
                <i class="fas fa-envelope"></i> <!-- Email icon -->
                <input type="email" name="email" id="email" placeholder="Email" required> <!-- Email input field -->
                <label for="email">Email</label> <!-- Label for the email input field -->
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required name="password">
                <label for="password">Password</label>
            </div>

            <!-- Link to recover the password -->
            <p class="recover">
                <a href="#">Recover Password</a><!-- Placeholder link for password recovery -->
            </p>

            <!-- Submit button for the form -->
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
    </div>
    
    <!-- Link to external JavaScript file for additional functionality -->
    <script src="../js/script.js"></script>
</body>
</html>
