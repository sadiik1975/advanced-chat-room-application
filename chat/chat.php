<?php

include_once 'db.php'; 

     
 $sql = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC");

 while($rows = mysqli_fetch_array($sql)){
    
    $message = $rows['message'];
    $name = $rows['user_name']; ?>
	<div class="user-photo"><img src="images/<?php echo $rows['user_image']; ?>" alt=""></div>
	<p class="chat-message"><?php echo '<span style="color:#9a5803; font-size:14px;">'.$name.'</span><br>'. $message; ?></p>
 
<?php } ?>

?>