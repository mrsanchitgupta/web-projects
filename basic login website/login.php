
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="device-width",initial-scale="1.0">
<title>Login or Signup</title>
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css"> 

<style>
html,h1,h2,h3,h4,h5,h6,body
{
font-family: 'Playfair Display SC', serifaa;
font-size:18px;
text-shadow:4px 4px 4px #aaa;
 }
.w3-hover-navy-peony
{color:#fff;background-color:#223a5e}
</style>
<body>
<div class="w3-row">
   <div class="w3-col l8 s12">
	<div class="w3-card" >
	<img src="images/5.jpg " style="width:100%;height:600px">
	</div>

   </div>


   <div class="w3-col l4 s12">

	<div class="w3-container">
	<div class="w3-card-4"style="width:90%" >
	<div class="w3-container w3-flat-belize-hole"><h2>Login</h2>
	</div>


	  <img src="images/avlogin.png" style="width:100%;height:80%">

<form  name="_form" action="retrieval.php" method ="post" enctype="multipart/form-data">


      <div clss="w3-container">
  User Id:<br>

  <input type= "txt" name ="username" required><br>

  Password:<br>
  <input type ="password" name="password" required><br>
   
    <Input type="submivt" value="submit" class="w3-hover-text-purple" onclick ="returnvalidation();">

<div class="w3-container w3-center w3-grey w3-hover-text-purple">
<a href="signup.php"><h2>New User Register here</h2></a>
</div>
 </div>
 </div>
 </div>

</form>
<br>


</div>


</body>

</html>
