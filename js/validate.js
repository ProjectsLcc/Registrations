function validate() { 
	if( document.StudentRegistration.textnames.value == "" ) {
		alert( "Please enter a name" );
		document.StudentRegistration.textnames.focus();
		return false;
	}
	
	var email = document.StudentRegistration.emailid.value;
	atpos = email.indexOf("@");
	dotpos = email.lastIndexOf(".");
	
	if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) {
		alert("Please enter a correct email ID");
		document.StudentRegistration.emailid.focus() ;
		return false;
	}
	
	if( document.StudentRegistration.sex.value == "-1" )
	{
		alert( "Please choose a Gender" );
		document.StudentRegistration.sex.focus();
		return false;
	}
	
	if( document.StudentRegistration.tshirt.value == "-1" )
	{
		alert( "Please choose your Shirt Size" );
		document.StudentRegistration.tshirt.focus();
		return false;
	}
	
	if( document.StudentRegistration.department.value == "-1" )
	{
		alert( "Please choose a Department" );
		document.StudentRegistration.department.focus();
		return false;
	}
	
	if( document.StudentRegistration.year.value == "-1" )
	{
		alert( "Please choose a Year" );
		document.StudentRegistration.year.focus();
		return false;
	}
	
	if( document.StudentRegistration.mobileno.value == "" || 
	isNaN( document.StudentRegistration.mobileno.value) ||
	document.StudentRegistration.mobileno.value.length != 10 ) {
		alert( "Your Mobile number must be 10 digits" );
		document.StudentRegistration.mobileno.focus() ;
		return false;
	}
	
   return( true );
   
}