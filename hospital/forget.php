<!DOCTYPE html>
<html>
  <head>
    <title>Forgot Password</title>
    <?php 
    require "pdo.php";

    session_start();
	

    if (isset($_POST['email']) && isset($_POST['dob'])) {
        $sql = "SELECT * FROM citizenlog WHERE email = :email AND dob = :pass";

        $statement = $pdo->prepare($sql);

        $statement->execute(array(
            ":email" => $_POST['email'],
            ":pass" => $_POST['dob']
        ));

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row == false) {
            $_SESSION['error'] = "Incorrect email or date of birth";
            header("Location: login.php");
            return;
        }
        else{
		$user=$row['email'];
        $_SESSION['email'] =$user;
        $_SESSION['id']=true;

		header("Location: password_reset.php"); 
        return;
    }
  }

?>

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      h1 {
        font-size: 36px;
        margin-top: 40px;
        margin-bottom: 20px;
        text-align: center;
      }
      form {
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
      }
      label {
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
      }
      input[type="email"], input[type="date"] {
        display: block;
        font-size: 16px;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #0069d9;
      }
    </style>
  </head>
  <body>
    <h1>Forgot Password</h1>
    
    <form method="post">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required><br><br>
      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" id="dob" required><br><br>
      <input type="submit" value="Reset Password">
    </form>
  </body>
</html>
