<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.register-form{
	width: 500px;
	margin:100px 50px 15px 20px;
	text-align: center;
	padding: 10px;
	color: #fff;
	background : #FF3366;
	border-radius: 10px;
}
.register-form form input{padding: 5px;}
.register-form .register{
border: 0;
width: 60px;
padding: 8px;
}
</style>
</head>
<body>
<div class="register-form">
<h1>Register</h1>
  <?php
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		echo $username;
		echo $email;
		echo $password;
        }
    ?>
<form action="submit" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
	<p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input id="email" type="email" name="email" placeholder="email" /></p>
    <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
     <input class="btn register" type="submit" name="submit" value="Register" />
    </form>
 </div>
</body>
</html>