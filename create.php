<!DOCTYPE HTML>

<html>

<head>
	<title>Create Account</title>
 	<link rel="stylesheet" type="text/css" href="Login.css">
	<script src="jquery-1.11.3.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$("#username").blur(function() {
				
				$("#message").html('checking username...');
				var form_data = {
					action: 'check_username',
					username: $(this).val()
				};
				
				$.ajax({
					type: "POST",
					url: "functions.php",
					data: form_data,
					success: function(result) {
						$("#message").html(result);
					}
				})
			})
			
			$("#create").click(function() {
				
				var pass1 = $('#password1').val();
				var pass2 = $('#password2').val();
				console.log();
				
				if(pass1 == pass2){
					var form_data = {
						action: 'create_account',
						username: $("#username").val(),
						password: $("#password1").val()
					};
					
					$.ajax({
						type: "POST",
						url: "functions.php",
						data: form_data,
						datatype: "json",
						success: function(result) {
							$("#note").html(result);
							var login = $('#login').val();
							if(login == 'yes'){
								window.location = 'FPForm.php';
							}
						}
					})
				}
				else{
					alert("Passwords do not match.")
				}
			})
				
		});
	</script>
</head>

<body>

	<img src="dnd.jpg" id="img">
	<form method="POST" name="form1" id="form1" action="">
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" value="" min="1" max="16"/>
		<div id="message"></div>
		<br/>
		<label for="password1">Password:</label>
		<input type="password" name="password1" id="password1" value="" min="1" max="16"/>
		<br/>
		<label for="password2">Confirm Password:</label>
		<input type="password" name="password2" id="password2" value="" min="1" max="16"/>
	</div>
	<div>
		<input type="button" name="create" id="create" value="create"/>
		<div id="note" style="display: none;"></div>
	</div>
	</form>
</body>

</html>