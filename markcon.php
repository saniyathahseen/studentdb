<?php
session_start();
       $reg=$_POST['txtreg'];
       $nm=$_POST['txtnm'];
       $sm=$_POST['txtsm'];
       $cr=$_POST['txtcr'];
       $s1=$_POST['txts1'];
       $m1=$_POST['txtm1'];
       $s2=$_POST['txts2'];
       $m2=$_POST['txtm2'];
       $s3=$_POST['txts3'];
       $m3=$_POST['txtm3'];
       $obtmarks= $m1+ $m2+ $m3;
        $totmarks=300;
       $per=($obtmarks/ $totmarks)*100;
$conn=mysqli_connect("localhost","root","","studdb") or die("failed:".mysqli_connect_error());
$markinto=mysqli_query($conn,"insert into mark(Reg_No,Stud_Name,Sem,Course,Sub1,mark1,Sub2,mark2,Sub3,mark3,total,percentage) values('$reg','$nm','$sm','$cr','$s1','$m1','$s2','$m2','$s3','$m3','$totmarks','$per')") or die(mysqli_error($conn));
if($markinto)
{echo '<script language="javascript">';
echo 'alert("Saved successfully ")';
echo '</script>';
header("location:home.php") ;}
       $grade=($obtmarks/ $totmarks)*100;
$conn=mysqli_connect("localhost","root","","studdb") or die("failed:".mysqli_connect_error());
$markinto=mysqli_query($conn,"insert into mark(Reg_No,Stud_Name,Sem,Course,Sub1,mark1,Sub2,mark2,Sub3,mark3,total,grade) values('$reg','$nm','$sm','$cr','$s1','$m1','$s2','$m2','$s3','$m3','$totmarks','$grade')") or die(mysqli_error($conn));
if($markinto)
echo '<script language="javascript">';
echo 'alert("Saved successfully ")';
echo '</script>';
$conn->close();
?>