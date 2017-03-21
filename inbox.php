<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/studhome.css" rel="stylesheet"/>
<title>Untitled Document</title>
</head>

<body>

<form action='delete_msg.php' method='post' class="elegant-aero">
<div id="header">
<h1>Inbox</h1>
</div>
<center>
<?php
$con=mysqli_connect('localhost','root','','mailbox');

$id=$_SESSION['userid'];


$sql = "SELECT * FROM user_mail where rec_id='".$id."'";
$dd=mysqli_query($con,$sql);
?>
<br>
<input type="button" value='HOME' name='home' onclick="window.location.href='fac_mail_home.php'"  class="button"/>
&nbsp;&nbsp;&nbsp;<input type='submit' value='Delete' name='delete' class="button"/>

	<table>
	<tr><th>Check </th><th>Sender </th><th>Subject </th><th>Date</th></tr>
<?php
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysqli_fetch_array($dd))
{
?>
	
	
	
	<tr>
	<td width="120"><input type='checkbox' name='ch[]' value='$mid'/></td>
	<td width="316"> <?php print $sid; ?> </td>
	<td width="269"> <a href='HomePage.php?coninb=$mid'> <?php print $s; ?> </td>
	<td width="364"><?php print $d; ?></td>
	</tr>	
	
	<?php }
	
	?>
</table>	


</center>
</div></form>



</body>
</html>
