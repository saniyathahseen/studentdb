<html> 
<head> 
  <style>
 
   body
     {
       background-image:url("ess.jpg");
       background-size:cover;
       color:red;
     }
     div
     {
      padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
     }

     }
   </body>
  </style>
<title></title>
</head>
<body>
<center><b><u><h1>STUDENT MARKSHEET</center></b></u></h1>
<div>
<form method="post" action="markcon.php" > 
    <center><table border= "5"  height="100px">
       <tr> 
           <td>
    <input type="text" name="txtreg" placeholder="Reg_No">        
    <input type="text" name="txtnm" placeholder="Stud_Name"> </td> </tr>     
  <tr> <td> <input type="text" name="txtsm" placeholder="Sem">       
   <input type="text" name="txtcr" placeholder="Course">  </td> </tr>    
   <tr><td>  <input type="text" name="txts1" placeholder="Sub_1">       
     <input type="text" name="txtm1" placeholder="mark1">   </td></tr>      
     <tr><td>   <input type="text" name="txts2" placeholder="Sub_2">      
    <input type="text" name="txtm2" placeholder="mark2">    </td></tr>    
    <tr><td>   <input type="text" name="txts3" placeholder="Sub_3">        
    <input type="text" name="txtm3" placeholder="mark3">    </td></tr>         
    </center></table>
    <input type="submit" value="submit" name="Submit">      
    <input type="reset" value="Reset" name="Reset">   

    </div>
   </form> 
   <?php
   if(isset($_POST["Submit"]))
   {
       $reg=$_POST['txtreg'];
       $nm=$_POST['txtnm'];
       $sm=$_POST['txtsm'];
       $cr=$_POST['txtcr'];
       $s1=$_POST['txts1'];
       $m1=$_POST['txtm1'];
       $s2=$_POST['txts2'];
       $m2=$_POST['txtm2'];
       $s3=$_POST['txts3'];
       $m3=$_POST['txtm3'];
       $obtmarks= $m1+ $m2+ $m3;
        $totmarks=300;
       $per=($obtmarks/ $totmarks)*100;
   } 
  ?>
 
</div>
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
  /*<table border="1 px solid" width="60%">
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
  <td><?php echo $s3; ?></td></tr>*/
</body>
</html>

