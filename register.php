<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
<!--
.style1 {
	font-size: x-large;
	color: #EEEEEE;
}
.style2 {font-size: large}
.style3 {font-size: x-large}
.style4 {color: #FF9900}
.style21 {	color: #FF9900;
	font-style: italic;
}
.style22 {font-size: 24}
body {
	background-image: url();
	background-color: #FFFFFF;
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body onLoad="MM_preloadImages('help2.jpg')">
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="LOGO.jpg" alt="logo" width="329" height="234" align="absmiddle" /></td>
  </tr>
</table>
<div class="header">
		<h2>Register</h2>
</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	<br>
<table width="1333" height="32" border="0">
  <tr>
    <td bgcolor="#555555"><div align="right" class="style18 style1">
      <p class="style21 style4"><span class="style21">&copy; 2020 YMCA College of Business Studies Jinja </span></p>
    </div></td>
  </tr>
</table>
</body>
</html>