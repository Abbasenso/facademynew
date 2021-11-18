<?php 
session_start();

//include 'assets/include/connection.php';

//$conn=mysqli_query('localhost','feonnaa_fcheck','Abbas@1995','feonnaa_fxternal');

$servername = "localhost";
$username = "root";
$password = "";
$db="feonnaah_fexternal";



// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 //echo "Connected successfully";




$course_id=$_GET['course_id'];

if ($_SESSION['course_id'] == true  &&  $_SESSION['fid'] == true ) {
   echo "<script>";
     echo 'window.location.href = "courses.php";';
    echo "</script>";
} else {
  echo "";
}


if(isset($_POST['login'])){

  $fid = $conn -> real_escape_string($_POST['fid']);
  $password = $conn -> real_escape_string($_POST['password']);
  
  $res=mysqli_query($conn,"SELECT * FROM `fx_users` WHERE `username`='$fid' and `pro_id`='$course_id' and `password`='$password'");
  $row=mysqli_num_rows($res);

  if ($row > 0) {
    echo "<script language='javascript' type='text/javascript'> location.href='form.php' </script>"; 
   // $_SESSION['items']=array($course_id,$fid);

    $_SESSION['course_id'] = $course_id;
    $_SESSION['fid'] = $fid;
  }else{
    ?>
   <script>
   window.addEventListener('load',function(){
   swal("Failed!", "You username and password wrong!", "error");
  });
 
   </script>

    <?php
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css" />
     <link rel = "icon" href = "assets/img/facademylogo.png" type = "image/x-icon">
<title>F-academy</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

           <!--  Login form start -->
          <form action="" class="sign-in-form" method="post">
            <h3 class="title">Sign In</h3>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Feonnaa ID" name="fid"  required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  name="password" required/>
            </div>
            <input type="submit" value="Login"  name="login" class="btn solid" />
          
          
          </form>

          <!--  Login form end -->



         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to F-Academy</h3>
            <p>
              Please login your Feonnaa_ID and Password and Explore with Us..
            </p>
           <!-- <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> -->
          </div>
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
             
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
