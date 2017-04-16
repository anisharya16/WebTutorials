<!doctype html>
<html>
<head>
<title>User Login</title>
<style>
.tableheader {
background-color: #FF00CC;
color:white;
font-weight:bold;
}
.tablerow {
background-color: #A7D6F1;
color:white;
}
.message {
color: #FF0000;
font-weight: bold;
text-align: center;
width: 100%;
}
</style>
</head>
<body>
<div>
<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","test");

$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
	
header("Location:account.php");




}
?>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"> Login Box</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</div>
</body></html>
