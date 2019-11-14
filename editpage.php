<?php
$link=mysqli_connect("localhost","root","","studdb");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{       
        $reg=trim($_POST["reg"]);
        $fn=trim($_POST["fn"]);
        $ln=trim($_POST["ln"]);
        $dob=trim($_POST["dob"]);
        $sex=trim($_POST["sex"]);
        $city=trim($_POST["city"]);
        $dis=trim($_POST["dis"]);
        $st=trim($_POST["st"]);
        $cs=trim($_POST["cs"]);
        $doj=trim($_POST["doj"]);
        $em=trim($_POST["em"]);
        $mob=trim($_POST["mob"]);
        $username=trim($_POST["username"]);
        
       
       $sql = "UPDATE student SET Reg_No=$reg,F_name='$fn',L_name='$ln',DOB='$dob',Sex='$sex',City='$city',District='$dis',State='$st',Course='$cs',DOJ='$doj',email='$em',mob='$mob' WHERE username = '$username';";
       $result = mysqli_query($link, $sql);
       if ( mysqli_num_rows($result) ==1)
        {
        
        include("studentHome.php");

        } 
        else 
        {
         echo "Error:Invalid Username Or passWord";
        }
       
  
}
?>