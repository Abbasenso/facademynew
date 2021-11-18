<?php  

include 'top.inc.php';
include 'connection.inc.php';

if (isset($_POST['submit'])) {
	$start_date = $conn -> real_escape_string($_POST['start_date']);
	 $batch_name = $conn -> real_escape_string($_POST['batch_name']);
	 $no_of_class = $conn -> real_escape_string($_POST['no_of_class']);


	
	 	
	$result=mysqli_query($conn,"SELECT * FROM `batch` WHERE `batch_name`='$batch_name'");
       $number=mysqli_num_rows($result);
      // echo $number;

       //die();

       if($number>0){

    	
        echo '<script>';
    	echo 'alert("Batch name Already Exists");';
        echo 'location.href="batch.php";';
    	echo '</script>';
    	

    }else{

   
        
  $result=mysqli_query($conn,"INSERT INTO `batch` (`id`, `start_date`, `batch_name`, `no_of_class`, `created_date`, `status`) VALUES (NULL, '$start_date', '$batch_name', '$no_of_class', current_timestamp(), '0')");

   if($result ==true){

    	
          echo "<script language='javascript' type='text/javascript'> location.href='batch.php' </script>"; 
    	

    }else{

    	echo '<script>';
    	echo 'alert("Class room create Failed");';
        echo 'location.href="batch.php";';
    	echo '</script>';


    }
}


          

}

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=$_GET['type'];
	
	
	if($type=='delete'){
		$id=$_GET['id'];
		$delete_sql="delete from batch where id='$id'";
		mysqli_query($conn,$delete_sql);
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
            <h1 class="m-0">Batch</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard2.php">Home</a></li>
              <li class="breadcrumb-item active">Batch</li>
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
                <h3 class="card-title">Create Batch</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="batch.php" method="post">
              <div class="card-body">

                 <div class="form-group">
                    <label for="exampleInputPassword1">Start Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="start_date">
                  </div>

                  <div class="form-group">
                  <label for="exampleSelectBorder">Batch no <code>.plese select batch no(Important)</code></label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="batch_name" required>
                  	<option value="">Select....</option>
                    <option>Batch-1</option>
                    <option>Batch-2</option>
                   <option>Batch-3</option>
                   <option>Batch-4</option>


                    <option>Batch-5</option>
                   <option>Batch-6</option>
                   <option>Batch-7</option>
                    <option>Batch-8</option>
                   <option>Batch-9</option>
                 
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Class</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="no_of_class">
                  </div>
        
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>

        <!--table code -->

        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Batch List</h3>
              </div>

        <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Start Date</th>
                      <th>Batch Name</th>
                      <th>No of Class</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  	<?php
                  $sql=mysqli_query($conn,"SELECT * FROM `batch` ORDER BY `batch`.`id` ASC"); 
                   while ($row=mysqli_fetch_assoc($sql)) {
                  	?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['start_date'] ?></td>
                      <td><?php echo $row['batch_name'] ?></td>
                      <td><?php echo $row['no_of_class'] ?></td>

                      <?php   
                        
                         echo "<td><a href='?type=delete&id=".$row['id']."'><span class='badge badge-danger'>Delete</span></a></td>";
                      ?>
                    </tr>
                <?php
            }
                   ?>
                  </tbody>
                </table>
              </div>
          </div>

      </div>

      <!--table code end -->

    </div>


     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Batch Progress Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>Start Date</th>
                      <th>Batch Name</th>
                        <th>Class Done</th>
                      <th>Progress Bar</th>
                    
                      <th>% Class</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    $sql=mysqli_query($conn,"SELECT batch.*,count(class_assigned.id) as count FROM `batch` ,class_assigned WHERE batch.batch_name=class_assigned.batch_no GROUP by class_assigned.batch_no");


                    while ($row=mysqli_fetch_assoc($sql)) {

                    ?>

                    <tr>
                      <td><?php echo $row['start_date'] ?></td>

                      <td><?php echo $row['batch_name'] ?></td>
                       
                      <td><?php echo $row['count'] ?></td>
                       <?php
                             $total_class=$row['no_of_class'];
                             $count=$row['count'];

                             $count1=$count *100;
                             $count2=($count1/$total_class);

                             if ($count2 <30) {
                             	$color='danger';
                             }elseif ($count2 <50) {
                             	$color='warning';
                             }

                             elseif ($count2 <100) {
                             	$color='info';
                             }

                             elseif ($count2 ==100) {
                             	$color='success';
                             }


                      
                        ?>       


                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-<?php echo $color ?>" style="width:<?php echo $count2.'%' ?>"></div>
                        </div>
                      </td>
                     
                      <td><span class="badge bg-<?php echo $color ?>"><?php echo $whole = floor($count2).'%'?></span></td>
                    </tr>
                
                 <?php
                  }
                 ?>
               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



<?php

include 'footer.inc.php';

?>