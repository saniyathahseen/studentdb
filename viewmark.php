<!DOCTYPE html>
<html lang="en">
<head>
  <title>View mark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .fixed-footer{
        width: 100%;
        position: fixed;        
        background:black;
        padding: 5px 0;
        color: #fff;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container p{
        line-height: 200px; 
      }
    .form-container  {
      background-color: rgb(210, 238, 210);
      height:150px;
      width: 500px;
      border: solid;
      text-align: left;
      padding: 10px;
    }
    .form-container1  {
      background-color: rgb(210, 238, 210);
      height:175px;
      width: 500px;
      border: solid;
      text-align: left;
      padding: 10px;
    }
   
  </style>
  </head>
  <body background="image2.jpg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Vitae</a>
        </div>
        <form class="navbar-form navbar-left" action="viewmark.php" method="post">
          <div class="input-group";>
            
          
            </div>
          </div>
        </form>
      </div>
    </nav>
    <center>
      <font size=6><b>MARK STATUS</b></font>
    </center><br>
   
        
              
    <br><br>
    <center>
    
    <div class="fixed-footer">
      <div class="container">For More Info:Conatact:+91485679</div>  
      <center>
        <div class="container">Copyright &copy;Vitae</div>  
      </center>
    </div>
 

<center>
   
    <?php
    session_start();
    $val=$_POST['search'];
    $conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());
    
   $sql2="select * from mark where mark.Reg_No=$val";
        
        $sql=mysqli_query($conn,$sql2);
        if($sql==true){
        echo "<table style='width:90%'><TR style='font-size:30px'><TD COLSPAN=15><CENTER><hr><b></td><tr style='font-size:20px'><td>Student Name<hr></td><td>Course<hr></td><td>Semester<hr></td><td>Subject1<hr></td><td>mark1<hr></td><td>Subject2<hr></td><td>Mark2<hr></td><td>Subject3<hr></td><td>mark3<hr></td><td>Total marks<hr></td></tr>";
        while ($row1 = mysqli_fetch_array($sql))
    {
      echo "<tr><td>".$row1['Student_Name']."</td><td>".$row1['Course']."</td><td>".$row1['Semester']."</td><td>".$row1['Subject1']."</td><td>".$row1['mark1']."</td><td>".$row1['Subject2']."</td><td>".$row1['mark2']."</td><td>".$row1['Subject3']."</td><td>".$row1['mark3']."</td><td>".$row1['total']."</td></tr>";
    }
    echo "</table>";
   }
    else{
     echo ("Invalid Register number");
    }
?>
</center>
 </body>
</html>
