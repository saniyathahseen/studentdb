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
    .marq{
      color:red;
      margin-left:450px;
      margin-top:50px;
      size:50px;
    }
  </style>
</head>
<body background="gd.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Vitae</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">View
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="studentView.php">Student Details</a></li>
          <li><a href="feeview.php">Fee Details</a></li>
         
          
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="feedetails.php">Add Fee Details</a></li>
          <li><a href="mark.php">Add Marks</a></li>
         
          
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
<marquee width="40%" direction="left" height="30%">
    Education is the most Powerful weapon 
   which you can use to change the world
  </marquee>
  </div>
<div class="fixed-footer">
    <div class="container">For More Info:Conatact:+91485679</div>  
  <center>
    <div class="container">Copyright &copy;Vitae</div>  
  </center>    
</div>

</body>
</html>

