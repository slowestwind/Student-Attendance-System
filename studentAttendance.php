<?php
// here we are going to include the important files.
include('header.php');
include('database.php');


 ?>
<!-- panel start -->
<div class="panel panel-default">
  <!-- Panel heading content -->
  <div class="panel panel-heading">
    <h2>
      <a href="addStudent.php" class="btn btn-success">Add student</a>
      <a href="ViewRecord.php" class="btn btn-info pull-right">Back</a>
    </h2>
  </div>
  <?php echo $_POST['currDate']; ?>
  <!-- panel body content -->
  <div class="panel panel-body">
    <form class="" action="index.php" method="post">
      <table class="table table-striped">
        <th>#Serial Number</th>
        <th>Student Name</th>
        <th>Roll Number</th>
        <th>Attendance status</th>

        <!-- fetching data from database through mysql query -->
        <?php $result=mysqli_query($connect_db, "SELECT * FROM attendanceRecord WHERE currDate = '$_POST[currDate]';");
          $serialNumber=0;
          $counter=0;
          while($row=mysqli_fetch_array($result)){
            $serialNumber++;

         ?>
         <tr>
           <td> <?php echo $serialNumber; ?> </td>
           <td> <?php echo $row['student_name']; ?>
           </td>
           <td> <?php echo $row['roll_no']; ?>
           <td>
             <?php echo $counter; ?>
              <input type="radio" name="student_attendance[<?php echo $counter; ?>]" <?php if($row['student_attendance']=="Present")
              echo "checked=checked" ?> value="Present">Present
              <input type="radio" name="student_attendance[<?php echo $counter; ?>]" <?php if($row['student_attendance']=="Absent")
              echo "checked=checked" ?> value="Absent">Absent
              <?php echo $counter; ?>
           </td>
         </tr>
         <!-- increase counter by 1 -->
          <?php $counter++; ?>
          <!-- termination of while loop -->
         <?php  }; ?>

      </table>
      <!-- Submit button -->
      <input type="submit" class="btn btn-primary" name="submit" value="submit">
    </form>
  </div>
</div>
