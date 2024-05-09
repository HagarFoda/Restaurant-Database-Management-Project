<html>
<head>
    <link rel="stylesheet" href="style (5) - Copy.css" />
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="order " content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>


    
    <title>Payment Form</title>
     
</head>
<body>
   
    <div class="payment-form">
        <h1>Payment method</h1>
        <br>
        <form >
            <div class="form-row">
                <button type="button" class="payment-option" id="cash"><a href="order_now_msg.php">Cash</a></button>
                <button type="button" class="payment-option" id="credit-card"><a href="card.php">Credit Card</a></button>
            </div>
            
        </form>
    </div>
    <?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $meal = $_POST['meal'];
    $destination = $_POST['destination'];

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

$sql = "INSERT INTO orders (full_name, phone, email , meal , destination)
VALUES ('$name', '$phone', '$email' , '$meal','$destination')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
</body>
</html>