<!DOCTYPE html>
<html>
  <head>
    <title>Password Confirmation Page</title>
    <?php 
    require "pdo.php";

    session_start();
	

    if (!isset($_SESSION['id']) || $_SESSION['id']!=true)
    {
      header("Location: forget.php"); 
    }
    if(isset($_POST['password']) && isset($_POST['confirmpassword']))
      {

      if($_POST['password']!=$_POST['confirmpassword'])
      {
        $_SESSION['error']=true;
        header("Location: password_reset.php");
        return;
      }

        $sql ="UPDATE citizenlog SET pass=:pass where email=:email";

        $statement = $pdo->prepare($sql);

        $statement->execute(array(
            ":email" => $_SESSION['email'],
            ":pass" => $_POST['password']
        ));

       /* $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row == false) {
            $_SESSION['error'] = "Incorrect email or date of birth";
            header("Location: login.php");
            return;
        }
        */
    
        session_destroy();
        header("Location: login.php");
        return;
    
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
      input[type="password"] {
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

      p{
        text-emphasis-color: readdir;
      
      }
    </style>
  </head>
  <body>
   
    <form method="post">
      <label for="password">New Password:</label>
      <input type="password" name="password" id="password" required><br><br>
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" name="confirmpassword" id="confirm-password" required><br><br>
      <input type="submit" value="Submit">
    </form>
<center>
    <p><?php if(isset($_SESSION['error']))
    {
      echo"password does not match";
    }
    ?></p>
</center>
</body>
</html>
