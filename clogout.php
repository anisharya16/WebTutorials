<?php
session_start();
session_destroy();
if(isset($_COOKIE['email'])and isset($_COOKIE['pass'])){
$email=$_COOKIE['email'];
$pass=$_COOKIE['pass'];
setcookie('email',$email,time()-1);
				setcookie('pass',$pass,time()-1);
}
echo "successfully logout.click here to <a href='clogin.php'>login again</a>";
?>