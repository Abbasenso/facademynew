<?php
include 'assets/include/connection.php';
include 'assets/include/logreg.php';
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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
</head>

<body>
    <main id="main">
        <!-- overlay -->
        <img class="img-bg" src="assets/img/bg-1.jpg" alt="">
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
                    <a href="coursess.php" class="nav-links">Courses</a>
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
        <!-- home section  -->
        <section id="home" class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 mt-home">
                        <div class="home-title">welcome to f-academy</div>
                        <h1 class="display-5">Best Online Education Expertise </h1>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <div class="btns">
                            <a href="coursess.php" class="btn-2">get started now<i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section  -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <img src="assets/img/about.jpg" alt="about img not found">
                    </div>
                    <div class="col-lg-6 col-md-7 about-content">
                        <div class="about-title">learn anything</div>
                        <h2 class="lele">Benefits About Online Learning Expertise</h2>
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-dice"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Opportunity</h4>
                                <div class="a-card-content">Bring you opportunity for distance learning at your desired
                                    time from your home.</div>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-university"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Knowledge</h4>
                                <div class="a-card-content">
                                    Offering you of high quality courses for all levels,
                                    from beginners to advance, covering a wide array of subjects,
                                    including personality Development, Computer learning, Nutrition,
                                    Artificial Intelligence..
                                </div>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="about-icon"><i class="fab fa-jenkins"></i></div>
                            <div class="a-contents">
                                <h4 class="a-card-title">Learn With Expert</h4>
                                <div class="a-card-content">
                                    Giving you opportunity to learn digitally from audio
                                    visual demonstrationAn online library to get vast knowledge
                                    on various topic.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="courses">
            <div class="container text-center">
                <div class="courses-title mt-5">our courses</div>
                <h1 class="mt-3">Explore Our Popular Online Courses</h1>
            </div>
            <?php
                require 'assets/include/courseShow.php';
            ?>
           
            
            </div>
            <!-- end swiper container  -->
        </section>


    </main>
    <?php 
        include 'assets/include/footer.php';
        // include 'assets/include/modal.php';
    ?>



</body>

</html>