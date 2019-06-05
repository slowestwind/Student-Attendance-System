<?php
// here we are going to include the important files.
include('header.php');
include('database.php');

$currDate = date("y-m-d");
$flag =0;
if(isset($_POST["submit"])){
  foreach($_POST['student_attendance'] as $id=>$student_attendance){
    // echo $id;
    $student_name=$_POST['student_name'][$id];
    // echo $student_name;
    $roll_no=$_POST['roll_no'][$id];
    // echo $roll_no;
    $date=date("y-m-d");
    //echo $student_attendance;
    $result=mysqli_query($connect_db, "INSERT INTO attendanceRecord(student_name, roll_no, student_attendance, currDate) VALUES('$student_name', '$roll_no', '$student_attendance', '$date')");
    if($result){
      $flage=1;
    }
  }
  }

 ?>
<!-- panel start -->
<div class="panel panel-default">
  <!-- Panel heading content -->
  <div class="panel panel-heading">
    <h2>
      <a href="addStudent.php" class="btn btn-success">Add student</a>
      <a href="ViewRecord.php" class="btn btn-info pull-right">View All</a>
    </h2>
  </div>
  <div class="well text-center">
      <h2>Date:<?php echo date("y-m-d"); ?></h2>

  </div>

  <!-- Print message for successful submission in database -->
  <?php if($flag==1) { ?>
  <div class="text text-success">
    <strong>Success!</strong> Database is Updated.
  </div>
  <?php } ?>
  <!-- panel body content -->
  <div class="panel panel-body">
    <form class="" action="index.php" method="post">
      <table class="table table-striped">
        <th>#Serial Number</th>
        <th>Student Name</th>
        <th>Roll Number</th>
        <th>Attendance status</th>

        <!-- fetching data from database through mysql query -->
        <?php $result=mysqli_query($connect_db, "SELECT * FROM attendance");
          $serialNumber=0;
          $counter=0;
          while($row=mysqli_fetch_array($result)){
            $serialNumber++;

         ?>
         <tr>
           <td> <?php echo $serialNumber; ?> </td>
           <td> <?php echo $row['student_name']; ?>
             <input type="hidden" name="student_name[]" value=" <?php echo $row['student_name']; ?>">
           </td>
           <td> <?php echo $row['roll_no']; ?>
                <input type="hidden" name="roll_no[]" value="<?php echo $row['roll_no']; ?>"> </td>
           <td>
             <?php echo $counter; ?>
              <input type="radio" name="student_attendance[<?php echo $counter; ?>]" value="Present">Present
              <input type="radio" name="student_attendance[<?php echo $counter; ?>]" value="Absent">Absent
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
