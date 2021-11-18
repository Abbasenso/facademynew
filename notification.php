<?php
session_start();

    include "assets/include/connection.php";
    // getting course id from url 
   // $courseID = $_GET['course_id'];
    //$emailId = $_SESSION['userEmailId'];

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

    //echo $batch;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
<!-- font awesome kit  -->
<script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>

<!--<link rel="stylesheet" href="assets/css/main.css">-->
    <?php 
        require 'assets/include/css.php';
    ?>
<link rel="stylesheet" href="assets/css/login.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
 <link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>
<body>
    <main id="main">
        <!-- overlay -->
        <div class="img-bgx">
            
        </div>
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="nav-top">
                        <a href="index.php" class="brand">
                            <h2>f-academy</h2>
                        </a>
                        
                    </div>
                </div>
            </div>
            <!-- nav bar  -->
            <nav class="container navbar">
                <div class="navbar-items" id="navbar">
                    <a href="index.php" class="nav-links ">Home</a>
                    <a href="courses.php" class="nav-links">Courses</a>
                    <a href="profile.php" class="nav-links">Profile</a>
                    <a href="notification.php" class="nav-links active">Notification</a>
                     <a href="#" class="nav-links">Recorded Class</a>
           
                    <a href="logout.php" class="nav-links">Log out</a>
                </div>
                <div class="mobile-nav">
                    <a href="#" class="sidecut">Get certificate</a>
                    <div id="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <!-- <span>menu</span> -->
                    </div>
                </div>
            </nav>
            <!-- end nav bar  -->
        </header>
        <!-- form statrt -->


            <br><br>
          
        <div id="forms" class="container">
         


          <div class="container">
            <br>
  <h2>Classes Notification</h2>
  <p>Every Class time and date  will get update here....</p>
  <table class="table">
    <thead>
      <tr>
                      <th>Class No</th>
                    
                      <th>Time</th>
                      <th>Topic</th>
                      <th>Class Note</th>
                      <th>Class Link</th>
                      <th>Class Status</th>
      </tr>
    </thead>
    <tbody>
       <?php 
             $sql=mysqli_query($conn,"SELECT * FROM `class_assigned` WHERE `batch_no`='$batch' ORDER BY `class_assigned`.`id` DESC"); 

             $number= mysqli_num_rows($sql);
             echo 'Number of class -'.$number;
             while ($row=mysqli_fetch_assoc($sql)) {
                 
                 $link=$row['class_link'];

        ?>

       
                    <tr>
                       <td><?php echo 'Class No - '.$row['class_no']; ?></td>
                     
                      <td><?php echo  $row['created_date']. '('.$row['from_date'].')' .'-'.'('.$row['to_date'] .')'; ?></td>
                     
                     
                      <td><?php echo $row['class_topic']; ?></td>
                      <td><a href="<?php  echo 'pdf/'.$row['pdf'];?>" target="_blank">Note</a></td>
           
                      <?php
                         if($row['a_status']==0){
                             ?>
                   
                      <td> <a href="attandance.php?id=<?php echo $row['id'];?>" >LINK</a></td>

                      <?php }else{

                          ?>

                    <td> <a href="#" >Expired</a></td>
                          <?php
                      }
                      ?>


                      <?php
                         if($row['a_status']==0){

                          
                             echo" <td><button type='button' class='btn btn-danger'>New</button></td>";
                          
        
                }else{
                  

                    echo" <td><button type='button' class='btn btn-success'>Completed</button></td>";

                  
                }
                      ?>
             
                     
                    </tr>
                   <?php

               }
                   ?>  

    </tbody>
  </table>
</div>



        </div>
         <!-- form end -->
        
       
    </main>
    <?php 
        include 'assets/include/footer.php';
       
    ?>

</body>
</html>

<style type="text/css">
    
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>