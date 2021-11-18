<?php
//session_start();
include 'assets/include/connection.php';

// getting subchapter id from url 
$course_overview = $_GET['overview_name'];
$sub_name = $_GET['sub_name'];


//$topic = $_GET['topic'];
//$courseId = $_GET['courseid'];

// session 
//if ($_SESSION['course_id'] == true  &&  $_SESSION['fid'] == true ) {
  //  echo " ";
  //} else {
  //  header('location:index.php');
  //}
 //$course_code = $_SESSION['course_id'];
 //$fid = $_SESSION['fid'];
// end session 
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- font awesome kit  -->
<script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/stud.css">
    <?php 
        require 'assets/include/css.php';
    ?>
    <link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>

<body>

    <div id="navbar">
        <div class="study-brand">
            <a href="index.php">F - Academy</a>
        </div>
        <div class="links">
            <a href="index.php" class="halka">HOME<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
            <a href="#"><?php  echo $course_overview; ?></a>
        </div>
    </div>

    <main id="studyMain">
        <!-- <section id="hero"></section> -->
        <section id="rollable" style="padding-top: 100px;">
        <?php 
            $sql = "SELECT * FROM overview_content WHERE sub_chapter_id = '$sub_name' ORDER BY content_index";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   $type = $row['content_type'];
                   $contentValue = $row['content_value'];

                   //audio tag
                    if($type == 'audio'){
                    ?>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 audio">
                                    <audio controls="controls">
                                        <!-- <source src="horse.ogg" type="audio/ogg"> -->
                                        <source src="assets/audio/<?php echo $contentValue;?>" type="audio/mpeg">
                                        Your browser does not support the audio tag.
                                    </audio> 
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                    // text content 
                    if($type == 'text'){
                       ?>
                       <div class="container mt-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="text-content"><?php echo $contentValue;?></div>
                                </div>
                            </div>
                       </div>
                    <?php
                    }

                    //h1
                    if($type == 'mainheader'){
                       ?>
                       <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h1><?php echo $contentValue;?></h1>
                                </div>
                            </div>
                       </div>
                       <?php
                    }

                    //h3
                    if($type == 'h3'){
                    ?>
                        <div class="container mt-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h3><?php echo $contentValue; ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    // image 
                    if($type == 'image'){
                    ?>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="img">
                                        <img src="assets/overview/<?php echo $contentValue;?>" alt="img not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
            } else {
                echo "0 results";
            }
            
        ?>
            <!-- php  -->
        </section>
    </main>

 

    <?php 
        include 'assets/include/footer.php';
    ?>


    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-60px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>

</body>

</html>


