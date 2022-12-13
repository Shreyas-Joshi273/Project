
<?php

include 'config.php';
$firstnameErr  = $lastnameErr = $emailErr = "";
$firstname  = $lastname = $email = "";
if(isset($_POST['submit'])){


      //Reference W3Schools 
                  // This Function Remove Special Characters
   $firstname =  mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
                                    //md5 Password In Encrypted Format
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['confirmpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE username = '$username' AND password = '$pass'");
         //Regular Expressions
    if(preg_match('/^[a-zA-Z\s]+$/', $firstname))
    if(preg_match('/^[a-zA-Z\s]+$/', $lastname))
    
      //Check Number Of Rows
   if(mysqli_num_rows($select) > 0){
      $message[] = 'User Already Exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm Password Not Matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image Size Is Too Large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `users`(firstname,lastname,username,email,image,password,confirmpassword) VALUES('$firstname','$lastname','$username', '$email', '$image','$pass','$cpass')");

         if($insert){
            // Move The Uploaded File On The Below Location
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered Successfully!';
            header('location:login.php');
         }else{
            $message[] = 'Registeration Failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registeration</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">
                        <!--function converts some predefined characters to HTML entities-->
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
      <h3>Register Now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
       <input type="text" name="firstname" minlength="5" placeholder="Enter Firstname" class="box" required value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>">
       <span class="error"><?php echo $firstnameErr;?></span> 
       <input type="text" name="lastname"  minlength="3" placeholder="Enter Lastname" class="box" required value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">
       <span class="error"><?php echo $lastnameErr;?></span> 
      <input type="text" name="username"  max="20"  placeholder="Enter Username" class="box" required  value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">
      <input type="email" name="email" placeholder="Enter Email Address" class="box" required  value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
      <span class="error"><?php echo $emailErr;?></span>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="password" name="password" placeholder="Enter Password" pattern="(?=.*[A-Z]).{8,16}" title="Must atleast 8 between and 16 characters one uppercase" class="box" required value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
      <input type="password" name="confirmpassword" placeholder="Confirm Password" class="box" required value="<?php echo isset($_POST["confirmpassword"]) ? $_POST["confirmpassword"] : ''; ?>">
      <input type="submit" name="submit" value="Register Now" class="btn">
     
   </form>

</div>

</body>
</html>