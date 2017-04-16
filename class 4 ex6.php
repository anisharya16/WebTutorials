<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name Of Colour: <input type="text" name="name">
  <input type="submit">
</form>
<?php
$value = isset($_POST['name']) ? $_POST['name'] : '';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
	 $value=$_POST['name'];	
	}
switch ($value) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
   case " ": echo "wrong";
	break;
}
?>
</body>
</html>
