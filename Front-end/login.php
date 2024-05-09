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
  header("Location: SWE_PROJECT.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM customers WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["customer_id"] = $row["customer_id"];
      header("Location: SWE_PROJECT.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="stylesheetreglog.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <h1>Login and Sign Up</h1>
        <div class="split">
            <div class="split-form">
                
                <form action="" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="login-username">Username:</label>
                        <input type="text" id="login-username" name="usernameemail" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password:</label>
                        <input type="password" id="login-password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">login</button>

                    </div>
                </form>
                 
                <div>
                    <form class="submit"  action="sign_up.php">
                        <button type="submit" >sign up</button>
                    </form>
                </div>
                
                
                

            </div>
            </div>
    </div>

</body>
</html>