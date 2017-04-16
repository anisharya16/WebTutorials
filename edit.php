<?php
$link=mysqli_connect("localhost","root","","test");
$edit_email=$_GET['edit'];
$sql="select * from user where email='$edit_email'";
$result = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
	$name=$row[0];
	$password=$row[1];
	$email=$row[2];
}
?>
<html>
<head>
<title>CRUD Operation in PHP</title>
</head>
<body>
<center>
<h1>Edit Users</h1>
<form action="edit.php?edit_form=<?php echo $email?>" method="post">
Name:<input type="text" name="uname" value="<?php echo $name?>"/><br>
Password:<input type="text" name="upass" value="<?php echo $password?>"/><br>
<input type="submit" name="update" value="Update"/><br>
</form>
</center>

<?php
$link=mysqli_connect("localhost","root","","test");
if(isset($_POST['update']))
{

	$uemail=$_GET['edit_form'];
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	
	$sql1="Update user set username='$uname',password='$upass' where email='$uemail'";
	$result = mysqli_query($link,$sql1);
	if($result)
	{
		header("location:idd.php");
	}
}
?>
</body>
</html>