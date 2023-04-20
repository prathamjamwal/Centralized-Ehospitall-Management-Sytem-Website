<!DOCTYPE html>
<html>
<head>
	<title>Order Successful</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-UHT44rH8rTZhT6UdKZUOw6Uhf8Oc/s0sFzXhtx01GGG8RnWaaXBcaxZ1d/AwbsnCTnQfW3q3SZM2XHJuHzbM8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
	font-family: Arial, sans-serif;
}

.container {
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
}

h1 {
	text-align: center;
	margin-top: 0;
}

p {
	margin-bottom: 20px;
}

.card {
	background-color: #fff;
	border: 1px solid #ddd;
	border-radius: 5px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
	padding: 20px;
	margin-bottom: 20px;
}

.card h2 {
	margin-top: 0;
}

table {
	border-collapse: collapse;
	margin: 20px 0;
	width: 100%;
}

th, td {
	padding: 10px;
	text-align: left;
}

th {
	background-color: #333;
	color: #fff;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

.print-link, .home-link {
	display: block;
	margin-top: 20px;
	text-align: center;
}

.print-link i, .home-link i {
	margin-right: 5;
    
}

.print-link {
background-color: #4caf50;
color: #fff;
padding: 10px 20px;
border-radius: 5px;
text-decoration: none;
}

.print-link:hover {
background-color: #3e8e41;
}

.home-link {
background-color: #2196f3;
color: #fff;
padding: 10px 20px;
border-radius: 5px;
text-decoration: none;
}

.home-link:hover {
background-color: #0c7cd5;
}

.home-link i {
margin-right: 5px;
}

</style>
</head>
<body>
	<div class="container">
		<h1>Order Successful</h1>
		
		<p>Thank you for your purchase! Your order has been confirmed and is being processed.</p>
		
		<div class="card">
			<h2>Order Details</h2>
			<table>
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
                <?php
                session_start();
                $name=$_SESSION['productname'];
                $price=$_SESSION['rate'];
                ?>
				<tr>
					<td><?= $name?></td>
					<td>1</td>
					<td><?= $price?></td>
				</tr>
				
			</table>
		</div>
		
		<p>Your order confirmation number is: 123456789</p>
		
		<a href="maincit.php" class="home-link"><i class="fas fa-home"></i> Home</a>
	</div>
</body>
</html>
