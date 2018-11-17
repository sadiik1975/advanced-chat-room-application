<?php 
      include_once 'db.php';

     
      #setting validation error array
      $errors = array();
      #checking if form was submitted
      if (isset($_POST["submit"])) {

        $username = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);
        $image = $_FILES['photo']['name'];
        $target = "images/".basename($_FILES['photo']['name']);

       
        if (empty($username)) {
          array_push($errors, "UserName is required");
        }

        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           array_push($errors, "Please enter a valid email address");
          
        }

        if (strlen($password) < 6) {

          array_push($errors, "Password must be minimum of 6 characters");
        }

          if (count($errors)== 0) {

            move_uploaded_file($_FILES['photo']['tmp_name'], $target);

            $pwdhash = password_hash($password, PASSWORD_DEFAULT);

           
            $query = "INSERT INTO users(name, email, password, image) VALUES ('$username', '$email', '$pwdhash', '$image')";
          if (mysqli_query($con, $query)) {

               header('Location: login.php?msg='.urlencode('Registration Successful, Login Now'));
           
           } else{
                
              array_push($errors, "Registration failed try again");
            }
             
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
        <h1>Register Here</h1>
        <p><?php if (in_array("Registration failed try again", $errors)) { echo "Registration failed try again"; } ?></p>
            
            <form method="POST" action="" enctype="multipart/form-data">

            <input type="text" name="name" placeholder="Enter Username">
            <p><?php if (in_array("UserName is required", $errors)){ echo "UserName is required"; } ?></p>
          

            <input type="text" name="email" placeholder="Enter Email">
            <p><?php if (in_array("Please enter a valid email address", $errors)){ echo "Please enter a valid email address"; } ?></p>


            <input type="password" name="password" placeholder="Enter Password">
            <p><?php if (in_array("Password must be minimum of 6 characters", $errors)){ echo "Password must be minimum of 6 characters"; } ?></p>

            <input type="file" name="photo">

            <input type="submit" name="submit" value="Join">
            <a href="login.php">Already registered</a>    
           
            </form>
        
        
        
        </div>
	
</body>
</html>