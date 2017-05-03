function BookingForm(){
	var x = document.form1.name.value;
	var y = document.form1.mail.value;
	
	
	if(x ==="Name"||x==="" || y==="Email"||y==="" ){
				alert("Sorry, you didn't enter your details")
	}
			
	else{
	
		alert("Thank you "+document.form1.name.value+" your booking confirmation has been sent to "+document.form1.mail.value)
		}
		


}