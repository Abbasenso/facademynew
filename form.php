<?php
session_start();
include 'assets/include/connection.php';
include 'assets/include/logreg.php';


$course_code = $_SESSION['course_id'];
$fid = $_SESSION['fid'];

$res=mysqli_query($conn,"SELECT * FROM `studentreg` WHERE `feonnaa_id`='$fid' and `course_id`='$course_code'");
$row=mysqli_num_rows($res);
if ($row > 0) {
   echo "<script>";
     echo 'window.location.href = "courses.php";';
    echo "</script>";
}else{
    echo "";
}


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
                    <a href="index.php" class="nav-links active">Home</a>
                    <a href="courses.php" class="nav-links">Courses</a>
                    <a href="about.php" class="nav-links">about</a>
                    <a href="team.php" class="nav-links">team</a>
                    <a href="contact.php" class="nav-links">Enquiry</a>
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
        <div  class="container" style=" background-color: #fff; margin-top: 10vh;margin-bottom: 10px;border-radius: 20px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;height: auto;">
           <center><u> <h3>Student Registration Form</h3></u></center>
            <form action="stuinsert.php" method="post">
              <div class="row">

              <div class="col-md-3 ">
                  <label>Application Date</label>
                  <strong style="color:red">*</strong>
             <input type="date" class="form-control" name="date" value="<?php  echo date('Y-m-d') ?>" disabled>
             </div>
             <div class="col-md-3 ">
                 <label>Student Name</label>
                 <strong style="color:red">*</strong>
             <input type="text" class="form-control" name="stu_name"  placeholder="Student name" required>
             </div>

             <div class="col-md-3 ">
             <label>Father's Name</label>
             <strong style="color:red">*</strong>
             <input type="text" class="form-control" name="fat_name" placeholder="Father Name" required>
             </div>

             <div class="col-md-3 ">
             <label>Mother's Name</label>
             <strong style="color:red">*</strong>
             <input type="text" class="form-control" name="mot_name" placeholder="Mother Name" required>
             </div>

             
         </div>

         <br>
         <div class="row">
             <div class="col-md-3 ">
             <label>DOB</label>
             <strong style="color:red">*</strong>
             <input type="date" class="form-control" name="dob" required>
             </div>

             <div class="col-md-3 ">
                 <label>Sex</label>
                 <strong style="color:red">*</strong>
              <select class="form-control" name="sex" required>
              <option value="">Select..</option>
              <option>Male</option>
              <option>Female</option>
              <option>Others</option>
              </select>
             </div>

             <div class="col-md-3 ">
             <label>Mobile No</label>
             <strong style="color:red">*</strong>
             <input type="tel" class="form-control" name="phone" id="phone_number" pattern="[6789][0-9]{9}" placeholder="Mobile No" required>
             </div>

             <div class="col-md-3 ">
             <label>Email</label>
               <strong style="color:red">*</strong>
             <input type="email" class="form-control" name="email" placeholder="Email ID" required>
             </div>


             </div>


             <br>
         <div class="row">
             <div class="col-md-3 ">
             <label>Photo(optional)</label>
             
             <input type="file" class="form-control" name="image" >
             </div>

             <div class="col-md-3 ">
                 <label>Last Qualification</label>
                 <strong style="color:red">*</strong>
              <select class="form-control" name="qualification" required>
              <option value="">Select..</option>
              <option>10th</option>
              <option>12th</option>
              <option>Graduate</option>
              <option>PG</option>
              <option>PHD</option>
              </select>
             </div>

             <div class="col-md-3 ">
             <label>Course Name</label>
             <strong style="color:red">*</strong>
             <input type="phone" class="form-control" name="course" value="Feonnaa Nutrition & AI" disabled>
             </div>

             <div class="col-md-3 ">
             <label>Language</label>
             <strong style="color:red">*</strong>
             <select class="form-control" name="language" required>
              <option value="">Select..</option>
              <option>English-Bengali</option>
              <option>English-Hindi</option>
             
            
              </select>
             
             </div>


             </div>

             <br>
         <div class="row">
             <div class="col-md-3 ">
             <label>Parents's Occupation</label>
             <strong style="color:red">*</strong>
             <select class="form-control" name="occupation" required>
              <option value="">Select..</option>
              <option>Businessman</option>
              <option>Self_Employed</option>
              <option>Salaried_Employed</option>
              <option>Others</option>
              </select>
             </div>

             <div class="col-md-3 ">
                 <label>Parent's Monthly Income</label>
                 <strong style="color:red">*</strong>
              <select class="form-control" name="income" required>
              <option value="">Select..</option>
              <option>10000-20000</option>
              <option>20000-30000</option>
              <option>30000-50000</option>
              <option>50000-100000</option>
              <option>Above 100000</option>
              </select>
             </div>

             <div class="col-md-6 ">
             <label>Address</label>
             <strong style="color:red">*</strong>
             <textarea class="form-control" name="address" placeholder="Give valid Address only(like vill,pin,po etc)" row="5" required></textarea>
             </div>

           


             </div>

             <br>

             <div class=row>
              <div class="col-md-5">

              </div>
              <div class="col-md-2">
              <input type="submit" name="submit" value="Submit" class="btn btn-success">
               </div>

             

              <div class="col-md-5">

              </div>

            </div>

             </form>
        </div>
         <!-- form end -->
        
       
    </main>
    <?php 
        include 'assets/include/footer.php';
     
    ?>

</body>
</html>