
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Checkout</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
	<style>
		/* Custom CSS styles */
		body {
			font-family: Arial, Helvetica, sans-serif;
			background-color: #f2f2f2;
		}
		h1, h2 {
			text-align: center;
			margin-top: 30px;
			margin-bottom: 10px;
			color: #333;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 30px;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}
		th, td {
			text-align: left;
			padding: 10px;
		}
		th {
			background-color: #555;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tfoot tr {
			background-color: #ddd;
			font-weight: bold;
		}
		label {
			display: block;
			margin-top: 10px;
			margin-bottom: 5px;
			color: #333;
		}
		input[type="text"], input[type="email"], textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
			color: #333;
		}
		input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
			border-color: #555;
		}
		button[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			margin-bottom: 50px;
		}
		button[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Shopping Checkout</h1>
	<form action="payment.php" method="POST">
		<h2>Order Summary</h2>
		<table>
			<thead>
				<tr>
					<th>Product Name</th>
					
					<th>Price</th>
				</tr>
			</thead>
			<?php
			$name = $_GET['name'];
			$type_of_sell = $_GET['type_of_sell'];
			$category = $_GET['category'];
			$MRP = $_GET['MRP'];
			$price = $_GET['price'];
			$manufacturer = $_GET['manufacturer'];
			$_POST['amount']=$price;
			session_start();
			$_SESSION['productname']=$name;
			$_SESSION['rate']=$price;
			?>
			<tbody>
				<tr>
				<td><?= $name?></td>
				<td><?= $price ?></td>
			
				
				</tr>
			</tbody>
		    
		</table>
		<h2>Shipping Information</h2>
		
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea>
		<label for="state">State:</label>
		<input type="text" id="state" name="state" required>
		<label for="zip">Zip Code:</label>
		<input type="text" id="zip" name="zip" required>
		<p>By clicking "Place Order", you agree to our <a href="#">terms and conditions</a>.</p>
		<button class="btn btn-default">Place Order</button>
	</form>
</body>
</html>
