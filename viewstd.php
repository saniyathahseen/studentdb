
   
    <?php
    session_start();
    $val=$_POST['srh'];
    $conn=mysqli_connect("localhost","root","","studdb") or die("failed:" . mysqli_connect_error());

    $sql2="select * from student where student.Reg_No=$val";
    $sql=mysqli_query($conn,$sql2);
    while ($row1 = mysqli_fetch_array($sql)){
        ?>
        <Form class="form-container"style="">
        <span>Register Number:</span><span id="reg"></span><br><br> <?php echo $row1['Reg_No']; ?>
        <span>First Name:</span><span id="fname"></span><br><br><?php echo $row1['F_name']; ?>
        <span>Last Name:</span><span id="lname"></span><br><br><?php echo $row1['L_name']; ?>
        <span>Date Of Birth:</span><span id="dob"></span><br><br><?php echo $row1['DOB']; ?>
        <span>Sex:</span><span id="sex"></span><br><br><?php echo $row1['Sex']; ?>
        <span>City:</span><span id="city"></span><br><br><?php echo $row1['City']; ?>
        <span>District:</span><span id="dis"></span><br><br><?php echo $row1['District']; ?>
        <span>State:</span><span id="state"></span><br><br><?php echo $row1['State']; ?>
        <span>Course:</span><span id="course"></span><br><br><?php echo $row1['Course']; ?>
        <span>Date Of Joining:<span id="doj"></span><br><br><?php echo $row1['DOJ']; ?>
        <span>EmailId:</span><span id="email"></span><br><br><?php echo $row1['email']; ?>
        <span>MobileNo:</span><span id="mob"></span><br><?php echo $row1['mob']; ?>
      </form>
      <?php
    }
    ?>
