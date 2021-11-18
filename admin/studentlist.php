<?php 

include 'top.inc.php';
include 'connection.inc.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard2.php">Home</a></li>
              <li class="breadcrumb-item active">Student List</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
              <form action="" method="post">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">

                    <input type="text" name="data_search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" name="search" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>

                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Sl no</th>
                      <th>Application Date</th>
                      <th>Reg ID</th>
                      <th>Batch</th>
                      <th>Student Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Parents Name</th>
                      <th>Mother Name</th>
                      <th>Address</th>
                      <th>Father Occupasion</th>
                      <th>Father Income</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php  
                     $sql=mysqli_query($conn,"SELECT * FROM `studentreg` ORDER BY `studentreg`.`id` DESC"); 

                     if (isset($_POST['search'])) {
                       $data_search=$_POST['data_search'];

                      // echo $data_search ;
                     if ($data_search!='') {
                         $sql=mysqli_query($conn,"SELECT * FROM `studentreg` where (student_name LIKE '%$data_search%' or reg_no LIKE '%$data_search%' or contact_no LIKE '%$data_search%' or application_date LIKE '%$data_search%' or email LIKE '%$data_search%' or  batch_no LIKE '%$data_search%')  order by id desc");
                     }else{

                      $sql=mysqli_query($conn,"SELECT * FROM `studentreg` ORDER BY `studentreg`.`id` DESC"); 
                     }
                     



                     }
                       $number= mysqli_num_rows($sql);
                     echo 'Number of Students -'.$number;
                     
                     while ($row=mysqli_fetch_assoc($sql)) {
                     
                    ?>


                    <tr>
                      <td><a href="studentupdate.php?id=<?php echo $row['id'];?>"><?php echo $row['id']; ?></a></td>
                      <td><?php echo $row['application_date']; ?></td>
                      <td><?php echo $row['reg_no']; ?></td>
                      <td><?php echo $row['batch_no']; ?></td>
                      <td><?php echo $row['student_name']; ?></td>
                      <td><?php echo $row['dob']; ?></td>
                      <td><?php echo $row['sex']; ?></td>
                      <td><?php echo $row['contact_no']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['parents_name']; ?></td>
                    <td><?php echo $row['mother_name']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                     <td><?php echo $row['occupation']; ?></td>
                       <td><?php echo $row['income']; ?></td>
                     
                    </tr>
                   <?php

               }
                   ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>










<?php

include 'footer.inc.php';
?>