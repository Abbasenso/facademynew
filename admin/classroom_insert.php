<?php
include 'connection.inc.php';






if (isset($_POST['create'])) {
	 $from = $conn -> real_escape_string($_POST['from']);
	 $to = $conn -> real_escape_string($_POST['to']);
	 $batch_no = $conn -> real_escape_string($_POST['batch_no']);
	 $created_date = $conn -> real_escape_string($_POST['date']);
	 $class_topic = $conn -> real_escape_string($_POST['topic']);
	 $description = $conn -> real_escape_string($_POST['description']);
	 $link = $conn -> real_escape_string($_POST['link']);
	 $app = $conn -> real_escape_string($_POST['app']);

	// $created_date=date('Y-m-d');


    $class=mysqli_query($conn,"SELECT max(id), `class_no` FROM `class_assigned` WHERE `batch_no`='$batch_no'");

     $res=mysqli_fetch_assoc($class);
     $class_no=$res['class_no'];
     $class_no=$class_no +1 ;


  $result=mysqli_query($conn,"INSERT INTO `class_assigned` (`id`, `created_date`, `from_date`, `to_date`, `batch_no`, `class_topic`, `class_description`, `class_app`, `class_link`, `class_no`, `s_status`, `a_status`) VALUES (NULL, '$created_date', '$from', '$to', '$batch_no', '$class_topic', '$description', '$app', '$link', '$class_no', '0', '0');");

    if($result ==true){

    	
          echo "<script language='javascript' type='text/javascript'> location.href='classlist.php' </script>"; 
    	

    }else{

    	echo '<script>';
    	echo 'alert("Class room create Failed");';
        echo 'location.href="classroom.php";';
    	echo '</script>';


    }



}

?>
