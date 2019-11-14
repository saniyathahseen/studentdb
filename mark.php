<html> 
<head> 
  <style>
 #mar{
    border:0px solid black;
    margin:100px;
   }
   body
     {
       background-image:url("ess.jpg");
       background-size:cover;
     }
     h1{
        color:red;
     }
   </body>
  </style>
<title></title>
</head>
<body>
<center><h1><u>GRADE CARD</u></h2></center>
<form method="post" action="markcon.php"> 
  <center>  <table border="2">
       <tr> 
           <td>
    <input type="text" name="txtreg" placeholder="reg_no">        
    <input type="text" name="txtnm" placeholder="stud_name"> </td> </tr>     
  <tr> <td> <input type="text" name="txtsm" placeholder="sem">       
   <input type="text" name="txtcr" placeholder="course">  </td> </tr>    
   <tr><td>  <input type="text" name="txts1" placeholder="sub_1">       
     <input type="text" name="txtm1" placeholder="Mark1">   </td></tr>      
     <tr><td>   <input type="text" name="txts2" placeholder="sub_2">      
    <input type="text" name="txtm2" placeholder="Mark2">    </td></tr>    
    <tr><td>   <input type="text" name="txts3" placeholder="sub_3">        
    <input type="text" name="txtm3" placeholder="Mark3">    </td></tr>       </center>  
    </table>
    <input type="submit" value="grade" name="Submit">      
    <input type="reset" value="Reset" name="Reset">   

    
   </form> 
   
  <div id="mar">

  <table border="2" width="60%">
  <tr>
  <tr>
  <th>
    Subjects
  </th>
  <th>
  Marks
  </th>
  </tr>
  <tr>
  <td>Sub1</td>
  <td><?php echo $s1; ?></td></tr>
 <tr> <td>Sub2</td>
  <td><?php echo $s2; ?></td></tr>
  <tr><td>Sub3</td>
  <td><?php echo $s3; ?></td></tr>
  <tr><td>Total</td>
  <td><?php echo $obtmarks; ?></td></tr>
  <tr><td>Grade</td>
  <td><?php if($grade>=90)
     {
       echo "Grade A";
     }
     
     else if($grade>=75)
     {
      echo "Grade B";
    }
    else if($grade>=65)
    {
     echo "Grade C";
   }
   else if($grade>=45)
   {
    echo "Grade D";
  }  else
   {
     echo"fail";
   } ?></td></tr>
  </table>
</div>
</body>
</html>