 <?php 
    include_once 'db.php';

      if (isset($_POST["submit"])) {

        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);

        //query the database
        $query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
        
        if ($rows = mysqli_fetch_assoc($query)) {
             
             $dbid = $rows['id'];
             $dbpass = $rows['password'];

             $hashedpwd = password_verify($password, $dbpass);

            if ($hashedpwd) {
             // so start a new session
              session_start();
              
              $_SESSION["id"] = $dbid;
              
              header("location: index.php"); 
            }
         
         } else {

          $error = true;
          $login_error = 'Email or Password is incorrect';
        }


   }

            ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat Box System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="login-box">
    <p><?php if (isset($_GET['msg'])) { echo $_GET['msg']; } ?><br><br></p>

    <p><?php if (isset($login_error)) { echo $login_error; } ?></p>
        
        <h1>Login Here</h1>
            <form method="POST" action="">

            <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="reg.php">Register</a>    
           
            </form>
        
 
        
        </div>
	
</body>
</html>