<?php 

include "config.php";

if(isset($_POST['submit'])){

    $name=$conn -> real_escape_string($_POST['name']);
    $email=$conn -> real_escape_string($_POST['email']);
    $phone=$conn -> real_escape_string($_POST['phone']);
    $age=$conn -> real_escape_string($_POST['age']);
    $city=$conn -> real_escape_string($_POST['city']);
    
    
    $query1=mysqli_query($conn,"SELECT * FROM `nu_reg` where number='$phone' ");
    
    //$number=$query1['number'];
    
    
   
   //die();
    
    $result=mysqli_num_rows($query1);
    
    if($result > 0){
        
     ?>
  
    <script>
   window.addEventListener('load',function(){
  swal({
  title: "Ufff!",
  text: "You already Register!",
  icon: "warning",
  button: "Ok!",
   });
  });
 
   </script>
  
  
  <?php
        
        
    }else{
        
    
    
    
    
    $query=mysqli_query($conn,"INSERT INTO `nu_reg` (`id`, `name`, `email`, `number`, `age`, `city`, `datetime`) VALUES (NULL, '$name', '$email', '$phone', '$age', '$city', current_timestamp())");
    
    
    if ($query== true) {
  ?>
  
    <script>
   window.addEventListener('load',function(){
  swal({
  title: "Good job!",
  text: "Thank You for Registration!",
  icon: "success",
  button: "Ok!",
});
  });
 
   </script>
  
  
  <?php
  
    
  }else{
    ?>
   <script>
   window.addEventListener('load',function(){
   swal("Failed!", "something went wrong!", "error");
  });
 
   </script>

    <?php
  } 
  
    }
   
   
   
  
}



?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>




<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registration Form</p>

                <form action="" class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Your Name <strong style="color:red">*</strong></label>
                      <input type="text" id="form3Example1c" class="form-control" name="name"  required />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email <strong style="color:red">*</strong></label>
                      <input type="email" id="form3Example3c" class="form-control" name="email" required />
                      
                    </div>
                  </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                         <label class="form-label" for="form3Example3c">Your Mobile Number <strong style="color:red">*</strong></label>
                     <input type="tel" class="form-control" name="phone" id="phone_number" pattern="[6789][0-9]{9}"  required>
                     
                    </div>
                  </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Age <strong style="color:red">*</strong></label>
                      <input type="number" id="form3Example3c" class="form-control" name="age" required />
                      
                    </div>
                  </div>

                   <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example3c">Your City <strong style="color:red">*</strong></label>
                      <input type="text" id="form3Example3c" class="form-control" name="city" required />
                    
                    </div>
                  </div>

                

             

              
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg"name="submit">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="undraw_doctor_kw5l.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>