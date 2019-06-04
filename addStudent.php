<?php
  // include header.php file it remains throughout the website
  include("header.php");
  // include the database.php file for the database connetion
  include("database.php");

  // variable for checking the database working
  $flag = 0;
  if(isset($_POST["submit"])){
    $currDate = date("d-m-y");
  $result=mysqli_query($connect_db, "INSERT INTO attendance(student_name, roll_no, currDate) VALUES('$_POST[student_name]','$_POST[roll_no]','$currDate')");
    if($result){
      $flage=1;
    }
  }


 ?>
 <div class="panel panel-default" style="margin: 0px 40px 0px 40px;">
   <div class="panel-heading">
     <h2>
     <a href="addStudent.php" class="btn btn-primary">Add Student</a>
     <a href="index.php" class="btn btn-info pull-right">View All</a>
     </h2>
   </div>
   <div class="well text-center">
     <h2>Date: <?php echo date("d-m-y"); ?></h2>
   </div>

   <?php if($flage=1){ ?>
     <div class="alert alert-success">
       <strong>Success!</strong> Data has been sucessfully updated.
     </div>
   <?php } ?>
   <form action="addStudent.php" method="post">
     <div class="form-group" style="margin: 20px";>
       <label for="name">Student Name:</label>
       <input type="text" name="student_name" id="name" class="form-control" required>
     </div>
     <div class="form-group" style="margin: 20px";>
       <label for="name">Roll no.:</label>
       <input type="text" name="roll_no" id="roll_no" class="form-control" required>
     </div>
     <div class="form-group" style="margin: 20px";>
       <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
     </div>
   </form>


 </div>
