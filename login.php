<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
<!--
.style1 {color: #FF9900}
.style2 {
	color: #EEEEEE;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style3 {font-size: 30%}
.style5 {font-size: x-large}
.style21 {color: #FF9900;
	font-style: italic;
}
.style22 {font-size: 24px}
-->
    </style>
</head>
<body background="backgrounds/6666.jpg" onLoad="MM_preloadImages('help2.jpg')">
<table width="1329" height="75" border="0">
  <tr>
    <td width="17" bgcolor="#BB0000">&nbsp;</td>
    <td width="484" bgcolor="#BB0000"><div align="center" class="style24 style3"><marquee>
    <span class="style2">Cisco (CCNA) NOW AVAILABLE</span>
    </marquee> 
    </div></td>
    <td width="56" bgcolor="#BB0000">&nbsp;</td>
    <td width="267" bgcolor="black"><div align="center"><span class="style25 style22"><a href="Online Class Schedule.html" class="style2">Online Class Schedule</a></span></div></td>
    <td width="145" bgcolor="#BB0000">&nbsp;</td>
    <td width="246" bgcolor="#BB0000"><div align="center"></div></td>
    <td width="84" bgcolor="#BB0000">&nbsp;</td>
  </tr>
</table>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="LOGO.jpg" alt="logo" width="329" height="234" align="absmiddle" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="99" height="102" border="0">
  <tr>
    <td width="93" height="98"><div align="center" class="style5"><a href="HOME.html">
      <div align="left"><img src="homme.jpg" alt="homme" width="86" height="77"></div>
    </div>
    <div align="left"></a></div></td>
  </tr>
</table>
<div align="center" class="style26"><a href="register.php"></a></div>
<div class="header">
		<h2>LOGIN</h2> 
		<br>
		<h3>TO ACCESS OUR ONLINE APPLICATION PORTAL</h3>
</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<br>
<table width="1333" height="32" border="0">
  <tr>
    <td bgcolor="#555555"><div align="right" class="style18 style1">
      <div align="right" class="style18 style1">
        <p class="style21 style4"><span class="style21">&copy; 2020 YMCA College of Business Studies Jinja </span></p>
      </div>
      </div></td>
  </tr>
</table>

</body>
</html>