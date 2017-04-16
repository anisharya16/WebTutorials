<html>
<head>
<title>class 4 ex1</title>
</head>
<body>
<form method="post" action="<?php echo$_SERVER['PHP_SELF'];?>">
	Name:<input type="text" name="fname">
<input type="submit">
</form>	
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
// collect value of input field
$name=$_REQUEST['fname'];
if(empty($name)) {
echo "Name is Empty";
} else {
echo $name;
	}
}
?>
</body>	