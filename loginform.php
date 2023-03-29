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


$email = $_POST["email"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $sql = "Select * from users where email = '$email' and password = '$password'";
        $result = $conn->query($sql);
        // if ($result === TRUE) {
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['first_name'] = $row["first_name"];
                    $_SESSION['last_name'] = $row["last_name"];
                    $_SESSION['password'] = $row["password"];
                    $sql2 = "update users set isloggedIn = 1 where email = '$email'";
                    if($conn->query($sql2) === TRUE){

                        header("Location: http://localhost/assignment/profile.php");
                    }

                  
                }
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