<!DOCTYPE html>
<html>
  <head>
    <script>
    </script>
  </head>
  <body background="r.jpg";>
    <?php
        $link=mysqli_connect("localhost","root","","studdb");
        if(!$link)
        {
            die ("couldn't connect". mysqli_connect_error());
        }
        else
        {    
            $username = $_GET['var'];
            
          $sql2="select * from student where student.username='$username'";
          $sql=mysqli_query($link,$sql2);
          while ($row1 = mysqli_fetch_array($sql)){
            ?>
            <h1>Edit</h1>
            <Form action="editpage.php"method="post"class="form-container"style="background:grey;wnameth:300px;">
              <h1 id="username"name="username"value="<?php echo $username;?>"><?php echo $username;?></h1>
              <span>Register Number   :</span><input type="text"name="reg"id="reg"value=<?php echo $row1['Reg_No']; ?>><br><br>
              <span>First Name        :</span><input type="text"name="fn"id="fn"value=<?php echo $row1['F_name']; ?>><br><br>
              <span>Last Name         :</span><input type="text"name="ln"id="ln"value=<?php echo $row1['L_name']; ?>><br><br>
              <span>Date Of Birth     :</span><input type="text"name="dob"id="dob"value=<?php echo $row1['DOB']; ?>><br><br>
              <span>Sex               :</span><input type="text"name="sex"id="sex"value=<?php echo $row1['Sex']; ?>><br><br>
              <span>City              :</span><input type="text"name="city"id="city"value=<?php echo $row1['City']; ?>><br><br>
              <span>District          :</span><input type="text"name="dis"id="dis"value=<?php echo $row1['District']; ?>><br><br>
              <span>State             :</span><input type="text"name="st"id="st"value=<?php echo $row1['State']; ?>><br><br>
              <span>Course            :</span><input type="text"name="cs"id="cs"value=<?php echo $row1['Course']; ?>><br><br>
              <span>Date Of Joining   :</span><input type="text"name="doj"id="doj"value=<?php echo $row1['DOJ']; ?>><br><br>
              <span>Emailname           :</span><input type="text"name="em"id="em"value=<?php echo $row1['email']; ?>><br><br>
              <span>MobileNo          :</span><input type="text"name="mob"id="mob"value=<?php echo $row1['mob']; ?>><br><br>
              <input type="submit"value="edit">
            </form>
            <?php
              }}
            ?>
  </body>
</html