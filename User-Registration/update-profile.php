<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_firstname = mysqli_real_escape_string($conn, $_POST['update_firstname']);
   $update_lastname = mysqli_real_escape_string($conn, $_POST['update_lastname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_password =mysqli_real_escape_string($conn, md5($_POST['update_password']));
   $update_cpass =mysqli_real_escape_string($conn, md5($_POST['update_confirmpassword']));
   

   mysqli_query($conn, "UPDATE `users` SET firstname = '$update_firstname',lastname = '$update_lastname', email = '$update_email',password = '$update_password',confirmpassword = '$update_cpass' WHERE id = '$user_id'") ;

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'Image Is Too Large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE id = '$user_id'") ;
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'Image Updated Successfully!';

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
   <title>Update Profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
      if(mysqli_num_rows($select) > 0){
                    // Fetch a result row as an associative array
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Firstname :</span>
            <input type="text" name="update_firstname" value="<?php echo $fetch['firstname']; ?>" class="box">
            <span>Lastname :</span>
            <input type="text" name="update_lastname" value="<?php echo $fetch['lastname']; ?>" class="box">
            <span> Email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>Update Your Picture : </span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            <span>Password :</span>
            <input type="password" name="update_password" value="<?php echo $fetch['password']; ?>" class="box">
            <span>Confirm Password :</span>
            <input type="password" name="update_confirmpassword" value="<?php echo $fetch['confirmpassword']; ?>" class="box">
            
         </div>
         
      </div>
      <input type="submit" value="Update Profile" name="update_profile" class="btn">
      <a href='delete.php?del=$row[id]'class="delete-btn" onclick="confirm('Are You Sure You Want To Delete This Record')">Delete Profile</a>
   </form>

</div>

</body>
</html>