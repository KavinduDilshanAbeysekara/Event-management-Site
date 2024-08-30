<?php

// Database connection parameters
$host="localhost"; // Database host, typically 'localhost' for local servers
$user="root"; // Username for database access, 'root' is default for local MySQL installations
$pass="2000"; // Password for the database user, empty here which is common for default local setups
$db="login"; // Database name to connect to

// Create a new instance of the mysqli class to establish a connection to the database
$conn=new mysqli($host,$user,$pass,$db);
// Check if the connection was successful
  if($conn->connect_error){
    // If there was an error connecting, output a message with the error details
    echo"failed to connect DB".$conn->connect_error;
  }
?>