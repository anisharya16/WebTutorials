<?php
$myemail="bismita@hotmail.com";
$mypass="12345";
  if(isset($_POST['login']))
  {
	  $email=$_POST['email'];
	   $pass=$_POST['password'];
	    
		if($email ==$myemail and $pass==$mypass){
			
			if(isset($_POST['remember'])){
				setcookie('email',$email,time()+60*60*7);
				setcookie('pass',$pass,time()+60*60*7);
				
				
			}
			session_start();
				$_SESSION['email']=$email;
				header("location:welcome.php");
			
		}
		else{
			echo "email pass wrong.<br> click here to <a href='clogin.php'>
			try again</a>";
		}
		
  } 
  else
  
	  header("location:clogin.php")
  
  ?>
  
  