<?php 
session_start();

if($_GET['vtype']!="")
{



if($_GET['vtype']=="y")
{
	$_SESSION['youkudiv']="none";
	$_SESSION['youtubediv']="inline";
	setcookie( "youkudiv",  "none",  time() + (10 * 365 * 24 * 60 * 60));
	setcookie( "youtubediv",  "inline",  time() + (10 * 365 * 24 * 60 * 60));
}
if($_GET['vtype']=="k")
{
	$_SESSION['youtubediv']="none";
	$_SESSION['youkudiv']="inline";
	
	setcookie( "youtubediv",  "none",  time() + (10 * 365 * 24 * 60 * 60));
	setcookie( "youkudiv",  "inline",  time() + (10 * 365 * 24 * 60 * 60));
	
}
	$_SESSION['videobtnk']="  ";
	$_SESSION['videobtny']="  ";

	$_SESSION['videobtn'.$_GET['vtype']]=" disabled ";

	
}

echo $_SESSION['youkudiv'].$_SESSION['youtubediv'].$_SESSION['videobtnk'].$_SESSION['videobtny'];

?>
