<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/lottie-player.js"></script>
<script src="js/clipboard.min.js"></script>

<script  type="text/javascript">
var clipboard = new ClipboardJS('.btn');

clipboard.on('success', function(e) {
console.log(e);
});

clipboard.on('error', function(e) {
console.log(e);
});
</script>

<script  type="text/javascript">
$('.cookie-accept').click(function () { //on click event
  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  $("#cookies").slideUp("slow"); //jquery to slide it up
});


//---

document.getElementById("cookie-accept").onclick = function(e) {
  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  document.getElementById("cookies").parentNode.removeChild(elem);
}

</script>
