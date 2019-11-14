<?php
$link=mysqli_connect("localhost","root","","studdb");
if(!$link)
{
    die ("couldn't connect". mysqli_connect_error());
}
else
{       $username=trim($_POST["username1"]);
        $password=trim($_POST["password1"]);
       
        $sql = "SELECT username FROM adminlogin WHERE username = '$username' and password = '$password';";
       $result = mysqli_query($link, $sql);
       if ( $result)
        {
        
        include("home.php");

        } 
        else 
        {
         echo "Error:Invalid Username Or passWord";
        }
       
  
}
?>