<?php
    session_start();
    include "assets/include/connection.php";
    // getting course id from url 
    $courseID = $_GET['course_id'];
    //$emailId = $_SESSION['userEmailId'];

    if ($_SESSION['course_id'] == true  &&  $_SESSION['fid'] == true ) {
        echo " ";
      } else {
        header('location:index.php');
      }
     //$course_code = $_SESSION['course_id'];
     //$fid = $_SESSION['fid'];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<!-- font awesome kit  -->
<script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
<link rel="stylesheet" href="assets/css/overview.css">
<!--<link rel="stylesheet" href="assets/css/main.css">-->
    <?php 
        require 'assets/include/css.php';
    ?>
<link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>
<body>
    
    <main class="bg-blue">
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
                    <a href="coursess.php" class="nav-links">Courses</a>
                    <a href="profile.php" class="nav-links">Profile</a>
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
        <section id="overview" class="overview">
            <div class="container-fluid">
                <div class="row">
                    <div class="welcome-content">
                        <h1>Welcome to</h1>
                        <h1>
                        <?php
                            $sql2 ="SELECT course_name FROM courses WHERE course_id = '$courseID'";
                            $cname = $conn->query($sql2);
                            if ($cname->num_rows > 0) {
                                // output data of each row
                                while($row6 = $cname->fetch_assoc()) {
                                    echo $row6['course_name'];
                                }
                            }
                        ?>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="courseCard" class="coursecard">
            <div class="container">
                <div class="row">
                <?php
                    $sql = "SELECT id,chapter_id,chapter_name,chapter_img FROM chapter WHERE course_id = '$courseID'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                         while($row = $result->fetch_assoc()) {
                             $chapID = $row['chapter_id'];
                ?>

                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="coursex-card">
                                    <div class="overview-img">
                                        <!-- img -->
                                        <img src="assets/img/syllebus_img/<?php echo $row['chapter_img'];?>" alt="<?php echo $row['chapter_img'];?>">
                                    </div>
                                    <div class="content">
                                        <div class="chapter-title">
                                           
                                            <h2><?php echo $row['chapter_name']; ?></h2>    
                                        </div>
                                        <div class="chapter-details">
                                            <table class="res-table">
                                                <thead>
                                                    <th class="fst">Section</th>
                                                    <th class="snd">Exercises</th>
                                                </thead>
                                                <tbody class="subChapters">
                                                <?php
                                                $query2 = "SELECT sub_chapter_id,sub_chapter_name FROM chapter_details WHERE chapter_id = '$chapID'";
                                                $result2 = $conn->query($query2);
                                                    while($subrow = $result2->fetch_assoc()){
                                                        // $chapterID = $subrow['chapter_id'];
                                                        $subChapterId = $subrow['sub_chapter_id'];
                                                        
                                                ?>        
                                                    <tr>
                                                        <td><a class="next-page" href="test.php?courseid=<?php echo $courseID;?> && chapterid=<?php echo $chapID;?> && id=<?php echo $subChapterId;?> && topic=<?php echo $subrow['sub_chapter_name'];?>"><?php echo $subrow['sub_chapter_name']; ?></a></td>
                                                        <td class="text-center">--</td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>    
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
                    
                </div>
            </div>
        </section>
    </main>
    <?php
        include 'assets/include/footer.php';
    ?>

</body>
</html>