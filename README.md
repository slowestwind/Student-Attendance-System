# Student-Attendance-System
You have heard about the Attendance register in ancient school. But now is digital world where everything is digitized so... I am going to make a Student Attendance System or I can say attendance system for anything like employee... just we have to change name of the system because all functions are same. Let see summary of the used php pages:

## database.php
As it's name suggest it is used to connect the database to the page.

## header.php
It is a template page which is required every time on top the page. that's why it is created separately so that it can include later in each page.

## addStudent.php
addStudent.php as name suggest it is used to add student to database.

## index.php
This is main page where we actually update today's attendance of the student. From here you can switch to view all Previous Records
or Go to add new students.

## ViewRecord.php
This page is linked from the index.php page, It's main purpose is to show you the past attendance records on dates... from here you can select a date for which
you want to see the attendance record on that date. From here you are redirected to page studentAttendance.php.

## studentAttendance.php
Here you will able to see the detailed information about the student the he was Absent/Present on that date.
