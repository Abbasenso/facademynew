<?php
session_start();

$id=$_GET['id'];

include "assets/include/connection.php";

if ($_SESSION['course_id'] == true  &&  $_SESSION['fid'] == true ) {
    echo " ";
  } else {
    header('location:index.php');
  }
 //$course_code = $_SESSION['course_id'];
 $fid = $_SESSION['fid'];

 //echo $fid;

 $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `studentreg` WHERE `feonnaa_id`='$fid'"));

 $batch= $row['batch_no'];
 $reg_no=$row['reg_no'];

$row1=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `class_assigned` where id='$id'"));

 $link=$row1['class_link'];
 $class_topic=$row1['class_topic'];

 $date=date('Y-m-d');

$result=mysqli_query($conn,"INSERT INTO `attandance` (`id`, `date`, `reg_no`, `batch_no`, `class_topic`, 
`create_at`, `status`) VALUES (NULL, '$date', '$reg_no', '$batch', '$class_topic', current_timestamp(), '0')");

if($result==true){
    header("Location: $link");
    exit();
    
}else{
    echo "Please click on link and join classes<br>";
    echo "<a href='$link'>link</a>";
}









?>