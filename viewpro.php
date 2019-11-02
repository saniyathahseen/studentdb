<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
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
      background-color: grey;
      height:550px;
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
        
         
          </div>
        </form>
      </div>
    </nav>
    <center>
      <font size=6><b>My Profile </b></font>
    </center><br>
    <center>
    
    <?php
    session_start();
      $conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());

    $sql2="select * from student where student.Reg_No=$val";
    $sql=mysqli_query($conn,$sql2);
    while ($row1 = mysqli_fetch_array($sql)){
        ?>

        <Form class="form-container"style="">
        <span>Register Number   :</span><span id="reg"></span> <?php echo $row1['Reg_No']; ?><br><br>
        <span>First Name        :</span><span id="fname"></span><?php echo $row1['F_name']; ?><br><br>
        <span>Last Name         :</span><span id="lname"></span><?php echo $row1['L_name']; ?><br><br>
        <span>Date Of Birth     :</span><span id="dob"></span><?php echo $row1['DOB']; ?><br><br>
        <span>Sex               :</span><span id="sex"></span><?php echo $row1['Sex']; ?><br><br>
        <span>City              :</span><span id="city"></span><?php echo $row1['City']; ?><br><br>
        <span>District          :</span><span id="dis"></span><?php echo $row1['District']; ?><br><br>
        <span>State             :</span><span id="state"></span><?php echo $row1['State']; ?><br><br>
        <span>Course            :</span><span id="course"></span><?php echo $row1['Course']; ?><br><br>
        <span>Date Of Joining   :<span id="doj"></span><?php echo $row1['DOJ']; ?><br><br>
        <span>EmailId           :</span><span id="email"></span><?php echo $row1['email']; ?><br><br>
        <span>MobileNo          :</span><span id="mob"></span><?php echo $row1['mob']; ?><br><br>
      </form>
    
      <?php
    }
    ?>
    <button>Edit</button>
   
    </center>
    <br><br><br><br><br>
    <div class="fixed-footer">
      <div class="container">For More Info:Conatact:+91485679</div>  
      <center>
        <div class="container">Copyright &copy;Vitae</div>  
      </center>
    </div>
    <?php

?>
  </body>
</html>
   