<!doctype html>
<html>
<head>
<title>User Login</title>
</head>
<body>
<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','rootname','','test');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT * FROM user");
print '<table border="1"';
while($row = $results->fetch_array()) {
    print '<tr>';
    print '<td>'.$row["username"].'</td>';
    print '<td>'.$row["password"].'</td>';
    print '<td>'.$row["email"].'</td>';
    print '</tr>';
}   
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection 
$mysqli->close();
?>
</body>
</html>