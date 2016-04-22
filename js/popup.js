// Popup Open
function popupOpen(){
    document.getElementById("popup").style.display="block";
    document.getElementById("overlay").style.display="block";
	}
// Popup Close
	function popupClose(){
        var x = document.getElementsByClassName("popup");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.display="none";
            }
        var a = document.getElementsByClassName("overlay");
        var b;
        for (b = 0; b < a.length; b++) {
            a[b].style.display="none";
            }
	}