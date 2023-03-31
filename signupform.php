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
    
  $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';



$passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';



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
      else if (!preg_match($emailRegex, $email)) {
        $emailErr = "Invalid email format";
        echo "Invalid email format";
    }
    else if (!preg_match($passwordRegex, $password)) {
      $passwordErr = "Password must contain at least one uppercase letter, one lowercase letter, one number, one special character and must be at least 8 characters long";
      echo $passwordErr;
  }
      else{
        // echo "Everything works fine";
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";
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
// echo "Connected successfully";
?> 