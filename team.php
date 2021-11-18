<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
<!--<link rel="stylesheet" href="assets/css/main.css">-->
    <?php 
        require 'assets/include/css.php';
    ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>
<body>
    <main id="main">
         <!-- overlay -->
         <img class="img-bg" src="assets/img/bg2.jpg" alt="bg not found">
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
                    <a href="index.php" class="nav-links">Home</a>
                    <a href="coursess.php" class="nav-links">Courses</a>
                    <a href="about.php" class="nav-links">About</a>
                    <a href="team.php" class="nav-links active">Team</a>
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
        <section id="contact">
            <h6>HOME > TEAM ></h6>
            <h1>Our Administrative  Team</h1>
        </section>
        <section id="contactDetails">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-img">
                                <img src="assets/img/team/team-1.jpg" alt="img not found">
                            </div>
                            <div class="team-des text-center p-3">
                                <h4>Dr Samir Kumar Dhara</h4>
                                <h6 class="mt-2">Managing Director</h6>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img">
                                <img src="assets/img/team/team-2.jpg" alt="img not found">
                            </div>
                            <div class="team-des text-center p-3">
                                <h4>Melissa Rochelle Raub</h4>
                                <h6 class="mt-2">Business Partner(FAI)</h6>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team" data-aos="fade-up" data-aos-delay="300">
                            <div class="team-img">
                                <img src="assets/img/team/mantoo.jpg" alt="img not found">
                            </div>
                            <div class="team-des text-center p-3">
                                <h4>Mantoo Kumar Singh</h4>
                                <h6 class="mt-2">Business Head</h6>
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img src="assets/img/team/ora.jpeg" alt="img not found">
                            </div>
                            <div class="team-des text-center p-3">
                                <h4>Oriane Playner</h4>
                                <h6 class="mt-2">People University(Administrative)</h6>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </main>
    <?php
        include 'assets/include/footer.php';
    ?>

</body>
</html>