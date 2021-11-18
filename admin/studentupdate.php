<?php 

include 'top.inc.php';
include 'connection.inc.php';

$id=$_GET['id'];

$row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `studentreg` WHERE `id`=$id"));

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard2.php">Home</a></li>
              <li class="breadcrumb-item active">Student View</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


      	 <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                <div class="card-body">
                 
                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Student Name</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['student_name']  ?>" disabled>
                  </div>

               <div class="form-group">
                    <label for="exampleInputPassword1">Parents Name</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['parents_name']  ?>" disabled>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Mother Name</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['mother_name']  ?>" disabled>
                  </div>

                     <div class="row">
               	<div class="col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['dob']  ?>" disabled>
                  </div>
                  </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['sex']  ?>" disabled>
                  </div>
              </div>
             </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Qualification</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['qualification']  ?>" disabled>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Parents Occupation</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['occupation']  ?>" disabled>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Parents Income</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['income']  ?>" disabled>
                  </div>

                 
                  
                
                </div>
                <!-- /.card-body -->

             
            </div>

        </div>

        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Course Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="update.php" method="post">
                <div class="card-body">
               	
                 
                  <input type="hidden" class="form-control form-control-sm" name="id" value="<?php  echo $id  ?>" >
               
               
                	<div class="form-group">
                    <label for="exampleInputEmail1">Registration ID</label>
                  <input type="text" class="form-control form-control-sm" value="<?php  echo $row['reg_no']  ?>" disabled>
               </div>
               
               <div class="row">
               	<div class="col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Application Date</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['application_date']  ?>" disabled>
                  </div>
                  </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Feonnaa ID</label>
                   <input type="text" class="form-control form-control-sm" value="<?php  echo $row['feonnaa_id']  ?>" disabled>
                  </div>
              </div>
             </div>

               
                <div class="form-group">
                    <label for="exampleInputEmail1">Course name</label>
               <input type="text" class="form-control form-control-sm" value="<?php  echo $row['course_name']  ?>" disabled>
               </div>


                  <div class="row">
               	<div class="col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No</label>
                   <input type="text" class="form-control form-control-sm" name="mobile" value="<?php  echo $row['contact_no']  ?>">
                  </div>
                  </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                   <input type="text" class="form-control form-control-sm" name="email" value="<?php  echo $row['email']  ?>">
                  </div>
              </div>
             </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                     <textarea class="form-control" rows="2" name="address"><?php  echo $row['address']  ?></textarea>
                  </div>
               
               
                  <div class="row">
               	<div class="col-sm-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Class Language</label>
                    <select class="form-control form-control-sm" name="language">
                    	<option><?php  echo $row['language']  ?></option>
                    	<option>English-Hindi</option>
                    	<option>English-Bengali</option>
                    </select>
                  </div>
                  </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Batch No</label>
                    <select class="form-control form-control-sm" name="batch">
                      <option><?php  echo $row['batch_no']  ?></option>
                      <option>Batch-1</option>
                      <option>Batch-2</option>
                    </select>
                  </div>
              </div>
             </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit"  name="update" class="btn btn-primary" value="Update">
                </div>
              </form>
            </div>

        </div>
    </div>






<?php

include 'footer.inc.php';



// update code

?>

