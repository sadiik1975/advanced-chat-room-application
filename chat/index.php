<?php 

include_once 'db.php'; 

 if (!isset($_SESSION['id'])) {
 	header("location: login.php");
 }

$id = $_SESSION["id"];

    $userdata = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = '$id'"));
  		$username = $userdata['name'];
  		$image = $userdata['image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat Box System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function ajax(){

		var req = new XMLHttpRequest();

		req.onreadystatechange = function(){
			if (req.readyState == 4 && req.status == 200) {

			document.getElementById('chat').innerHTML = req.responseText;
		}
	}

	req.open('GET', 'chat.php', true);
    req.send();
}
 
 setInterval(function(){ajax()},1000);
	</script>
</head>
<body onload="ajax();">
	<div class="container">
		
		<div class="chatlogs">
			<div id="chat" class="chat users">

			</div>
		</div>
      
      <form class="chat-form" method="POST" action="index.php" name="form">
		<textarea name="chat" placeholder="Enter Message"></textarea>
		<button type="submit" name="send" >Send</button>
		<a href="logout.php" class="logout_button"> X </a>
	  </form>

	</div>

		<?php 
           if (isset($_POST['send']) && !empty($_POST['chat'])) {
            
             $msg = $_POST['chat'];
            
             $insert_query=mysqli_query($con, "INSERT INTO post(user_name, user_image, message) VALUES('$username', '$image', '$msg')");   	
           }
        
		 ?>
</body>
</html>