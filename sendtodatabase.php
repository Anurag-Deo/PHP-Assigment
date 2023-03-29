<?php
session_start();
$servername = "localhost";
$username = "anurag";
$password = "anurag";
$database = "assign8";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$first_name = $_POST["first_name_new"];
$last_name = $_POST["last_name_new"];
$password = $_POST["password_new"];
$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

        $sql = "update users set first_name = '$first_name', last_name = '$last_name', password = '$password' where email = '$email'";
        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['password'] = $password;
            header("Location: http://localhost/assignment/profile.php");
          }
          else{
            echo "Internal Server Error";
          }
            //You need to redirect
            exit();
           
      
    
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 