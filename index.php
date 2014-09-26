<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="10">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54049534-1', 'auto');
  ga('send', 'pageview');

</script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function doStuff() {
$("div").addClass('cat');
}
window.setInterval(function(){
  doStuff();
}, 10);

</script>
<style>
html, body {
height:100%;
}

body {
background-size:100%;
background-repeat:no-repeat;
margin:0px;
padding:0px;
}

.cat {
background-image:url('http://thecatapi.com/api/images/get?format=src&type=gif');
background-size:100%;
background-repeat:no-repeat;
}

@media screen and (min-width : 1300px) {
	.cat {
		background-size:cover;
	} 
}
.whole {
height:100%;
width:100%;
display:table;
}

.cred {
position: absolute;
bottom:0px;
right:0px;
color:black;
background-color:white;
padding:5px;
}

.cred a {
	color:black;
	background-color:white;
}
</style>
</head>
<body>
<a class="whole" href="http://thecatapi.com"><div class="whole"></div></a>
<p class="cred">Images aquired via <a href="http://thecatapi.com">thecatapi</a></p>
</body>
</html>


