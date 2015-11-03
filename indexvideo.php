



<div>
<input type="button" id="btnVdeok" onClick="switchindexvideo('k');" value="Youku"  <?php echo $_SESSION['videobtnk'];?> />
<input type="button" id="btnVdeoy" onClick="switchindexvideo('y');" value="Youtube"  <?php echo $_SESSION['videobtny'];?> />
<br/>
<div id="indexvideok" style="display:<?php echo $_SESSION['youkudiv'];?>" >
	<object width="425" height="350">
        <param name="movie" value="http://static.youku.com/v/swf/qplayer.swf?VideoIDS=XMTM2Mjk3OTAyOA"></param>
        <param name="wmode" value="transparent"></param>
        <param name="allowFullScreen" value="true"></param>
        <param name="allowScriptAccess" value="always"></param>
		<embed src="http://static.youku.com/v/swf/qplayer.swf?VideoIDS=XMTM2Mjk3OTAyOA" allowFullScreen="true" quality="low" width="425" height="350" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
		 </object>
</div>


<div id="indexvideoy" style="display:<?php echo $_SESSION['youtubediv'];?>" >	
	<object width="425" height="350">
        <param name="movie" value="http://www.youtube.com/v/E5BnNQczveI"></param>
        <param name="wmode" value="transparent"></param>
        <param name="allowFullScreen" value="true"></param>
        <param name="allowScriptAccess" value="always"></param>
        <embed src="http://www.youtube.com/v/E5BnNQczveI" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350" allowfullscreen="true" allowscriptaccess="always"></embed>
    </object>
 </div>
 <script>
 
 function switchindexvideo(input)
 {
	 
	 
	 document.getElementById("indexvideok").style.display= "none";
	 document.getElementById("indexvideoy").style.display= "none";
 
 document.getElementById("indexvideo"+input).style.display= "inline";
 
 
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