<?php
function fnalist2($movieid, $i){
    //define new content of list column
    $tolist = 2;
return '
<div class="first_div">
<!-- THIS BUTTON CALLS AJAX SCRIPT -->
<button id="showAjax" onclick="showAjaxStuff_'.$i.'();">Gelesen</button>
</div>

<div class="second_div" id="ajax_auto_'.$i.'">
	<!-- AJAX CONTENT WILL BE LOADED INTO THIS DIV -->
</div>
<script type="text/javascript">
	function showAjaxStuff_'.$i.'() {
   
        if (window.XMLHttpRequest) {
        	// MODERN BROWSERS
            xmlhttp = new XMLHttpRequest();
        } else {
        	// VERY OLD BROWSERS
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        	// IF THE AJAX CALL IS SUCCESSFULL
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_auto_'.$i.'").innerHTML = xmlhttp.responseText;
            }
        };
        // CALLING THE PHP FILE
        xmlhttp.open("GET","ajax-code.php?movieid='.$movieid.'&tolist='.$tolist.'");
        xmlhttp.send();
}
</script>';
    }
?>