<?php
if(isset($_COOKIE["loggedbefore"]))
	header("Location:welcm.php");
else
	header("Location:login.php");
?>