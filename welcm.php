<?php
session_start();
if(!empty($_SESSION['user']))
	{
		echo 'Welcome back '. $_SESSION['user'];
	}
?>