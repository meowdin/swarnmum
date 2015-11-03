
	

<div>
<input type="button" id="btnVdeok" onClick="javascript:switchspeechvideo('k')" value="Youku" <?php echo $_SESSION['videobtnk'];?>  />
<input type="button" id="btnVdeoy" onClick="javascript:switchspeechvideo('y')" value="Youtube" <?php echo $_SESSION['videobtny'];?> />
<br/>
	<div id="speechdayvideok" style="display:<?php echo $_SESSION['youkudiv'];?>" >
	 <object width="425" height="350">
        <param name="movie" value="http://player.youku.com/player.php/sid/XMTM2Mjk3ODgyNA==/v.swf">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
<embed src="http://player.youku.com/player.php/sid/XMTM2Mjk3ODgyNA==/v.swf" allowFullScreen="true" quality="low" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
	 </object>
	</div>
	
	<div id="speechdayvideoy" style="display:<?php echo $_SESSION['youtubediv'];?>" >
    <object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/-XkD95OVkl0">
        <param name="wmode" value="transparent">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
        <embed src="http://www.youtube.com/v/-XkD95OVkl0" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350" allowfullscreen="true" allowscriptaccess="always">
    </object>
	</div>
<script>
 
 function switchspeechvideo(input)
 {
	 
	 document.getElementById("speechdayvideok").style.display= "none";
	 document.getElementById("speechdayvideoy").style.display= "none";
 
 document.getElementById("speechdayvideo"+input).style.display= "inline";
 
 
	 document.getElementById("btnVdeok").disabled=false;
	 document.getElementById("btnVdeoy").disabled=false;
 	 document.getElementById("btnVdeo"+input).disabled=true;
	 
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
 </script>
</div>
	
