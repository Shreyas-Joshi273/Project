<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
 $username = mysqli_real_escape_string($conn, $_POST['username']);
 $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE username = '$username' AND password = '$pass'") ;
   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect username or password!';
    
}
}

?>

	

   
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      } 
      ?>
      <input type="text" name="username" placeholder="Enter Username" class="box" required  value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
      <input type="password" name="password" placeholder="Enter Password" class="box" required  value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
      <input type="checkbox" name="remember" <?php if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])){ echo "checked";}?>> Remember me <br><br>
      <input type="submit" name="submit" value="Login Now" class="btn">
    
   </form>

</div>

</body>
</html>