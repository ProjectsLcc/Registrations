function validate() {
	if( document.newregistration.Mobileno.value == "" || 
	isNaN( document.newregistration.Mobileno.value) ||
	document.newregistration.Mobileno.value.length != 10 ) {
		alert( "Your Mobile number must be 10 digits" );
		document.newregistration.Mobileno.focus() ;
		return false;
	}
	return( true );
}