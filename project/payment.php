

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Credit Card Validator Example</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="creditcard/jquery.creditCardValidator.js"></script>
	<link rel="stylesheet" href="includes/style1.css" type="text/css"/>
</head>
<body>
    <label>CC number <input></label>

    <p class="log"></p>
	<div>
	<button  onclick="location.href='booking.html'" type="button">back</button></p>
	
	<button id="button" onclick="location.href='paymenttrue.php'" type="button">Pay</button></p>
	</div>
	
</body>

<script>
    $(function() {
        $('input').validateCreditCard(function(result) {
            $('.log').html('Card type: ' + (result.card_type == null ? '-' : result.card_type.name)
                     + '<br>Valid: ' + result.valid
                     + '<br>Length valid: ' + result.length_valid
                     + '<br>Luhn valid: ' + result.luhn_valid);
					 $("#button").show();
        });
		
	$("#button").hide();		

		
		
    });
</script>
</html>

