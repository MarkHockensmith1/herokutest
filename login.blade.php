<!DOCTYPE html>
<html lang=eng">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action = "login" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"/>
		<h2> Please Login</h2>
		<table>
			<tr>
				<td>Username: </td>
				<td><input type = "text" name = "username" /></td>
			</tr><br/>
			<tr>
				<td>Password: </td>
				<td><input type = "password" name = "password" /></td>
			</tr><br/><br/>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "submit" value = "Login In" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>