<!DOCTYPE HTML>

<html>

<head>
	<title>Login</title>
	 <link rel="stylesheet" type="text/css" href="Login.css">
	<script src="jquery-1.11.3.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$("#submit").click(function() {
				
				var form_data = {
					action: 'login',
					username: $('#username').val(),
					password: $('#password').val()
				};
				
				$.ajax({
					type: "POST",
					url: "functions.php",
					data: form_data,
					success: function(result) {
							$("#note").html(result);
							var login = $('#login').val();
							if(login == 'yes'){
								window.location = 'FPForm.php';
							}
					}
				})
			})
			
			$("#create").click(function(){
				window.location = 'create.php';
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
		<br/>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" value="" min="1" max="16"/>
	</div>
	<div>
		<input type="button" name="submit" id="submit" value="login"/>
		<input type="button" name="create" id="create" value="create account"/>
		<div id="note" style="display: none;"></div>
	</div>
	</form>
</body>

</html>