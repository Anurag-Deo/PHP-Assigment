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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $sql = "update users set isloggedIn = 0 where email = '$email'";
        $result = $conn->query($sql);
        // if ($result === TRUE) {
            if ($result === TRUE) {
                // output data of each row
                // while($row = $result->fetch_assoc()) {
                    $_SESSION['email'] = "";
                    $_SESSION['first_name'] = "";
                    $_SESSION['last_name'] = "";
                    $_SESSION['password'] = "";

                    header("Location: http://localhost/assignment/login.html");

                  
                // }
              } else {
                echo "No users found for this email and password";
              }
            // echo "New record created successfully";
        //   }
            //You need to redirect
            exit();
           
      
    
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 