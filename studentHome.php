<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
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
      .round{
        border-radius: 50%;
      }
      span{
        font-size: large;
      }
      .marq{
        color:red;
        margin-left:1050px;
       
      }
      
    </style>
  </head>
  <body background="1d.jpg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Vitae</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">View
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="feeview.php">Fee Details</a></li>
              <li><a href="view.php">Mark Details</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="edit.php?var=<?php echo $username?>">Edit Details</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group";>
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
      </div>
    </nav>
    <div class="marq">
     <p> News<p>
<marquee width="60%" direction="up" height="70%">
   <p>* S2 University Registration started.Students are requested to 
     complete the registration on or before 22-04-2020.</p>
     <p>* B.tech S3 result published</p>
  </marquee>
  </div>
    <center>
      <font size=6><b>Student details </b></font>
    </center><br>
    <center>
      <?php
        $link=mysqli_connect("localhost","root","","studdb");
        if(!$link)
        {
            die ("couldn't connect". mysqli_connect_error());
        }
        else
        {    
          $sql2="select * from student where student.username='$username'";
          $sql=mysqli_query($link,$sql2);
          while ($row1 = mysqli_fetch_array($sql)){
      ?>
      <Form class="form-container"style="background:grey;width:300px;">
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
        }}
      ?>
    </center>
    <br><br><br><br><br>

    <div class="fixed-footer">
      <div class="container">For More Info:Conatact:+91485679</div>  
      <center>
        <div class="container">Copyright &copy;Vitae</div>  
      </center>
    </div>
  </body>
</html>

