<?php
session_start();
// ini_set('display_errors',1);
// error_reporting(-1);
$servername = "localhost";
$username = "anurag";
$password = "anurag";
$database = "assign8";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


$email = $_SESSION['email'];
$todelete = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "delete from users where email = '$email'";
        $result = $conn->query($sql);
            if ($result === TRUE) {
                    $_SESSION['email'] = "";
                    $_SESSION['first_name'] = "";
                    $_SESSION['last_name'] = "";
                    $_SESSION['password'] = "";

                    header("Location: http://localhost/assignment/signup.html");

                  
              } else {
                echo "Internal Server Error";
              }
            exit();
           
      
    
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 