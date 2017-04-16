<html>
<head>
<title>CRUD Operation in PHP</title>
</head>
<body>
<center>
<h1>Add Users</h1>
<form action="idd.php" method="post">
Name:<input type="text" name="name"/></br>
Password:<input type="text" name="pass"/></br>
Email:<input type="text" name="email"/></br>
<input type="submit" name="submit" value="Submit"/></br>
</form>
</center>

<?php
$link=mysqli_connect("localhost","root","","test");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$sql="Insert into user(username,password,email) values('$name','$pass','$email')";
	 $result = mysqli_query($link,$sql); 
	 if($result)
	 {
	echo "<h2>User has been added successfully</h2>";
	}
	else
	{
		echo "<h2>Give proper value</h2>";
	}
}
?>

<div align="center">
<table border="2" width="600">
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php 
$link=mysqli_connect("localhost","root","","test");
if(isset($_GET['del'])){
	$del_id = $_GET['del'];
	$sql1="Delete from user where email='$del_id'";
	if($result = mysqli_query($link,$sql1))
		echo"<h2 align='center'>User $del_id deleted successfully.</h2>";	
}
$sql="select * from user";
$result = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result)){
	
	$showname=$row[0];
	$showpass=$row[1];
	$showemail=$row[2];
	echo "<tr align='center'>
	<td>$showname</td>
	<td>$showemail</td>
	<td>$showpass</td>
	<td><a href='edit.php?edit=$showemail'>Edit</td>
	<td><a href='idd.php?del=$showemail'>Delete</td>
	</tr>";
}	
?>
</table>
</div>
</body>
</html>