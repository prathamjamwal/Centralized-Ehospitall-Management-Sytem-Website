<?php
require "pdo.php";
    session_start();
    $name = session_name();
    if (!isset($name)) {
        die("ACCESS DENIED");
    }
    

    if (isset($_POST['cancel'])) {
        header("Location: index1.php");
        return;
    }
?>
   


<!DOCTYPE html>
<html>
<head>


    <?php 
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
    ?>

	<title>Registration Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color:antiquewhite;
            background-image: url("2.jpg");
            background-size:100% 100%;
		}

		.container {
			background-color: #ffffff;
			padding: 20px;
			margin: 50px auto;
			max-width: 500px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			background-color: #45a049;
		}

		.cancelbtn {
			background-color: #f44336;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container p {
			text-align: center;
			font-weight: bold;
		}

		.container label {
			font-weight: bold;
		}

		.container span {
			color: red;
			font-weight: bold;
		}

		@media screen and (max-width: 600px) {
			.container {
				margin-top: 100px;
			}
		}
	</style>
</head>
<body>

	<form method="POST">
		<div class="container">
			<div class="imgcontainer">
				<img src="6.png" alt="Avatar" class="avatar">
			</div>

			<p>Please fill in this form to create an account.</p>
			<hr>

			<label for="name"><b>Name <span>*</span></b></label>
			<input type="text"  placeholder="Enter your name" name="name" required />

			<label for="email1"><b>Email <span>*</span></b></label>
			<input type="text" id="email1" placeholder="Enter your email" name="email" required />

			<label for="password1"><b>Password <span>*</span></b></label>
			<input type="password" id="pass" placeholder="Enter your password" name="password" required />
			<label for="password1"><b>Date Of Birth</b></label>
			<input type="date" id="date" name="date" required />

			<hr>

			<button type="submit" onclick="ff()">Register</button>
			<button type="button" class="cancelbtn">Cancel</button>
		</div>
	</form>

    <script>
        function ff() { // Function to validate email address
    function validateEmail(email) {
        const re = /\S+@\S+\.\S+/;
        return re.test(String(email).toLowerCase());
    }

    // Function to validate password
    function validatePassword(password) {
        // Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long
        const re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        return re.test(String(password));
    }

    // Function to confirm password


    // Example usage
    var email = document.getElementById("email1").value;
    var password = document.getElementById("pass").value;


    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
    } else if (!validatePassword(password)) {
        alert('Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.');
    } else {
        alert('Your account has been successfully created');
        <?php
         if (isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['password']) ) {
            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) ) {
                $_SESSION['error'] = "All fields are required";
                header("Location: register.php");
                return;
            }
            else if(strpos($_POST['email'],'@')==false){
                $_SESSION['error'] = "Invalid Email Address";
                header("Location: register.php");
                return;
        
            }
    
            $sql = "INSERT INTO citizenlog ( email, pass, name,dob) VALUES (:em,:pa, :fn,:dob)";
    
            $statement = $pdo->prepare($sql);
    
            $statement->execute(array(
                ":fn" => $_POST['name'],
                ":em" => $_POST['email'],
                ":pa" => $_POST['password'],
				":dob"=>$_POST['date']
                        ));
    
            $_SESSION['success'] = "Profile added";
            header("Location: index.php");
            return;
    
        }
    ?>
    
    }
}
        </script>

</body>

</html>