<?php
  include("header.php");
  include("database.php");

  if(isset($_POST["submit"])){
  $result=mysqli_query($connect_db, "INSERT INTO attendance(student_name, roll_no) VALUES('$_POST[name]','$_POST[roll]')");
  }


 ?>
 <div class="panel panel-default" style="margin: 0px 40px 0px 40px;">
   <div class="panel-heading">
     <h2>
     <a href="index.php" class="btn btn-primary">Back</a>
     <a href="index.php" class="btn btn-info pull-right">Add Student </a>
     </h2>
   </div>

   <form action="index.php" method="post">
     <div class="form-group" style="margin: 20px";>
       <label for="name">Student Name:</label>
       <input type="text" name="name" id="name" class="form-control" required>
     </div>
     <div class="form-group" style="margin: 20px";>
       <label for="name">Roll no.:</label>
       <input type="text" name="roll" id="roll" class="form-control" required>
     </div>
     <div class="form-group" style="margin: 20px";>
       <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
     </div>
   </form>


 </div>
