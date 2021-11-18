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

    // echo $row['feonnaa_id'];
  
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
                     <a href="profile.php" class="nav-links active">Profile</a>
                   <a href="notification.php" class="nav-links">Notification</a>
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
        <div id="forms" class="container">

             <br>
         <div class="container">
    <div class="main-body">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
                   
                   <?php 

                       if ($row['sex']=='Male') {
                         $gender="https://www.bootdey.com/img/Content/avatar/avatar7.png";
                       }elseif ($row['sex']=='Female') {
                         $gender="https://www.bootdey.com/img/Content/avatar/avatar3.png";
                       }else{
                         $gender="https://www.bootdey.com/img/Content/avatar/avatar7.png";
                       }
                   ?>


              <div class="d-flex flex-column align-items-center text-center">
                <img src="<?php echo $gender ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                <div class="mt-3">
                  <h4><?php echo $row['student_name']  ?></h4>
                  <p class="text-secondary mb-1"><?php echo $row['course_name'] ?></p>
                  <p class="text-muted font-size-sm"><?php echo  'Reg_No -'. $row['reg_no'] ?></p>
                 <!-- <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button> -->
                </div>
              </div>
              <hr class="my-4">
              <ul class="list-group list-group-flush">

                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Date of Birth</h6>
                  <span class="text-secondary"><?php echo $row['dob'] ?></span>
                </li>

              
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Application Date</h6>
                  <span class="text-secondary"><?php echo $row['application_date'] ?></span>
                </li>
               <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Course Duration</h6>
                  <span class="text-secondary">6 Months</span>
                </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Batch</h6>
                  <span class="text-secondary"><?php echo $row['batch_no'] ?></span>
                </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Class Language</h6>
                  <span class="text-secondary"><?php echo $row['language'] ?></span>
                </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"></svg>Feonnaa ID</h6>
                  <span class="text-secondary"><?php echo $row['feonnaa_id'] ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <!-- form start -->
          <form action="profileupdate.php" method="post">
          <div class="card">
             <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
            
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="student_name" value="<?php echo $row['student_name'] ?>" disabled>
                </div>
              </div>

               <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Parent's Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="parents_name" value="<?php echo $row['parents_name'] ?>" required>
                </div>
              </div>

                <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mother's Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="mother_name" value="<?php echo $row['mother_name'] ?>" required>
                </div>
              </div> 
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                </div>
              </div>
            
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="contact_no" value="<?php echo $row['contact_no'] ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="submit" name="submit" class="btn btn-primary px-4" value="Update" >
                </div>
              </div>
            </div>

          </div>
         </form>
           <!-- form End -->
          <div class="row">
            <div class="col-sm-12">
           
           <?php 
                  
               $batch=$row['batch_no'];

              // echo $batch;

               $query=mysqli_query($conn,"SELECT * FROM `class_assigned` WHERE `batch_no`='$batch'");
               $class_no=mysqli_num_rows($query);

               $query2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `batch` WHERE `batch_name`='$batch'"));

               $total_class=$query2['no_of_class'];

               //echo $total_class;

               $class_status=(($class_no * 100) / $total_class);
               //$class_status=(*100)/1;
              // echo $class_status;


               

           ?>


              <div class="card">
                <div class="card-body">
                  <h5 class="d-flex align-items-center mb-3">Class & Assignment Status</h5>
                  <p>Class Status(<?php echo $class_no .'/'.$total_class;  ?>)</p>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $class_status; ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>Assignment - 1</p>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>Assignment - 2</p>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>Assignment - 3</p>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>Assignment - 4</p>
                  <div class="progress" style="height: 5px">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

       
    
        </div>
         <!-- form end -->
        
       
    </main>
    <?php 
        include 'assets/include/footer.php';
        include 'assets/include/modal.php';
    ?>

</body>
</html>

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}

</style>


