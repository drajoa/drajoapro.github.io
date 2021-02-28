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
.style7 {
	color: #EEEEEE;
	font-size: 18px;
	font-weight: bold;
}
.style8 {
	color: #000000;
	font-weight: bold;
}
.style9 {font-size: xx-large}
.style12 {font-size: 24px}
.style16 {color: #000011}
.style18 {color: #000011; font-weight: bold; }
.style19 {font-size: 18px}
.style20 {color: #BB0000}
-->
    </style>
</head>
<body background="backgrounds/6666.jpg">
<table width="1329" height="75" border="0" bgcolor="#EEEEEE">
  <tr>
    <td width="17" bgcolor="#BB0000">&nbsp;</td>
    <td width="484" bgcolor="#BB0000"><div align="center" class="style24 style3 style1"><marquee>
    <span class="style2 style1">Cisco (CCNA) NOW AVAILABLE</span>
    </marquee> 
    </div></td>
    <td width="56" bgcolor="#BB0000">&nbsp;</td>
    <td width="267" bgcolor="black"><div align="center" class="style3"><span class="style7 style19">WELCOME TO OUR ONLINE PORTAL</span></div></td>
    <td width="145" bgcolor="#BB0000">&nbsp;</td>
    <td width="246" bgcolor="#BB0000"><div align="center"></div></td>
    <td width="84" bgcolor="#BB0000">&nbsp;</td>
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
        <td width="1310" height="61" bgcolor="#BB0000"><div align="center"><span class="style7">OFFICE OF THE ACADEMIC REGISTRAR</span></div></td>
      </tr>
      <tr>
        <td height="50"><div align="center" class="style8">APPLICATION FOR ADMISSION TO THE COLLEGE </div></td>
      </tr>
</table>
	<div align="center">
	  <p><br>
  </p>
</div>
    <form method="post" action="processing.php" class="style12" align="">
      <table width="1221" height="1878" border="4" align="center" bgcolor="#BB0000">
    <tr>
      <td width="1211" height="119"><p align="center" class="style16">&nbsp;</p>
        <p align="center" class="style16"><strong>PART I </strong></p>
        <p align="center" class="style16"><strong>ALL NAMES MUST BE WRITTEN IN FULL (NO INITIALS) AND THE FORM SHOULD BE FILLED IN CAPITAL LETTERS</strong></p>
        <p align="center" class="style16">&nbsp;</p>
        <p class="style16">First Name:
          <input name="firstname" type="text" size="30">
Middle Name:
<input name="middlename" type="text" size="30">
Last Name:
<input name="lastname" type="text" size="30">
<br>
<br>
Contact(s):
<input name="contact" type="text" size="50">
Gender: 
<input type="radio" name="gender" value="male" >
Male
<input type="radio" name="gender" value="female">
Female
<input type="radio" name="gender" value="other">
Other 
<br>
<br>
Date of Birth:
<input type="date" name="bday">
E-mail Address:
<input type="email" name="email">
</p>
        <p class="style16">Home District:
          <input type="text" name="homedistrict">
Nationality:
<input type="text" name="nationality">
        </p>
        <p class="style16">&nbsp; </p>
<p align="center" class="style16"><strong>PROGRAMME APPLIED FOR</strong></p>
        <p align="left" class="style16">Select Programme:
          <select name="program">
                   <option value="none">None</option>
                    <option value="certificate">Certificate</option>
                    <option value="diploma">Diploma</option>
                    <option value="degree">Degree</option>
                    <option value="masters">Masters</option>
                    <option value="phd">PhD</option>
          </select>
Select Course:
<select name="course">
  <option value="none">None</option>
   <option value="1">Certificate in Economics With Data Science</option>
   <option value="2">Certificate in Management & Technology</option>
   <option value="3">Certificate in Computer Engineering</option>
   <option value="4">Certificate in Electrical Engineering</option>
   <option value="5">Certificate in Computer Science</option>
   <option value="6">Certificate in Development Studies</option>
   <option value="7">Certificate in Data Science</option>
   <option value="8">Diploma  Economics With Data Science</option>
   <option value="9">Diploma  Management & Technology</option>
   <option value="10">Diploma  Computer Engineering</option>
   <option value="11">Diploma  Electrical Engineering</option>
   <option value="12">Diploma  Computer Science</option>
   <option value="13">Diploma  Development Studies</option>
   <option value="14">Diploma  Data Science</option>
   <option value="15">BS Economics With Data Science</option>
   <option value="16">BS Management & Technology</option>
   <option value="17">BS Computer Engineering</option>
   <option value="18">BS Electrical Engineering</option>
   <option value="19">BS Computer Science</option>
   <option value="20">BS Development Studies</option>
   <option value="21">BS Data Science</option>
   <option value="22">MS Development Studies</option>
   <option value="23">MS Data Science</option>
   <option value="24">MS Computer Science</option>
   <option value="25">MS Electrical Engineering</option>
   <option value="26">PhD Computer Science</option>
   <option value="27">PhD Electrical Engineering</option>
   <option value="28">PhD Development Studies</option>
   <option value="29">PhD Data Science</option>
</select>
        </p>
		<span class="style16"><br>
		<br>
        </span>
		<p class="style16">Uganda Certificate of Education (<strong>UCE</strong>) or its equivalent
          <br>
          <br>
Index No:
<input name="uce" type="text" value="" size="35">
Year of Examination:
<input type="text" name="year">
<br>
<br>
<br>
Uganda Advanced Certificate of Education (<strong>UACE</strong>) or its equivalent.
<br>
<br>
Index No:
<input name="uace" type="text" size="35">
Year of Examination:
<input type="text" name="yr">
<br>
<br>
<br>
<strong>Institutions attended, if any</strong><br>
<br>
Institution: <span class="style20">....................</span>
<input type="text" name="inst1">
<input type="text" name="inst2">
<input type="text" name="inst3">
<input type="text" name="inst4">
<input type="text" name="inst5">
<br>
<br>
Qualification Obtained:. 
<input type="text" name="qualification1">
<input name="qualification2" type="text">
<input type="text" name="qualification3">
<input type="text" name="qualification4">
<input type="text" name="qualification5">
        </p>
      <p class="style16">&nbsp;</p>
      <p align="center" class="style18">PART II            </p>
      <p align="center" class="style16"><strong>Other Personal Information</strong></p>
      <p align="left" class="style16">&nbsp;</p>
      <div align="left" class="style16">
        <p>Marital Status: 
          <input type="radio" name="marital_status" value="married" >
          Married
          <input type="radio" name="marital_status" value="single">
          Single
          <input type="radio" name="marital_status" value="other">
          Other
          <br>
          <br>
          Permanent Address:
          <input type="text" name="permanent_address">
          Emergency Contact  if different from above:	 
          <input name="emergency" type="text" size="25">
          <br>
          <br>
          Religious affiliation:
          <input type="text" name="religion">
          <br>
          <br>
          Home County:
          <input type="text" name="county">
          Sub-County:
          <input type="text" name="subcounty">
          Parish:
          <input type="text" name="parish">
          Village:
          <input type="text" name="village">
          <br>
          <br>
          <br>
 It should be <strong>NOTED</strong> by all applicants that cases of impersonation, Falsification of Documents or giving false/incomplete information
          whenever discovered either at Registration or afterwards will lead to automatic <strong>CANCELLATION</strong> of Admission and prosecution in the
          Uganda Courts of Law.      </p>
        <p>&nbsp;</p>
        <p><strong>Declaration by the Applicant</strong></p>
        <p>I have noted and understood the implication of giving incorrect information. I confirm that the information given on this form, to the  best of my knowledge is correct. </p>
        <p>&nbsp;</p>
      
	  Today's Date:
	  <input type="date" name="date">
<br>
          <br>
	  <input name="save" type="submit" class="style9" value="SUBMIT NOW" align="center">
	  </div>	  </td>
    </tr>
  </table>
  <br>  
</form>
</body>
</html>