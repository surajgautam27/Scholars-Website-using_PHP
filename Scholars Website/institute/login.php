<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form action='admin/login.php'method='post'>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type='text'name='user_name' placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type='password'name='admin_pass' placeholder="Password">
  </div>

  <input type='submit' name='submit' value='login' class="btn">
</div>
  </body>
</html>
<?php
$conn=mysqli_connect("localhost","root","" ,"sch_info");

if(isset($_POST['submit']))
{
	//$admin_name=$_SESSION['user_name']=$_POST['user_name'];
	$user_name=$_SESSION['user_name']=$_POST['user_name'];
	$admin_pass=$_POST['admin_pass'];
	$query=mysqli_query($conn,"select * from sch_login where user_name='$user_name' AND password='$admin_pass'");
	

//$run =mysql_query($query);
if(mysqli_num_rows($query)>0)
{
	echo"<script>window.location.href ='table.php'; </script>";
}
else
{
	echo"<script>alert('password or username is incorrect')</script>";
}
}
?>

