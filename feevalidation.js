function validate()
{ 
   if( document.FeeDetails.textnames.value == "" )
   {
     alert( "Please provide a fee number!" );
     document.FeeDetails.textnames.focus() ;
     return false;
   }
   if( document.FeeDetails.fdate.value == "" )
   {
     alert( "Please provide a date!" );
     document.FeeDetails.fdate.focus() ;
     return false;
   }
   
   if( document.FeeDetails.regno.value == "" ||
           isNaN( document.FeeDetails.regno.value) ||
           document.FeeDetails.regno.value.length != 10 )
   {
     alert( "Please provide a Register number in the format 123." );
     document.FeeDetails.regno.focus() ;
     return false;
   }
   /*if( document.FeeDetails.studname.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.StudentRegistration.personaladdress.focus() ;
     return false;
   }
   if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }  */ 
   if( document.FeeDetails.Semester.value == "-1" )
   {
     alert( "Please Choose a semester!" );
     document.FeeDetails.Semester.focus() ;
     return false;
   }   
   if( document.FeeDetails.Course.value == "-1" )
   {
     alert( "Please provide your Course!" );
    
     return false;
   }   
   if( document.FeeDetails.amt.value == "" ||
   isNaN( document.FeeDetails.amt.value) ||
   document.FeeDetails.amt.value.length != 7 )
{
alert( "Please provide the amount paid." );
document.FeeDetails.amt.focus() ;
return false;
} 
   /*if( document.StudentRegistration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.StudentRegistration.pincode.value == "" ||
           isNaN( document.StudentRegistration.pincode.value) ||
           document.StudentRegistration.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.StudentRegistration.pincode.focus() ;
     return false;
   }
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
  if( document.StudentRegistration.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.StudentRegistration.dob.focus() ;
     return false;
   }*/
  
   return( true );
}