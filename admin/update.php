<?php

include 'connection.inc.php';
 if (isset($_POST['update'])) {
 	
 	 $id = $conn -> real_escape_string($_POST['id']);
 	 $mobile = $conn -> real_escape_string($_POST['mobile']);
 	 $email = $conn -> real_escape_string($_POST['email']);
 	 $address = $conn -> real_escape_string($_POST['address']);
 	 $language = $conn -> real_escape_string($_POST['language']);
 	 $batch = $conn -> real_escape_string($_POST['batch']);

 	 $result=mysqli_query($conn,"UPDATE `studentreg` SET `contact_no` = '$mobile', `email` = '$email', `language` = '$language', `address` = '$address', `batch_no` = '$batch' WHERE `studentreg`.`id` = $id");

    if($result ==true){

    	
          echo "<script language='javascript' type='text/javascript'> location.href='studentlist.php' </script>"; 
    	

    }else{

    	echo '<script>';
    	echo 'alert("upadte Failed");';
        echo 'location.href="studentlist.php";';
    	echo '</script>';


    }


 }

?>