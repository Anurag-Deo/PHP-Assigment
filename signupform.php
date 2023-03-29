<?php
$servername = "localhost";
$username = "anurag";
$password = "anurag";
$database = "assign8";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
      } else {
        // check if e-mail address is well-formed
        if (strlen($password)<8) {
          $passwordErr = "Password must be atleast 8 characters long";
        }
      }
      
      if (empty($_POST["confirm_password"])) {
        $confirm_passwordErr = "Confirm Password is required";
      } else {
        // check if e-mail address is well-formed
        if ($password != $confirm_password) {
          $confirm_passwordErr = "Password must match with confirm password";
        }
      }

      if(strlen($password)<8){
        echo "Password must be atleast 8 characters long";
      }
      else if($password != $confirm_password){
        echo "Password and confirm password must match";
      }
      else{
        // echo "Everything works fine";
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            header("Location: http://localhost/assignment/login.html");
          }
          else{
            echo "User already exists";
          }
            //You need to redirect
            exit();
           
      }
      
    
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 