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
    <center>
      <font size=6><b>Student details </b></font>
    </center><br>
    <center>
      <Form class="form-container"style="">
        <span>Register Number:</span><span id="reg"></span><br><br>
        <span>First Name:</span><span id="fname"></span><br><br>
        <span>Last Name:</span><span id="lname"></span><br><br>
        <span>Date Of Birth:</span><span id="dob"></span><br><br>
        <span>Sex:</span><span id="sex"></span><br><br>
        <span>City:</span><span id="city"></span><br><br>
        <span>District:</span><span id="dis"></span><br><br>
        <span>State:</span><span id="state"></span><br><br>
        <span>Course:</span><span id="course"></span><br><br>
        <span>Date Of Joining:<span id="doj"></span><br><br>
        <span>PinCode:</span><span id="pin"></span><br><br>
        <span>EmailId:</span><span id="email"></span><br><br>
        <span>MobileNo:</span><span id="mob"></span><br>
      </form>
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
