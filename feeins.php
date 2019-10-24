<?php
session_start();
$fno=$_POST['textnames'];
$fdte=$_POST['fdate'];
$rno=$_POST['regno'];
$sname=$_POST['studname'];
$sem=$_POST['Semester'];
$course=$_POST['Course'];
$amount=$_POST['amt'];
$conn=mysqli_connect("localhost","root","","studdb") or die("failed:".mysqli_connect_error());
$feeinto=mysqli_query($conn,"insert into fees(Fee_no,Date,Reg_No,Student_Name,Semester,Course,Amount) values('$fno','$fdte','$rno','$sname','$sem','$course','$amount')") or die(mysqli_error($conn));
if($feeinto)
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
$conn->close();
?>