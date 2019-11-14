<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body, html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
      }

      *{
        box-sizing: border-box;
      }

      .bg-img {
        /* The image used */
        background-image: url("11.jpg");
        min-height: 880px;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      }

      /* Add styles to the form container */

      .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
      }

      /* Control the left side */
      .left {
        left: 0;
      }

      /* Control the right side */
      .right {
        right: 0; 
      }

      /* If you want the content centered horizontally and vertically */
      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
      }

      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Set a style for the submit button */
      .btn {
        background-color: rgb(76, 139, 175);
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      .btn:hover {
        opacity: 1;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <h1>Login</h1>
    <div class="bg-img">
      <div>
        <tr>
            <td colspan="4" align="center"><marquee><h2><b><i>Login HERE....</i></b></h2></marquee></td>
        </tr>
        <div class="split left">
          <div class="centered">
            <form action="login.php" method="post"style="background-color:white;">
              <h2>Student Login</h2>
              <label for="Username"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button  class="btn">Login</button>
            <a href="student.php"> New Registration?</a>
          </form>
        </div>
      </div>
      <div class="split right">
        <div class="centered">
          <form action="adminlogin.php" method="post"style="background-color:white;">
            <h2>Admin Login</h2>
            <label for="Username"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username1" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password1" required>
            <button  class="btn">Login</button>
          </form>
        </div>
      </div>
    </div>

</body>
</html>