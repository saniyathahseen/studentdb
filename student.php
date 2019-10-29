<!DOCTYPE html>
<html>

  <head>

  <script type="text/javascript" src="validation.js"></script>

  </head>

  <body background="r.jpg";>

  <form action="registration.php" method="post" >

<table cellpadding="2" width="50%"  align="center" cellspacing="5">


<tr>

  <td colspan=2>

  <center><font size=6><b>Student Registration Form</b></font></center>

  </td>

  </tr>


<tr>

  <td>Register Number</td>

  <td><input type=text name=regnum id="textname" size="30"></td>

  </tr>
  <tr>

  <td>First Name</td>

  <td><input type="text" name="fstnm" id="paddress" size="30"></td>

  </tr>


<tr>

  <td>Last Name</td>

  <td><input type="text" name="lstnm"

  id="personaladdress" size="30"></td>

  </tr>
  <tr>

    <td>Date Of Birth</td>
  
    <td><input type="text" name="dob" id="dob" size="30"></td>
  
    </tr>

<tr>

  <td>Sex</td>

  <td><input type="radio" name="sex" value="male" size="10">Male

  <input type="radio" name="sex" value="Female" size="10">Female
  <input type="radio" name="sex" value="other" size="10">Other</td>

  </tr>


<tr>

  <td>City</td>

  <td><select name="city">

  <option value="-1" selected>select..</option>

  <option value="Kollam">KOLLAM</option>

  <option value="Karunagappally">KARUNAGAPPALLY</option>

  <option value="Anchal">ANCHAL</option>

  <option value="not mentioned">OTHER</option>

  </select></td>

  </tr>
  <tr>

    <td>District</td>
  
    <td><select name="district">
  
    <option value="-1" selected>select..</option>
  
    <option value="Kollam">KOLLAM</option>
  
    <option value="Trivandrum">TRIVANDRUM</option>
  
    <option value="Alappuzha">ALAPPUZHA</option>
  
    <option value="not mentioned">OTHER</option>
  
    </select></td>
  
  
  </tr>
  <tr>

    <td>State</td>
  
    <td><select name="state">
  
    <option value="-1" selected>select..</option>
  
    <option value="Kerala">KERALA</option>
  
    <option value="Tamilnadu">TAMILNADU</option>
  
    <option value="Goa">GOA</option>
  
    <option value="not mentioned">OTHER</option>
  
    </select></td>
  
    </tr>

    <tr>

<td>Course</td>

<td><select name="namecrs">

<option value="-1" selected>select..</option>

<option value="B.TECH">B.TECH</option>

<option value="M.TECH">M.TECH</option>

<option value="MCA">MCA</option>

<option value="not mentioned">OTHER</option>

</select></td>

</tr>


  <tr>

    <td>Date Of Joining</td>
  
    <td><input type="text" name="doj" id="doj" size="30"></td>
  
    </tr>




  



  <tr>

  <td>EmailId</td>

  <td><input type="text" name="emailid" id="emailid" size="30"></td>

  </tr>





<tr>

  <td>MobileNo</td>

  <td><input type="text" name="mobileno" id="mobileno" size="30"></td>

  </tr>
  <tr>

    <td>User Name</td>
  
    <td><input type=text name=username id="username" size="30"></td>
  
    </tr>
    <tr>

      <td>Password</td>
    
      <td><input type=text name=password id="password" size="30"></td>
    
      </tr>

  <tr>

  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" value="Submit Form" /></td>

  </tr>
  

  </table>

  </form>

  </body>

  </html