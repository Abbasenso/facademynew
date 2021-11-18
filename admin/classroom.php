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
            <h1 class="m-0">Create Class Room</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard2.php">Home</a></li>
              <li class="breadcrumb-item active">Create Class Room</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
     <form action="classroom_insert.php" method="post">

       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Class Room</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              	 <div class="form-group">
                  <label>Class Date:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control float-right" id="reservationtime" name="date" required>
                  </div>
                  <!-- /.input group -->
                </div>
             
                <div class="row">

                <div class="col-sm-6">
              	 <div class="form-group">
                  <label>Class time from:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="time" class="form-control float-right" id="reservationtime" name="from" required>
                  </div>
                  <!-- /.input group -->
                </div>
                </div>

                 <div class="col-sm-6">
              	 <div class="form-group">
                  <label>Class time to:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="time" class="form-control float-right" id="reservationtime" name="to" required>
                  </div>
                  <!-- /.input group -->
                </div>
                </div>

                </div>

          
                <div class="form-group">
                  <label for="exampleSelectBorder">Batch no <code>.plese select batch no(Important)</code></label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="batch_no" required>
                  	<option value="">Select....</option>
                    <option>Batch-1</option>
                    <option>Batch-2</option>
                   <option>Batch-3</option>
                 
                  </select>
                </div>



                  
               



               
                <div class="form-group">
                  <label for="exampleInputBorder">Class Topic </label>
                  <input type="text" class="form-control form-control-border" id="exampleInputBorder" name="topic" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Class Description </label>
                  <input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" name="description" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputRounded0">Class Link <code></code></label>
                  <input type="text" class="form-control form-control-border" id="exampleInputRounded0" name="link" required>
                </div>

                 <div class="form-group">
                  <label for="exampleSelectBorder">App  <code>.which  app link, plese select</code></label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="app" required>
                  	<option value="">Select....</option>
                    <option>Zoom</option>
                    <option>Google Meet</option>
                   <option>Jio Meeting</option>
                 
                  </select>
                </div>

             
                
              </div>
              <!-- /.card-body -->
            </div>
              <div class="card-footer">
                  <button type="submit" name="create" class="btn btn-success">Create</button>
                </div>
          </form>


<?php

include 'footer.inc.php';

?>