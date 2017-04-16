<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="logout.php">Log Out Btn</a>

<?php
session_start();
$var=$_SESSION["username"];
echo "your account";
?>
<br>
<?php
echo "welcome " ."$var";

?>
</body>
</html>

Logout.php
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/login.php"); //to redirect back to "login.php" after logging out
exit();
?>


</body>
</html>
