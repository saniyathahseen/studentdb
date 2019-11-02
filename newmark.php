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
</body>
</html>

