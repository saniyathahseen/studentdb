<html>

  <head>
<script>
  function validate()                                    
{ 
    var fee = document.forms["feedetails"]["textnames"];  
    var dat= document.forms["feedetails"]["fdate"];
    var reg= document.forms["feedetails"]["regno"]; 
    var name = document.forms["feedetails"]["studname"];   
    var sem =  document.forms["feedetails"]["Semester"];    
    var corse =  document.forms["feedetails"]["Course"];  
    var amts = document.forms["feedetails"]["amt"];
    if (fee.value == "")                                  
    { 
        window.alert("Please enter a no."); 
        fee.focus(); 
        return false; 
    } 
    if (dat.value == "")                                   
    { 
        window.alert("Please select a date ."); 
        dat.focus(); 
        return false; 
    } 
   
    if (reg.value == "")                           
    { 
        window.alert("Please enter student registration number."); 
        reg.focus(); 
        return false; 
    } 
    if (name.value == "")                                  
    { 
        window.alert("Please enter a student name."); 
        name.focus(); 
        return false; 
    } 
    if (sem.selectedIndex < 1)                  
    { 
        alert("Please select a semester."); 
        sem.focus(); 
        return false; 
    } 
    if (corse.selectedIndex < 1)                  
    { 
        alert("Please select a course."); 
        corse.focus(); 
        return false; 
    } 
    if (amts.value == "")                           
    { 
        window.alert("Please enter the fee amount paid."); 
        amts.focus(); 
        return false; 
    } 
   //alert("saved successfully");
    return true; 
   window.location.reload();
}

</script>

  </head>

  <body style="background-image: url('fee-bicubic.jpg')">

  <form action="feeins.php" name="feedetails" method="post"; style="margin: 50px;"   onsubmit="return validate()" >
 

<table cellpadding="6" width="40%"  align="center"

  cellspacing="4">


<tr>

  <td colspan=2>

  <center><font size=5><b>FEE DETAILS FORM</b></font></center>

  </td>

  </tr>


<tr>

  <td>Fee No</td>

  <td><input type="number" name="textnames" id="textname" required minlength="6" maxlength="6" size="30" ></td>

  </tr>
  <tr>

    <td>Date</td>
  
    <td><input type="date" name="fdate" id="date" size="30"></td>
  
    </tr>
  
  

<tr>

  <td>Reg No</td>

  <td><input type="number" name="regno" id="fathername"

  size="30" required minlength="10" maxlength="10"></td>

  </tr>

  <tr>

  <td>Student Name</td>

  <td><input type="text" name="studname" id="paddress" size="30" required minlength="10" maxlength="20"></td>

  </tr>

<tr>

  <td>Semester</td>

  <td><select name="Semester">

  <option value="-1" selected>.....select.....</option>

  <option value="one">S1</option>

  <option value="two">S2</option>

  <option value="three">S3</option>

  <option value="four">S4</option>

  <option value="five">S5</option>

  <option value="six">S6</option>

  <option value="seven">S7</option>

  <option value="eight">S8</option>

  </select></td>

  </tr>


<tr>

  <td>Course</td>

  <td><select name="Course">

  <option value="-1" selected>.....select.....</option>

  <option value="B.Tech">B.TECH</option>

  <option value="MCA">MCA</option>

  <option value="MBA">MBA</option>

  <option value="BCA">BCA</option>

  </select></td>

  </tr>



<tr>

  <td>Amount</td>

  <td><input type="number" name="amt" id="Amt" size="15" required minlength="2" maxlength="7"></td>

  </tr>
  
  <tr>

  <td colspan="0"><input type="Reset" value="clear"></td>

  <td colspan="0"><input type="submit" value="Submit" /></td>

  <td colspan="1">
    <input type="button" value="Go to HomePage"></td>

  </tr>

  </table>

  </form>

  </body>

  </html>