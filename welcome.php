<?php
session_start();
echo "welcome".$_SESSION['email'];
echo "<a href='clogout.php'>Logout</a>";
?>