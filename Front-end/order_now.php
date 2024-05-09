<!DOCTYPE html>
<html >

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="order " content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>


	<title>Order NOW</title>

	<link type="text/css" rel="stylesheet" href="style (5).css" />



</head>

<body>
	<header>
		<a href="#" class="logo">Foodies'n swirels</a>
		
	</header>
	<section class="Reservation" >

		<form action="payment_method.php" method="post">
			<h2>Order</h2>
			<table>

				<tr>
					<td><b><label>FULL NAME:</label></b></td>
					<td><input type="text" placeholder="your name" required class="btn"  name="name"/></td>
				</tr>
				<tr>
					<td><b><label>PHONE NUMBER:</label></b></td>
					<td><input type="text" placeholder="your number" required class="btn" name="phone" /></td>
				</tr>
				<tr>
					<td><b><label>EMAIL ADDRESS:</label></b></td>
					<td><input type="email" placeholder="your email" required class="btn" name="email" /></td>

				</tr>
				<tr>
					<td><b><label>PICKUP A MEAL:</label></b></td>
					<td><input type="text" placeholder="Enter your meal" required class="btn" name="meal" /></td>
				</tr>
				<tr>
					<td><b><label>DESTINATION:</label></b></td>
					<td><input type="text" placeholder="Enter ZIP/Location" required class="btn" name="destination" /></td>
				</tr>
			</table>
			<br />
			<button type="submit" class="submit"> SUBMIT </button>
		</form>

	</section>
</body>

</html>