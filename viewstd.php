<center>
   
    <?php
    session_start();
    $val=$_POST['srh'];
    $conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());

    $sql2="select * from student where student.Reg_No=$val";
    $sql=mysqli_query($conn,$sql2);
    while ($row1 = mysqli_fetch_array($sql)){
        ?>
        <Form class="form-container"style="">
        <span>Register Number:</span><span id="reg"></span> <?php echo $row1['Reg_No']; ?><br><br>
        <span>First Name:</span><span id="fname"></span><?php echo $row1['F_name']; ?><br><br>
        <span>Last Name:</span><span id="lname"></span><?php echo $row1['L_name']; ?><br><br>
        <span>Date Of Birth:</span><span id="dob"></span><?php echo $row1['DOB']; ?><br><br>
        <span>Sex:</span><span id="sex"></span><?php echo $row1['Sex']; ?><br><br>
        <span>City:</span><span id="city"></span><?php echo $row1['City']; ?><br><br>
        <span>District:</span><span id="dis"></span><?php echo $row1['District']; ?><br><br>
        <span>State:</span><span id="state"></span><?php echo $row1['State']; ?><br><br>
        <span>Course:</span><span id="course"></span><?php echo $row1['Course']; ?><br><br>
        <span>Date Of Joining:<span id="doj"></span><?php echo $row1['DOJ']; ?><br><br>
        <span>EmailId:</span><span id="email"></span><?php echo $row1['email']; ?><br><br>
        <span>MobileNo:</span><span id="mob"></span><?php echo $row1['mob']; ?><br><br>
      </form>
      <?php
    }
    ?>
    </center>
