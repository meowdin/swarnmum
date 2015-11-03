

<script src="files/webfont.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="Default.css">


		<script type="text/javascript" src="files/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="files/jquery-1.7.1.min.js"><\/script>')</script>
	

 <link rel="stylesheet" href="files/jquery-ui/jquery-ui.css">
  <script src="files/jquery-ui/jquery-ui.js"></script>

<div style="width:100%;text-align:center;">

<table align="center" >
<tr><td>
 <div  style="width:248px;height:192px;background:url('files/polaroid-big.png') top left no-repeat;">
<a  id="sep2007btn" style="width:200px;height:150px;" href="javascript://" title="" >
<image  style="width:200px;height:150px;
margin-top:20px;
		 display:inline-block;
        -moz-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        -webkit-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
		" src ="files/sepholiday2007.png">
</image>
</a>
</div>
<?php if($lang=="en"){echo "September Holiday Camp 2007";} else {echo "2007 九月夏令营";}?>

</td>
<td>
 <div  style="width:248px;height:192px;background:url('files/polaroid-big.png') top left no-repeat;">
<a  id="sep2009batambtn" style="width:200px;height:150px; " href="javascript://" title="" >
<image  style="width:200px;height:150px;
margin-top:20px;
		 display:inline-block;
        -moz-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        -webkit-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
		" src ="files/batam2009.png">
</image>
</a>
</div>
<?php if($lang=="en"){echo "Batam Trip 2008";} else {echo "2008 巴淡岛旅游";}?>

</td>

<td>

 <div  style="width:248px;height:192px;background:url('files/polaroid-big.png') top left no-repeat;">
<a  id="sep2007batambtn" style="width:200px;height:150px; " href="javascript://" title="" >
<image  style="width:200px;height:150px;
margin-top:20px;
		 display:inline-block;
        -moz-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        -webkit-box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
        box-shadow:0 0 5px rgba(0, 0, 0, 0.35) inset;
		" src ="files/batam2007.png">
</image>
</a>

</div>
<?php if($lang=="en"){echo "Batam Trip 2007";} else {echo "2007 巴淡岛旅游";}?>
</td>
</tr>			

<tr><td>

<!-- 1 -->

</td><td>
<!-- 2 -->

</td><td>

<!-- 3 -->
</td></tr>
</table>


</div>


 

<div id="sep2007" style="display:none;text-align:center;">
<input type="button" id="btnVdeo1k" onClick="javascript:switchgalleryvideo('k')" value="Youku" <?php echo $_SESSION['videobtnk'];?> />
<input type="button" id="btnVdeo1y" onClick="javascript:switchgalleryvideo('y')" value="Youtube" <?php echo $_SESSION['videobtny'];?> />
<br/>
<div id="sep2007k" style="display:<?php echo $_SESSION['youkudiv'];?>;text-align:center;">
 <object width="425" height="350">
        <param name="movie" value="http://player.youku.com/player.php/sid/XMTM2Mjk3OTQ3Mg==/v.swf">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
		<embed src="http://player.youku.com/player.php/sid/XMTM2Mjk3OTQ3Mg==/v.swf" allowFullScreen="true" quality="high" width="425" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
    </object>
</div>
<div id="sep2007y" style="display:<?php echo $_SESSION['youtubediv'];?>;text-align:center;">
    <object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/mHUvDFqN2_M">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
        <embed src="http://www.youtube.com/v/mHUvDFqN2_M" 
		type="application/x-shockwave-flash" wmode="transparent" width="425" height="350" 
		allowfullscreen="true" allowscriptaccess="always">
    </object>
</div>
</div>

<div id="sep2009batam" style="display:none;text-align:center;">
<input type="button" id="btnVdeo2k"  onClick="javascript:switchgalleryvideo('k')" value="Youku"   <?php echo $_SESSION['videobtnk'];?> />
<input type="button" id="btnVdeo2y"  onClick="javascript:switchgalleryvideo('y')" value="Youtube"   <?php echo $_SESSION['videobtny'];?> />
<br/>
<div id="sep2009batamk" style="display:<?php echo $_SESSION['youkudiv'];?>;text-align:center;">
 <object width="425" height="350">
        <param name="movie" value="http://player.youku.com/player.php/sid/XMTM2Mjk3OTMxMg==/v.swf">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
		<embed src="http://player.youku.com/player.php/sid/XMTM2Mjk3OTMxMg==/v.swf" allowFullScreen="true" quality="high" width="425" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
    </object>
