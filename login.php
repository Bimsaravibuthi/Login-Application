<?php
session_start();
$msg = "";
$db_user_name="root";
$db_password="";
$hostname="localhost";
$con = mysqli_connect($hostname,$db_user_name,$db_password);
mysqli_select_db($con,'login');

if(isset($_POST['sub']))
	{
		$user_name=$_POST["user"];
		$pass=$_POST["pass"];
		
		$query = "select * from user where user_name = '$user_name' and password = '$pass'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0)
		{
			$_SESSION['user'] = $user_name;
			setcookie("loggedbefore","logged",time()+300);
			header("Location:welcm.php");
		}
		else
		{
			$msg = "Error username or password incorrect";
		}
	}
?>

<html>
<head><title>Login Form</title>
</head>
<body>

<form name="formal" action="login.php" method="post">
Username : <input type="text" name="user"/><br></br>
Password : <input type="password" name="pass"/><br></br>
<input type="submit" name="sub" value="send"/>
<?php 
echo $msg;
?>
</form>
</body>
</html>