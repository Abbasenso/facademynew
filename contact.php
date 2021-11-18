<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <script defer src="https://kit.fontawesome.com/83ce503d6d.js" crossorigin="anonymous"></script>
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
                    <a href="index.php" class="nav-links">Home</a>
                    <a href="coursess.php" class="nav-links">Courses</a>
                    <a href="about.php" class="nav-links">about</a>
                    <a href="team.php" class="nav-links">team</a>
                    <a href="contact.php" class="nav-links active">Enquiry</a>
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
            <h6>HOME > CONTACT ></h6>
            <h1>Contact Us</h1>
        </section>
        <section id="contactDetails">
            <div class="container">
                <div class="row justify-content-center db">
                    <div class="col-lg-6 mp">
                        <!-- map  -->
                        <div class="mapx">
                            <img src="assets/img/map/map.png" alt=" not found">
                        </div>

                    </div>
                    <div class="col-lg-6 bg-w">
                        <h2>Contact Us</h2>
                        <p>We're open for any suggestion or just to have chat</p>
                        <div class="address">
                            <div class="mail">
                                <div class="addx">ADDRESS :</div>
                                <p>S-21,Kasba Industrial Estate
Phase-1,Kolkata-700107</p>
                            </div>
                            <div class="mail">
                                EMAIL :<br>
                                info@theedupeople.com(Canada)
                                <br>
                                faiworld@laminaresearchcenter.com
                            </div>
                            <div class="mail">
                                PHONE : <br>
                                18003137322
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