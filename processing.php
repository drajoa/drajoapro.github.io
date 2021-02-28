<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
    <style type="text/css">
<!--
.style1 {font-size: x-large}
.style2 {color: #EEEEEE}
.style3 {color: #00DD00}
.style4 {color: #000044}
.style5 {color: #0099FF}
.style7 {
	color: #EEEEEE;
	font-size: xx-large;
	font-weight: bold;
}
.style9 {font-size: xx-large}
.style18 {color: #FFCC00}
-->
    </style>
</head>
<body background="backgrounds/6666.jpg">
<table width="1329" height="75" border="0" bgcolor="#EEEEEE">
  <tr>
    <td width="17" bgcolor="#408080">&nbsp;</td>
    <td width="484" bgcolor="#408080"><div align="center" class="style24 style3 style1"><marquee>
    <span class="style2 style1">Cisco (CCNA) NOW AVAILABLE</span>
    </marquee> 
    </div></td>
    <td width="56" bgcolor="#408080">&nbsp;</td>
    <td width="267" bgcolor="#FF9900"><div align="center" class="style3"><span class="style25 style5  style4">WELCOME TO OUR ONLINE PORTAL</span></div></td>
    <td width="145" bgcolor="#408080">&nbsp;</td>
    <td width="246" bgcolor="#408080"><div align="center"></div></td>
    <td width="84" bgcolor="#408080">&nbsp;</td>
  </tr>
</table>
<div class="content">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
  <div class="error success" >
    <h3>
      <?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
    </h3>
  </div>
  <?php endif ?>
  <!-- logged in user information -->
  <div class="profile_info"> <img src="images/user_profile.png" width="85" height="101"  >
      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
        <span class="style9"><strong><?php echo $_SESSION['user']['username']; ?></strong></span> <small> <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> <br>
        <a href="index.php?logout='1'" class="style9" style="color: red;">logout</a> </small>
        <?php endif ?>
      </div>
  </div>
</div>
<table width="1320" height="76" border="0" align="center">
  <tr>
    <td width="1314"><div align="center"><marquee><img src="LOGO.jpg" alt="logo" width="272" height="171" align="absmiddle" />
    </marquee></div></td>
  </tr>
</table>
	<br>
	<table width="1320" border="0" align="center">
      <tr>
        <td width="1310" height="61" bgcolor="#408080"><div align="center"><span class="style7"><span class="style7">FROM</span> THE OFFICE OF THE ACADEMIC REGISTRAR</span></div></td>
      </tr>
</table>
	<div align="center">
	  <p><br>
  </p>
  </div>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1200" height="200" border="0" align="center">
    <tr>
      <td width="1000" height="50" bgcolor="#408080"><p align="center">&nbsp;</p>
        <p align="center"><span class="style18">
<?php
include_once 'data-B.php';
if(isset($_POST['save']))
{
 $firstname = $_POST['firstname'];
 $middlename = $_POST['middlename'];
 $lastname = $_POST['lastname'];
 $contact=$_POST['contact'];
 $gender=$_POST['gender'];
 $bday=$_POST['bday'];
 $email=$_POST['email'];
 $homedistrict=$_POST['homedistrict'];
 $nationality=$_POST['nationality'];
 $program=$_POST['nationality'];
 $course=$_POST['course'];
 $uce=$_POST['uce'];
 $year=$_POST['year'];
 $uace=$_POST['uace'];
 $yr=$_POST['yr'];
 $inst1=$_POST['inst1'];
 $inst2=$_POST['inst2'];
 $inst3=$_POST['inst3'];
 $inst4=$_POST['inst4'];
 $inst5=$_POST['inst5'];
 $qualification1=$_POST['qualification1'];
 $qualification2=$_POST['qualification2'];
 $qualification3=$_POST['qualification3'];
 $qualification4=$_POST['qualification4'];
 $qualification5=$_POST['qualification5'];
 $marital_status=$_POST['marital_status'];
 $permanent_address=$_POST['permanent_address'];
 $emergency=$_POST['emergency'];
 $religion=$_POST['religion'];
 $county=$_POST['county'];
 $subcounty=$_POST['subcounty'];
 $parish=$_POST['parish'];
 $village=$_POST['village'];
 $date=$_POST['date'];
 $sql = "INSERT INTO applicants(firstname,middlename,lastname,contact,gender,bday,email,homedistrict,nationality,program,course,uce,year,uace,yr,inst1,inst2,inst3,inst4,inst5,qualification1,qualification2,qualification3,qualification4,qualification5,marital_status,permanent_address,emergency,religion,county,subcounty,parish,village,date) VALUES ('$firstname','$middlename','$lastname','$contact','$gender','$bday','$email','$homedistrict','$nationality','$program','$course','$uce','$year','$uace','$yr','$inst1','$inst2','$inst3','$inst4','$inst5','$qualification1','$qualification2','$qualification3','$qualification4','$qualification5','$marital_status','$permanent_address','$emergency','$religion','$county','$subcounty','$parish','$village','$date')";
if (mysqli_query($conn, $sql)) {
echo "YOU HAVE SUCCESSFULLY APPLIED TO H.E.L.P. INTERNATIONAL UNIVERSITY. THIS APPLICATION DOESN'T GUARANTEE THAT YOU HAVE BEEN GIVEN A VACANCY AT THE UNIVERSITY. SOON A REPLY WILL BE SENT ON YOUR EMAIL ABOUT YOUR ADMISSION. IN CASE THE REPLY DELAYS, YOU MIGHT ACCESS THE ACADEMIC  OFFICES TO CONFIRM ADMISSION.";
 } else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>
<br />
<br />
<?php
echo "THANKS FOR LOVING H.E.L.P. INTERNATIONAL UNIVERSITY.!!!";
?>
</body>
</html>