</div>
<div id="sep2009batamy" style="display:<?php echo $_SESSION['youtubediv'];?>;text-align:center;">
    <object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/Rxmy39iKnts">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
        <embed src="http://www.youtube.com/v/Rxmy39iKnts" 
		type="application/x-shockwave-flash" wmode="transparent" width="425" height="350" 
		allowfullscreen="true" allowscriptaccess="always">
    </object>
</div>
</div>

<div id="sep2007batam" style="display:none;text-align:center;">
<input type="button" id="btnVdeo3k" onClick="javascript:switchgalleryvideo('k')" value="Youku" <?php echo $_SESSION['videobtnk'];?> />
<input type="button" id="btnVdeo3y" onClick="javascript:switchgalleryvideo('y')" value="Youtube"  <?php echo $_SESSION['videobtny'];?> /><br/>
<div id="sep2007batamk" style="display:<?php echo $_SESSION['youkudiv'];?>;text-align:center;">
 <object width="425" height="350">
        <param name="movie" value="http://player.youku.com/player.php/sid/XMTM2Mjk3Nzc1Mg==/v.swf">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
		<embed src="http://player.youku.com/player.php/sid/XMTM2Mjk3Nzc1Mg==/v.swf" allowFullScreen="true" quality="high" width="425" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
    </object>
</div>
<div id="sep2007batamy" style="display:<?php echo $_SESSION['youtubediv'];?>;text-align:center;">
    <object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/Txl2KowwsmY">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
        <embed src="http://www.youtube.com/v/Txl2KowwsmY" 
		type="application/x-shockwave-flash" wmode="transparent" width="425" height="350" 
		allowfullscreen="true" allowscriptaccess="always">
    </object>
</div>

</div>

	
	




 <script>
 
  function switchgalleryvideo(input)
 {
	 
	 document.getElementById("sep2007k").style.display= "none";
	 document.getElementById("sep2007y").style.display= "none";
 
 	 document.getElementById("sep2009batamk").style.display= "none";
	 document.getElementById("sep2009batamy").style.display= "none";
	 
	 document.getElementById("sep2007batamk").style.display= "none";
	 document.getElementById("sep2007batamy").style.display= "none";
	 
	document.getElementById("sep2007"+input).style.display= "inline";
	document.getElementById("sep2009batam"+input).style.display= "inline";
	document.getElementById("sep2007batam"+input).style.display= "inline";
	
	 document.getElementById("btnVdeo1k").disabled=false;
	 document.getElementById("btnVdeo1y").disabled=false;
 	 document.getElementById("btnVdeo1"+input).disabled=true;
	 
	  document.getElementById("btnVdeo2k").disabled=false;
	 document.getElementById("btnVdeo2y").disabled=false;
 	 document.getElementById("btnVdeo2"+input).disabled=true;
	 
	  document.getElementById("btnVdeo3k").disabled=false;
	 document.getElementById("btnVdeo3y").disabled=false;
 	 document.getElementById("btnVdeo3"+input).disabled=true;
	
	 var xmlhttp;

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
  xmlhttp.open("GET", "videoswitch.php?vtype="+input, true);
  xmlhttp.send();
 
 }
  $(function() {
    $( "#sep2007" ).dialog({autoOpen: false,	width: 600,	height: 480});
	$( "#sep2007btn" ).click(function( event ) {$( "#sep2007" ).dialog( "open" );event.preventDefault();});
	
	    $( "#sep2009batam" ).dialog({autoOpen: false,	width: 600,	height: 480});
	$( "#sep2009batambtn" ).click(function( event ) {$( "#sep2009batam" ).dialog( "open" );event.preventDefault();});
  
      $( "#sep2007batam" ).dialog({autoOpen: false,	width: 600,	height: 480});
	$( "#sep2007batambtn" ).click(function( event ) {$( "#sep2007batam" ).dialog( "open" );event.preventDefault();});
  });
  
  </script>




