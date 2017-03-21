<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="css/submit.css" rel="stylesheet"/>
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#66CCFF">
<div id="header">
<h1>STUDENT SIGN UP PAGE</h1>
</div>
<ul>
  <li><a href="home.php">HOME</a></li>
   <li><a href="signup.php">BACK</a></li>
</ul>

<div id="nav">

</div>

<div class="class_head">&nbsp;</div>
<div class="content">
<div class="box">


<form action="stu_insert.php" method="post" enctype="multipart/form-data" class="elegant-aero">
<h1>Student Sign Up Form
        <span>Please fill all the texts in the fields.</span>    </h1>
		<strong style="font-family:"Courier New", Courier, monospace>Name : </strong>:&nbsp;&nbsp;<br> 
<input type="text" class="textbox" name="fnam" placeholder="first name"/>&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="text" class="textbox" name="lnam" placeholder="last name"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Register Number </strong>:&nbsp;&nbsp;<br />
<input type="text" name="regno" class="textbox" placeholder="Reg no"/>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>


<strong style="font-family:"Courier New", Courier, monospace>Admission Number</strong><br>
<input type="text" name="admno" class="textbox" placeholder="Adm no"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Year Of Joining</strong><br/>
<input type="date" class="textbox" name="jday" /><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Roll Number</strong>:<br>
<input type="text" name="roll_no" placeholder="Roll no"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Birthday</strong><br>
<input type="date" name="bday" placeholder="DD"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Age</strong><br>
<input type="text" name="age" placeholder="Age"/><br>

<strong style="font-family:"Courier New", Courier, monospace>Gender</strong><br />
<select name="gender">
  <option value=" ">-select-</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  <option value="O">Others</option>
</select>
<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Mobile Number</strong><br>
<input type="text" name="mob_no" placeholder="Mob No"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>E-mail Address</strong><br />
<input type="text" name="email" placeholder="Email"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Username</strong><br>
<input type="text" name="uname" placeholder="Username"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Password</strong><br />
<input type="password" name="pass" placeholder="password"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Confirm your Password</strong><br>
<input type="password" name="repass" placeholder="Re-enter your password"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Blood Group</strong><br />
<select name="blood">
  <option value=" ">-select-</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select><br>


<strong style="font-family:"Courier New", Courier, monospace>Home Address</strong><br>
<textarea name="add" rows="5" cols="50"/></textarea><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Parents/Guardian Name</strong><br />
<input type="text" name="pnam" placeholder="Name"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Parent/guardian Mobile Number</strong><br>
<input type="text" name="pmob" placeholder="Mobile Number"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Upload Photo:</strong>
<input type="file" name="f1"/><br><br>
			

<input type="submit" class="button" value="SIGNUP" name="submitbutton" id="submitbutton">

<br>
</div>
<div class="footer">&nbsp;</div>

</form>
</body>
</html>
