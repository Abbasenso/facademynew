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
                    <a href="index.php" class="nav-links ">Home</a>
                    <a href="coursess.php" class="nav-links">Courses</a>
                    <a href="about.php" class="nav-links active">About</a>
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
        <section id="contact">
            <h6>HOME > ABOUT ></h6>
            <h1>About Us</h1>
        </section>
        
         <!-- about section  -->
         <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <img src="assets/img/about.jpg" alt="about img not found">
                    </div>
                    <div class="col-lg-6 col-md-6 about-content">
                        <div class="about-title">learn anything</div>
                        <div class="display-5 mb-4">Benefits About Online Learning Expertise</div>
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Online Courses</h4>
                                <div class="a-card-content">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-certificate"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Get certificate</h4>
                                <div class="a-card-content">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="about-icon"><i class="fab fa-jenkins"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Learn With Expert</h4>
                                <div class="a-card-content">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter section  -->
       <!-- <section id="counter" class="counter">
            <div class="conteiner-fluid pdx-0">
                <img src="assets/img/count.jpg" alt="img not found">
            </div>
        </section> -->
    </main>
    <?php
        include 'assets/include/footer.php';
    ?>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>