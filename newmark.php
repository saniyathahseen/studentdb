<html> 
<head> 
<title></title>
</head>
<body>
<form method="get"> 
    <table>
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
    <input type="text" name="txtm3" placeholder="Mark3">    </td></tr>         
    </table>
    <input type="submit" value="grade" name="Submit">      
    <input type="reset" value="Reset" name="Reset">   

    
   </form> 
   <?php
   if(isset($_GET['submit']))
   {
       $reg=$_GET['txtreg'];
       $nm=$_GET['txtnm'];
       $sm=$_GET['txtsm'];
       $cr=$_GET['txtcr'];
       $s1=$_GET['txts1'];
       $m1=$_GET['txm1'];
       $s2=$_GET['txts2'];
       $m2=$_GET['txtm2'];
       $s3=$_GET['txts3'];
       $m3=$_GET['txtm3'];
       $obtmarks= $m1+ $m2+ $m3;
        $totmarks=300;
       $grade=($obtmarks/ $totmarks)*100;
     if($grade>=90)
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
   }
  
  }
  ?>
  <table border="1 px solid" width="60%">
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
</body>
</html>

