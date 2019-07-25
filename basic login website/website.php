<!doctype html>
<html>
<head>
<meta name="viewport" content="device-width ,initial-scale=1.0">
<title>First Project</title>
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet"> 
<style>

.slid { 
 display: none;
    }
html,h1,h2,h3,h4,h5,h6,body
{
font-family: 'Playfair Display SC', serifaa;
font-size:22px;
text-shadow:4px 4px 4px #aaa;
 }
 </style>
</head>
<body>
<div style=" color:white ;background-color: #7e677e ;text-align:center";><h1>WELCOME TO MY FIRST PROJECT</h1></div>
<!--img src="cse-2018.png" height="100" width ="100" alt ="not available"-->
<div style="overflow:auto ;background-color:#7e677e;" >
   <div class="w3-bar w3-#7e677e w3-text-white">
<a class="w3-bar-item w3-button w3-hover-#eee" href ="login.php">Login</a>
	         <a class="w3-bar-item w3-button w3-hover-#eee" href="#">Our team</a>

		<a class="w3-bar-item w3-button w3-hover-#eee" href="#">Contact us</a>
		<a class="w3-bar-item w3-button w3-hover-#eee" href="firstproject.php">home</a>

	</div>	</div>
	
<!-- grid start-->
<div class="w3-row">

	 
<!--left sidebar-->

<div class="w3-col l2 s12">
   <div class="w3-card-4 w3-margin w3-white">
    <h1></h1>
   </div>
</div>
<!-- Main content -->
<div class="w3-col l8 s12">

<div class="w3-content w3-section" style="max-width:500px">
	   <img src="images/1.jpg" class="slid" style="width:100%">
	   <img src="images/2.jpg" class="slid"  style="width:100%">
	   <img src="images/3.jpg" class="slid" style="width:100%">
<img src="images/4.jpg" class="slid" style="width:100%">

	   </div>

</div>
<!--right sidebar-->
<div class="w3-col l2 s12">
   <div class="w3-card-4 w3-margin w3-dark-grey">
     <h1> header</h1>
    <div class="w3-container"> 
     <a href=#>link 1</a><br>
     <a href=#>link 2</a><br>
     <a href=#>link 3</a><br>
     <a href=#>link 4</a><br>
     <a href=#>link 5</a><br>
   </div>
   </div>
</div>


<!-- end of grid-->
</div>

<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top w3-center">

<p>center for learning and development</p>
</footer>

  <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slid");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</body>
</html>
