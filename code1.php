<?php
include 'connection.php';

$getStudentData=mysqli_query($conn,"SELECT `Name` AS `studentName`, `current_session` FROM `student`");
while($rowStudentData=mysqli_fetch_array($getStudentData)) {
  $Name=$rowStudentData['studentName'];
  $current_session=$rowStudentData['current_session'];
  
  echo $Name."<br>";
  echo $current_session."<br><br>";
}
?>