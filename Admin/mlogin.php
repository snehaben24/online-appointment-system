<!DOCTYPE html>
<html>
<body style="background-image:url(mbackground.jpg)">
<link rel="stylesheet" href="main.css">
	<form action="mlogin.php" method="post">
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong><font color=#C5CAE9> Manager Login</strong></li>
					<li><a href="../cover.php"><font color=#C5CAE9>Home</a></li>
				</ul>
	</div>
	<div class="sucontainer" style="background-color:#C5CAE9">
		<label><b><font color=#303F9F>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b><font color=#303F9F>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-color:#C5CAE9">
			<button type="submit" name="submit" style="float:right"><font color = #BDBDBD>Log In</button>
		</div>
<?php 
function SignIn() 
{ 
include 'dbconfig.php';

session_start();
if(!empty($_POST['uname']))  
{ 
	$query = mysqli_query($conn,"SELECT * FROM manager where username = '$_POST[uname]' AND password = '$_POST[pass]'");
	$row = mysqli_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password'])) 
	{ 
		$_SESSION['username'] = $row['username'];
		$_SESSION['mgrname']=$row['name'];
		$_SESSION['mgrid']=$row['mid'];
		echo "Logging you in..";
		header( "Refresh:3; url=mgrmenu.php");
	} 
	else 
	{ 
		echo "Wrong Credentials!"; 
	} 
	}
} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>
</body>
</html>