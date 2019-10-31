<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student</title>
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
  <body background="gd.jpg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Vitae</a>
        </div>
        <form class="navbar-form navbar-left" action="viewfee.php" method="post">
          <div class="input-group";>
            
          
            </div>
          </div>
        </form>
      </div>
    </nav>
    <center>
      <font size=6><b>FEES STATUS</b></font>
    </center><br>
   
        
              
    <br><br>
    <center>
    
    <div class="fixed-footer">
      <div class="container">For More Info:Conatact:+91485679</div>  
      <center>
        <div class="container">Copyright &copy;Vitae</div>  
      </center>
    </div>
  </body>
</html>

<center>
   
    <?php
    session_start();
    $val=$_POST['search'];
    $conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());

    $sql2="select * from fees where fees.Reg_No=$val";
    $sql=mysqli_query($conn,$sql2);
    while ($row1 = mysqli_fetch_array($sql)){
        ?>
        <Form class="form-container"style="">
        <span>Student name:</span><span id="reg"></span> <?php echo $row1['Student_Name']; ?><br><br>
        <span>Semester:</span><span id="fname"></span><?php echo $row1['Semester']; ?><br><br>
        <span>Course:</span><span id="lname"></span><?php echo $row1['Course']; ?><br><br>
        <span>Date:</span><span id="dob"></span><?php echo $row1['Date']; ?><br><br>
        <span>Amount:</span><span id="dob"></span><?php echo $row1['Amount']; ?><br><br>
      </form>
      <?php
    }
    ?>
    </center>
