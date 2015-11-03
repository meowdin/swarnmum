<?php 
session_start();

if($_SESSION['lang']=="")
{
$_SESSION['lang']="en";	
	
}
if(isset($_COOKIE['lang']))
{
	$_SESSION['lang']=$_COOKIE['lang'];
	
}
$lang=$_SESSION['lang'];



 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>

			<META http-equiv="content-type" content="text/html; charset=utf-8">
			
			<?php
			if($lang=="en")
			{
				?>
				<TITLE>Swanmum Homestay</TITLE>
				<?php
			
				
			}
			if($lang=="sc")
			{
				?>
				<TITLE>Swanmum 寄宿家庭</TITLE>
			
				<?php
			}
			if($lang=="tc")
			{
			
				?>
				<TITLE>Swanmum寄宿家庭</TITLE>
					<?php
			}
			
			
			?>
			
					<META name="keywords" content="海外,留學,新加坡,Swanmum,singapore study,singapore visa">		 
				<META name="description" content="Swanmum 新加坡留學教育團隊">			 
			 
	

	<SCRIPT src="files/webfont.js" type="text/javascript"></SCRIPT>
	<LINK href="Default.css" rel="stylesheet" type="text/css">

	<SCRIPT src="files/jquery.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT type="text/javascript">window.jQuery || document.write('<script src="files/jquery-1.7.1.min.js"><\/script>')</SCRIPT>
	
				
</HEAD>   










				