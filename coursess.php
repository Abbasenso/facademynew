<?php
session_start();
include 'assets/include/connection.php';
include 'assets/include/logreg.php';

if ($_SESSION['course_id'] == true  &&  $_SESSION['fid'] == true ) {
    echo "<script>";
     echo 'window.location.href = "courses.php";';
    echo "</script>";
  } else {
    echo " ";
  }
 $course_code = $_SESSION['course_id'];
 $fid = $_SESSION['fid'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <!-- font awesome kit  -->
    <script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>
    <?php 
        require 'assets/include/css.php';
    ?>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>

<body>
    <main id="main">
        <!-- overlay -->
        <img class="img-bg" src="assets/img/bg2.jpg" alt="">
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
                    <a href="coursess.php" class="nav-links active">Courses</a>
                    <a href="about.php" class="nav-links">About</a>
                    <a href="team.php" class="nav-links">Team</a>
                    <a href="contact.php" class="nav-links">Enquiry</a>
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
        <section id="hero" class="hero">
            <div class="links"><a href="index.php">home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                courses <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            <h1>explore courses</h1>
        </section>
        <!-- couses  -->
        <section id="courses">
            <!-- couses container  -->
            <div class="container">
                <div class="row">
                    <?php
                    
                    $sql = "SELECT * FROM `main_course` order by id ASC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // $i = 0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
                                <!-- add cards content 
                    add php code here loop this card  -->
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="course-card" >
                            <div class="course-brand">
                                <div class="ll">
                                    <i class="fa fa-slideshare" aria-hidden="true"></i>
                                </div>
                                <div class="course-title kk">
                                    <h2><?php echo $row['course_name'];?></h2>
                                    <div class="star-icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>(5.0)</span>
                                    </div>
                                    <div class="course-author">by Feonnaa F-academy</div>
                                </div>
                            </div>

                            <div class="pdf pad-z"><?php echo $row['description'];?></div> 
                          <!--  <a href="assets/syllabus/ target="_blank" class="pdf">Open Syllabus</a> -->
                            
                            <a href="login.php?course_id=<?php echo $row['course_code'];?>" class="btn-1 dd">Log In!</a>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

                </div>
            </div>
            <!-- end course container  -->
        </section>
    
    </main>
    <?php
        include 'assets/include/footer.php';
    ?>
</body>

</html>