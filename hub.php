<?php  


if(isset($_GET['lang']))
{
	setcookie( "lang",  $_GET['lang'],  time() + (10 * 365 * 24 * 60 * 60));
	$_SESSION['lang']=$_GET['lang'];
	$lang=$_SESSION['lang'];
}


if(!isset($_SESSION['youtubediv']))
{
	
	
	$_SESSION['youkudiv']="none";
	$_SESSION['youtubediv']="inline";
	
	$_SESSION['videobtnk']="  ";
	$_SESSION['videobtny']=" disabled ";
	
}
if(isset($_COOKIE['youkudiv'])&&$_COOKIE['youkudiv']=="inline")
{
	$_SESSION['youkudiv']=$_COOKIE['youkudiv'];
	$_SESSION['youtubediv']="none";
	$_SESSION['videobtnk']=" disabled ";
	$_SESSION['videobtny']="  ";
}else
{
	$_SESSION['youkudiv']="none";
	$_SESSION['youtubediv']="inline";
	$_SESSION['videobtnk']="  ";
	$_SESSION['videobtny']=" disabled ";
	
}

if($_SESSION['lang']!="en")
{		
		echo '<script>window.location.replace("index-'.$_SESSION['lang'].'.php");</script>';
		exit;
}




?>