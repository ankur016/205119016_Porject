<!DOCTYPE html>
<?php
session_start();
include("includes/db.php");
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lunchbox</title>
    <link rel="stylesheet" href="style/style1.css">
  </head>
  <body>
<form method="post" action="" >
  <div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="c_pass" required>
  </div>

  <input type="submit" class="btn" value="Sign in" name="login">
       <div class="main-nav"> <h4 ><a href="#">Forget Password</a>
        <a href="index.php">Back</a></h4>
   
    </div>
      </div>
      </form>
       
      
  </body>
</html>



<?php
if(isset($_POST['login']))
{
    $c_email=mysql_real_escape_string ($_POST['email']);
    $c_pass=mysql_real_escape_string ($_POST['c_pass']);
    $sel_c=" select * from sign_up where s_email='$c_email' AND s_password='$c_pass' ";
    $result= mysqli_query($con,$sel_c);
    $check_customer = mysqli_num_rows($result);
    if($check_customer==1)
   {
	
	$_SESSION['user_email']=$c_email; 
	
	echo "<script>window.open('account.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
    
    
    
    
}





?>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = mysql_real_escape_string($_POST['email']);
		$pass = mysql_real_escape_string($_POST['password']);
	
	$sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	
	}
	
	
	
	
	








?>