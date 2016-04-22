<?php
function yttrailer($movie, $y) {
    return '
                <div class="first_div">
                <!-- THIS BUTTON CALLS AJAX SCRIPT -->
                <button id="showAjax_'.$y.'" class="s3-btn" name="Open" onclick="showAjaxStuffyt_'.$y.'();">Show Video</button>
            </div>
            
            <div class="second_div" id="ajax_auto_yt_'.$y.'">
                <!-- AJAX CONTENT WILL BE LOADED INTO THIS DIV -->
            </div>
        <script type="text/javascript">
            function showAjaxStuffyt_'.$y.'() {
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
                        document.getElementById("ajax_auto_yt_'.$y.'").innerHTML = xmlhttp.responseText;
                    }
                };
                // Action if button is clicked
                xmlhttp.open("GET","yttrailer-less.php?movie='.$movie.'&id='.$y.'");
                xmlhttp.send();
            }
        </script>';
}
?>