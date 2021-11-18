<?php 

include 'top.inc.php';
include 'connection.inc.php';


if(isset($_GET['type']) && $_GET['type']!=''){
  $type=$_GET['type'];
  if($type=='status'){
    $operation=$_GET['operation'];
    $id=$_GET['id'];
    if($operation=='new'){
      $status='1';
    }else{
      $status='0';
    }
    $update_status_sql="update class_assigned set a_status='$status' where id='$id'";
    mysqli_query($conn,$update_status_sql);
  }
  
}

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

                  <div class="row">
                    <div class="col-sm-2">
                  <div class="input-group input-group-sm" style="width: 250px;">

                    <input type="text" name="data_search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" name="search" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>

                   <div class="col-sm-2">
                  <div class="input-group input-group-sm" style="width: 250px;">

                    

                    <div class="input-group-append">
                     <button  class="btn btn-default" >
                       <a href="classroom.php" style="color:#ffff;"> Create Class Room</a>
                      </button>
                    </div>
                  </div>
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
                      <th>Date</th>
                      <th>Time</th>
                      <th>Class No</th>
                      <th>Batch No</th>
                      <th>Topic</th>
                      <th>Description</th>
                      <th>App Type</th>
                      <th>Class Link</th>
                      <th>Class Status</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                   <?php  
                     $sql=mysqli_query($conn,"SELECT * FROM `class_assigned` ORDER BY `class_assigned`.`id` DESC"); 

                     if (isset($_POST['search'])) {
                       $data_search=$_POST['data_search'];

                       //echo $data_search ;
                    if ($data_search!='') {
                         $sql=mysqli_query($conn,"SELECT * FROM `class_assigned` where (created_date LIKE '%$data_search%' or batch_no LIKE '%$data_search%' or class_app LIKE '%$data_search%')  order by id desc");
                     }else{

                      $sql=mysqli_query($conn,"SELECT * FROM `class_assigned` ORDER BY `class_assigned`.`id` DESC"); 
                     }
                     



                     }

                    $number= mysqli_num_rows($sql);
                     echo 'Number of class -'.$number;
                     while ($row=mysqli_fetch_assoc($sql)) {
                     
                    ?>

                    
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['created_date']; ?></td>
                      <td><?php echo '('.$row['from_date'].')' .'-'.'('.$row['to_date'] .')'; ?></td>
                      <td><?php echo 'Class No - '.$row['class_no']; ?></td>
                      <td><?php echo $row['batch_no']; ?></td>
                      <td><?php echo $row['class_topic']; ?></td>
                      <td><?php echo $row['class_description']; ?></td>
                      <td><?php echo $row['class_app']; ?></td>
                      <td><?php echo $row['class_link']; ?></td>

                      <?php
                         if($row['a_status']==0){

                          
                         echo" <td><a href='?type=status&operation=new&id=".$row['id']."'><span class='badge badge-danger'>New</span></a></td>";
                          
        
                }else{
                  

                  echo" <td><a href='?type=status&operation=completed&id=".$row['id']."'><span class='badge badge-success'>Completed</span></a></td>";

                  
                }
                      ?>
             
                     
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