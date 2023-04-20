<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
    require "pdo.php";

    session_start();

    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $sql = "SELECT * FROM doctorlog WHERE email = :email AND pass = :pass";

        $statement = $pdo->prepare($sql);

        $statement->execute(array(
            ":email" => $_POST['email'],
            ":pass" => $_POST['pass']
        ));

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row == false) {
            $_SESSION['error'] = "Incorrect Password";
            header("Location: login.php");
            return;
        }

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
        header("Location: maincit.php");
        return;
    }

?>
	
	
	<style>
		.container {
			position: relative;
			background-image: url("1.jpg");
			background-size: cover;
			background-position: center;
			height: 100vh;
		}

		.blur {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(255, 255, 255, 0.5);
			filter: blur(5px);
		}

		.form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 1;
			text-align: center;
			color:black;
			font-size: 24px;
			text-shadow: 1px 1px 1px #000;
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: none;
			border-radius: 4px;
			box-sizing: border-box;
			background-color: #f2f2f2;
			color: #333;
			font-size: 18px;
			font-weight: bold;
			text-shadow: none;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 18px;
			font-weight: bold;
			text-shadow: none;
		}

		button:hover {
			background-color: #45a049;
		}

		.register {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			z-index: 1;
			text-align: center;
			color:black;
			font-size: 18px;
			text-shadow: 1px 1px 1px #000;
		}

		.register a {
			color:red;
			font-weight: bold;
			text-decoration: none;
			text-shadow: none;
		}
	</style>
</head>
<body>
<?php 
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
    ?>
	<div class="container">
		<div class="blur"></div>
		<form class="form" method="post">
			<h1><b>Doctor Login</b></h1>
			<label for="username"><b>Email</b></label>
			<input type="text" placeholder="xyz@gmail.com" name="email" required>

			<label for="password"><b>Password</b></label>
			<input type="password" name="pass" required>

			<button type="submit" onclick="return sub()">Login</button>
		</form>
		<div class="register">
			<p>Don't have an account? <a href="registerdoc.php">Register</a></p>
		</div>
	</div>

	<script>
    function sub() {
       
            console.log("HERE");
            let email = document.getElementById("email").value;
            let password = document.getElementById("pass").value;

            if (email == null || password == null || email == "" || password == "") {
                alert("Both fields are necessary");
                return false;
            }
            if (email.indexOf("@") == -1) {
                alert("Enter valid email");
                return false;
            }
            console.log("HERE");
            return true;
       
    }
    </script>
</body>
</html>
