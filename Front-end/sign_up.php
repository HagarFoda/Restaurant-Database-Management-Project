<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swf_project";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!empty($_SESSION["customer_id"])){
  header("Location: login.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST['phone'];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  $duplicate = mysqli_query($conn, "SELECT * FROM customers WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO customers VALUES('','$name','$username','$email','$phone','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      $_SESSION["sign up"] = true;
      header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>sign up</title>
    <link rel="stylesheet" href="stylesheetreg.css" />
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>

</head>
<body>
    <div class="split-form">
        <h2>Sign Up</h2>
        <form class="log" action="" method="post">                  
            <div class="form-group">
                <label for="signup-full_name">Full Name</label>
                <input type="text" placeholder="your name" id="signup-full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="signup-username">Username</label>
                <input type="text" placeholder="username" id="signup-username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="signup-email">Email</label>
                <input type="email" placeholder="your email" id="signup-email" name="email" required>
            </div>

            <div class="form-group">
                <label for="signup-username">phone</label>
                <input type="text" placeholder="your phone" id="signup-phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="signup-password">Password</label>
                <input type="password" id="signup-password" name="password" required>
            </div>

            <div class="form-group">
                <label for="signup-password">Confirm Password</label>
                <input type="password" id="signup-confirmpassword" name="confirmpassword" required>
            </div>
            


            <div class="form-group">
                <input type="submit" class="submit" name="submit" value="Sign Up">
              
            </div>
        </form>

    </div>

    
</body>
</html>