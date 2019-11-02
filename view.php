<HTML>
<HEAD>

        <title>View Student</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>

.fixed-footer{
              width: 100%;
              position: fixed;        
              background:black;
              padding: 5px 0;
              color: #fff;
          }
          .fixed-footer{
              bottom: 0;
          }
          .container p{
              line-height: 200px; 
            }
          .form-container  {
            background-color: rgb(210, 238, 210);
            height:150px;
            width: 500px;
            border: solid;
            text-align: left;
            padding: 10px;
          }
          .form-container1  {
            background-color: rgb(210, 238, 210);
            height:275px;
            width: 500px;
            border: solid;
            text-align: left;
            padding: 10px;
          }

        </style>
        </head>
        <STYLE>

body
{  
border-radius: 20px;
 border-style: double;
 border-color: rgba(0, 0, 255, 0.267);
position:absolute;
width: 650px;
height: 450px;
margin:100px;
left: 45px;
padding: 50px 30px 50px 30px;
background-color: rgba(204, 204, 204, 0.788);
}
#tbl,#tbl2
{
border-collapse:collapse;
font-size:18;
font-family:Century Gothic;
}
.demo
{
position:absolute;
left:35px;
top:380px;
font-size:17;
font-family:Arial;
font-weight:bold;
margin-top:35px;
border-collapse:collapse;
}
#demoname
{
font-size:15px
}
.btn
{
position:absolute;
top:355px;
left:720px;
}
</STYLE>

<SCRIPT>
function myFun()
{
var a=document.form1.txtname.value;
document.getElementById("demoname").innerHTML=a;
var b=document.form1.txtfname.value;
document.getElementById("demofname").innerHTML=b;
var c=document.form1.txtins.value;
document.getElementById("demoins").innerHTML=c;
var d=document.form1.txtbatch.value;
document.getElementById("demobatch").innerHTML=d;
var e=document.form1.txtoffice.value;
document.getElementById("demooffice").innerHTML=e;
var f=document.form1.txtweb.value;
document.getElementById("demoweb").innerHTML=f;
var g=document.form1.txtit.value;
document.getElementById("demoit").innerHTML=g;
var h=document.form1.txtc.value;
document.getElementById("democ").innerHTML=h;
var txt1=eval(parseFloat(document.form1.txtoffice.value)+parseFloat(document.form1.txtweb.value)
+parseFloat(document.form1.txtit.value)+parseFloat(document.form1.txtc.value));
document.getElementById("demototal").innerHTML=txt1;
var txt2=eval(parseFloat(txt1*100)/400);
document.getElementById("demoper").innerHTML=txt2.toFixed(2)+"%";
switch(true)
{
case(txt2>=80):
document.getElementById("demograde").innerHTML="A1";
break;
case(txt2>=70):
document.getElementById("demograde").innerHTML="A";
break;
case(txt2>=60):
document.getElementById("demograde").innerHTML="B";
break;
case(txt2>=50):
document.getElementById("demograde").innerHTML="C";
break;
case(txt2>=40):
document.getElementById("demograde").innerHTML="D";
break;
case(txt2<40):
document.getElementById("demograde").innerHTML="Fail";
break;
}
}
</SCRIPT> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>




<body background="image2.jpg">
</nav>
               
    <DIV class="color">
<H1 align="center"style="font-family:cambria;font-size:40";><U>STUDENT MARKSHEET</H1>
<FIELDSET>
<LEGEND> STUDENT INFORMATION </LEGEND>
<TABLE align="center" id="tbl">
<FORM name="form1">
</TR>
<TD width="140">Name:</TD> <TD><INPUT type="text" name="txtname"/></TD>  
<TD width="140">&nbsp   Register No:</TD><TD> <INPUT type="text" name="txtfname"/></TD>  
</TR>
<TR>
<TD width="140" > Course:</TD><TD> <INPUT type="text" name="txtins"/></TD>   
<TD style="text-indent:16px">semester:</TD><TD> <INPUT type="text" name="txtbatch"/></TD>   
</TR>
</TABLE> 
</FIELDSET></BR>  
<FIELDSET>
<LEGEND> SUBJECTS MARKS </LEGEND>
<TABLE id="tbl2">
<TR>
<TD> Subject 1 :</TD><TD> <INPUT type="text" name="txtoffice" maxlength="2" size="10"/> Out of 100 </TD>
</TR>
<TR>
<TD> Subject 2 :</TD><TD> <INPUT type="text" name="txtweb" maxlength="2" size="10"/> Out of 100</TD>
</TR>
<TR>
<TD> Subject 3   :</TD><TD> <INPUT type="text" name="txtit" maxlength="2" size="10"/> Out of 100</TD>
</TR>
<TR>
    <TD> Total  &nbsp  &nbsp      &nbsp :</TD><TD> <INPUT type="text" name="txtit" maxlength="2" size="10"/> Out of 300</TD>
    </TR>
    <TD> Percentage &nbsp  &nbsp     :</TD><TD> <INPUT type="text" name="txtit" maxlength="2" size="10"/> </TD>
</TR>
</TABLE>
<div class="fixed-footer">
        <div class="container">For More Info:Conatact:+91485679</div>  
        <center>
          <div class="container">Copyright &copy;Vitae</div>  
        </center>
      

</DIV>
</DIV>
</BODY>
</HTML>