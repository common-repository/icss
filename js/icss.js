jQuery('body,html').append( "<div id=\"icss\" class=\"icss\"><span class=\"close\">&times;</span><img class=\"icss-content\" id=\"icssImages\"><div id=\"caption\"></div></div>");

var allImg = document.querySelectorAll(".icsspopup");
var icss = document.getElementById('icss');
var captionText = document.getElementById("caption");

var img = document.getElementById('icssImage');
var icssImg = document.getElementById("icssImages");
for (var i = 0; i < allImg.length; i++) {
    allImg[i].onclick = function(){
    icss.style.display = "block";
	icssImg.src = "";
    icssImg.src = this.src;
	captionText.innerHTML = this.alt;
}
}
var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
    icss.style.display = "none";
	icssImg.src = "";
	captionText.innerHTML = "";
} 
 
var icss = document.getElementById('icss');

window.onclick = function(event) {
    if (event.target == icss) {
        icss.style.display = "none";
    }
}