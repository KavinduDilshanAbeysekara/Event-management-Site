<?php
// Include the database connection file
include 'connect.php';

// Handle user sign-up process
if (isset($_POST['signUp'])) {
    // Retrieve form data for sign-up
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password=md5($password)// Optional: hash the password using md5 for security (commented out)

     // Check if the email already exists in the database
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    // If the email exists, redirect to the index page with an error status
    if ($result->num_rows > 0) {
        header("Location: ../index.php?status=email_exists");
    } else {
        // If the email does not exist, insert the new user into the database
        $insertQuery = "INSERT INTO users(firstName, lastName, contact, email, password) VALUES ('$firstName', '$lastName', '$contact', '$email', '$password')";
        // If the insertion is successful, redirect to the index page with a success status
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: ../index.php?status=registration_success");
        } else {
            // If there is an error, redirect to the index page with an error status
            header("Location: ../index.php?status=error");
        }
    }
}

// Handle user sign-in process
if (isset($_POST['signIn'])) {
     // Retrieve form data for sign-in
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password=md5($password) // Optional: hash the password using md5 for security (commented out)

    // Check if the email and password match a record in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    // If a matching record is found, start a session and set session variables
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION["loggedin"] = TRUE;
        // Redirect to the index page with a success status
        header("Location: ../index.php?status=login_success");
    } else {
         // If no matching record is found, redirect to the index page with a failure status
        header("Location: ../index.php?status=login_failed");
    }
}
?>
