<?php

include 'assets/include/connection.php';
  if (isset($_POST['submit'])) {


  $id = $conn -> real_escape_string($_POST['id']);
  $parents_name=$conn -> real_escape_string($_POST['parents_name']);
  $mother_name=$conn -> real_escape_string($_POST['mother_name']);
  $email=$conn -> real_escape_string($_POST['email']);
  $contact_no=$conn -> real_escape_string($_POST['contact_no']);
  $address=$conn -> real_escape_string($_POST['address']);


  $update=mysqli_query($conn,"UPDATE `studentreg` SET `parents_name` = '$parents_name', `mother_name` = '$mother_name', `contact_no` = '$contact_no', `email` = '$email', `address` = '$address' WHERE `studentreg`.`id` = $id");


  if ($update==true) {

     echo '<script type="text/javascript">';
        echo 'alert("Profile update sucessfull");';
        echo 'window.location.href = "profile.php";';
        echo '</script>';
   
  }else{

     echo '<script type="text/javascript">';
        echo 'alert("Something went wrong,pelase contact customer");';
        echo 'window.location.href = "profile.php";';
        echo '</script>';
  }

  
  }


  ?>