<?php
session_start();
include 'assets/include/connection.php';
//include 'assets/include/connection2.php';
require 'vendor/autoload.php';

$course_code = $_SESSION['course_id'];
$fid = $_SESSION['fid'];


$servername = "localhost";
$username = "root";
$password = "";
$db="feonnaah_fexternal";

// Create connection
$conn2 = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn2->connect_error);
}
 
$pass=mysqli_fetch_assoc(mysqli_query($conn2,"SELECT `password` FROM `fx_users` WHERE `username`='$fid'"));
  $password=$pass['password'];
//die();

if (isset($_POST['submit'])) {
    $date = date('Y-m-d');
    $stu_name = $conn -> real_escape_string($_POST['stu_name']);
    $fat_name = $conn -> real_escape_string($_POST['fat_name']);
    $mot_name = $conn -> real_escape_string($_POST['mot_name']);
    $dob = $conn -> real_escape_string($_POST['dob']);
    $sex = $conn -> real_escape_string($_POST['sex']);
    $phone = $conn -> real_escape_string($_POST['phone']);
    $phone = '+91'.$phone;
   
    $email = $conn -> real_escape_string($_POST['email']);
    $email1 = $conn -> real_escape_string($_POST['email']);
    $image = $conn -> real_escape_string($_POST['image']);
    $qualification = $conn -> real_escape_string($_POST['qualification']);
    //$course = $conn -> real_escape_string($_POST['course']);
    $language = $conn -> real_escape_string($_POST['language']);



   

    if($language=="English-Hindi"){
       $batch1='Batch-2';

    }else{
      $batch1='Batch-3';
    }


    $occupation = $conn -> real_escape_string($_POST['occupation']);
    $income = $conn -> real_escape_string($_POST['income']);
    $address = $conn -> real_escape_string($_POST['address']);
    $course="Feonnaa Smart Human Nutrition";
   


    $max_id=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as maxid FROM `studentreg` "));
        
      $max_id=$max_id['maxid'];

     $reg_date=date('m-y');
     $lr='LR' ;
     $batch='FA-001'; 
     
     //echo $email1;
    

      $reg_no=$lr.'/'.$reg_date.'/'.$batch.'/'.$max_id;
    
     
   
//die();

     // Email  statrt 

     define( 'SENDGRID_API_KEY', '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' );
	  define( 'FROM_EMAIL', 'faiworld@laminaresearchcenter.com' );
     define( 'FROM_NAME', 'Feonnaa Academy' );
     define( 'TO_EMAIL',$email);
     define( 'TO_NAME', $stu_name );
	

	// create new sendgrid mail
	$email = new \SendGrid\Mail\Mail(); 

	// specify the email/name of where the email is coming from
	$email->setFrom( FROM_EMAIL, FROM_NAME );

	// set the email subject line
	$email->setSubject( "F-Academy Registration Sucessfull" );

	// specify the email/name we are sending the email to
	$email->addTo( TO_EMAIL, TO_NAME );

	// add our email body content
	$email->addContent( "text/plain", "F-Academy" );
	$email->addContent(
	    "text/html", "  <div class='card'>
        <div class='card-body'>
        Dear: <b>$stu_name</b><br><br>

            Thank you Mr. / Ms : <b>  $stu_name</b>, for Registering with Feonnaa Academy.<br><br>

            We, Welcome you to the Feonnaa Academy Online Digital Education Platform, powered by University of the People, Canada.<br><br>

            Your registration details are given below:<br><br>

            Registration Number:<b> $reg_no<b><br>

            Name of Course: <b>Feonnaa Smart Human Nutrition<b><br>

            Name of registered student: <b>$stu_name <b><br> 

            Date of Birth:<b> $dob <b><br>
            Class Language:<b> $language <b><br>

            Batch-no:<b> $batch1 <b><br>
            

            Username:<b>$fid<b><br>

            Password:<b>$password<b><br>

            We wish you a wonderful learning experience with Feonnaa Academy.<br>

            For any further queries, please contact with the below-given details.<br>
         
          
             <p>
             <b>Warm Regards</b>,<br>

              Lamina Research Center<br>
              Mobile # +91 8660867952<br>
              Email - info@uopepole.com<br>
                     faiworld@laminaresearchcenter.com


                </p>
               
                  
        </div>
    </div>"
	);

	// create new sendgrid
	


		// try and send the email
	

	  


     // Email end
  



     
    $insert=mysqli_query($conn,"INSERT INTO `studentreg` (`id`, `feonnaa_id`, `feonnaa_name`, `student_name`, `parents_name`,
     `mother_name`, `contact_no`, `email`, `dob`, `course_name`, `qualification`, `sex`, `language`, `occupation`, `income`, 
     `address`, `course_slot`, `application_date`, `created_date`, `course_id`, `course_duration`, `batch_no`, `reg_no`, `status`) 
     VALUES (NULL, '$fid','$fid', '$stu_name', '$fat_name', '$mot_name', '$phone', '$email1', '$dob', '$course', '$qualification', 
     '$sex', '$language', '$occupation', '$income', '$address','','$date', current_timestamp(), '$course_code', '', '$batch1', '$reg_no', '0')");
  
    
 // echo $insert;

//die();

     if ($insert) {
      $sendgrid = new \SendGrid( SENDGRID_API_KEY );
      $response = $sendgrid->send( $email );
        echo '<script type="text/javascript">';
        echo 'alert("Registration sucessfull");';
        echo 'window.location.href = "courses.php";';
        echo '</script>';
     }else{
        echo '<script type="text/javascript">';
        echo 'alert("Registration Failed");';
        echo 'window.location.href = "form.php";';
        echo '</script>';
     }

}




?>