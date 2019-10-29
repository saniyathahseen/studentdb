function validate()
{ 
   if( document.feedetails.textnames.value == "" )
   {
     alert( "Please provide a fee number!" );
     document.feedetails.textnames.focus() ;
     return false;
   }
   if( document.feedetails.fdate.value == "" )
   {
     alert( "Please provide a date!" );
     document.feedetails.fdate.focus() ;
     return false;
   }
   
   if( document.feedetails.regno.value == "" ||
           isNaN( document.feedetails.regno.value) ||
           document.feedetails.regno.value.length != 10 )
   {
     alert( "Please provide a Register number in the format 123." );
     document.feedetails.regno.focus() ;
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
   if( document.feedetails.Semester.value == "-1" )
   {
     alert( "Please Choose a semester!" );
     document.feedetails.Semester.focus() ;
     return false;
   }   
   if( document.feedetails.Course.value == "-1" )
   {
     alert( "Please provide your Course!" );
    
     return false;
   }   
   if( document.feedetails.amt.value == "" ||
   isNaN( document.feedetails.amt.value) ||
   document.feedetails.amt.value.length != 7 )
{
alert( "Please provide the amount paid." );
document.feedetails.amt.focus() ;
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