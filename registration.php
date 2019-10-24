<?php
session_start();
$regno=$_POST['regnum'];
$fname=$_POST['fstnm'];
$lname=$_POST['lstnm'];
$dob=$_POST['dob'];
$gndr=$_POST['sex'];
$city=$_POST['city'];
$dis=$_POST['district'];
$ste=$_POST['state'];
$crse=$_POST['course'];
$doj1=$_POST['doj'];
$email=$_POST['emailid'];
$mob=$_POST['mobileno'];
$un=$_POST['username'];
$pw=$_POST['password'];
$conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());
$sql1=mysqli_query($conn,"insert into student (Reg_No,F_name,L_name,DOB,Sex,City,District,State,Course,DOJ,email,mob,username,password) values ('$regno','$fname','$lname','$dob','$gndr','$city','$dis','$ste','$crse','$doj1','$email','$mob','$un','$pw')") or die(mysqli_error($conn));
if($sql1)
$message = "Rigistered Successfully****Thank You;
echo "<script type='text/javascript'>alert('$message');</script>";

$conn->close();
?>