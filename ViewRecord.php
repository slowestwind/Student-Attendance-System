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
    </h2>
  </div>

  <!-- panel body content -->
  <div class="panel panel-body">
    <form class="" action="index.php" method="post">
      <table class="table table-striped">
        <tr>
          <th>#Serial Number</th>
          <th>Date</th>
          <th>View Attendance</th>
        </tr>
        <!-- fetching data from database through mysql query -->
        <?php $result=mysqli_query($connect_db, "SELECT DISTINCT currDate FROM attendanceRecord");
          $serialNumber=0;

          while($row=mysqli_fetch_array($result)){
            $serialNumber++;
         ?>
         <tr>
           <td> <?php echo $serialNumber; ?> </td>
           </td>
           <td>

             <form  action="studentAttendance.php" method="POST">
               <input type="hidden" name="currDate" value=" <?php echo $row['currDate']; ?> ">

               <input type="submit" class="btn btn-primary" name="submit" value="View Attendance">
             </form>
           </td>
         </tr>
       <?php }; ?>
      </table>
    </form>
  </div>
</div>
