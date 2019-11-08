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
            <Form class="form-container"style="background:grey;width:300px;">
              <span>Register Number   :</span><input type="text"value=<?php echo $row1['Reg_No']; ?>><br><br>
              <span>First Name        :</span><input type="text"value=<?php echo $row1['F_name']; ?>><br><br>
              <span>Last Name         :</span><input type="text"value=<?php echo $row1['L_name']; ?>><br><br>
              <span>Date Of Birth     :</span><input type="text"value=<?php echo $row1['DOB']; ?>><br><br>
              <span>Sex               :</span><input type="text"value=<?php echo $row1['Sex']; ?>><br><br>
              <span>City              :</span><input type="text"value=<?php echo $row1['City']; ?>><br><br>
              <span>District          :</span><input type="text"value=<?php echo $row1['District']; ?>><br><br>
              <span>State             :</span><input type="text"value=<?php echo $row1['State']; ?>><br><br>
              <span>Course            :</span><input type="text"value=<?php echo $row1['Course']; ?>><br><br>
              <span>Date Of Joining   :</span><input type="text"value=<?php echo $row1['DOJ']; ?>><br><br>
              <span>EmailId           :</span><input type="text"value=<?php echo $row1['email']; ?>><br><br>
              <span>MobileNo          :</span><input type="text"value=<?php echo $row1['mob']; ?>><br><br>
              <input type="submit"value="edit">
            </form>
            <?php
              }}
            ?>
  </body>
</html