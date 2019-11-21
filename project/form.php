<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet"> 
</head>
<style>

th,td{
padding:5px;
text-align:centre;
}
html,h1,h2,h3,h4,h5,h6,body
{
font-family: 'Playfair Display SC', serifaa;
font-size:20px;
text-shadow:4px 4px 4px #aaa;
 }

</style>

<body>
<div class="w3-responsive">
<div class="w3-container w3-center ">
   <img src="images/7.gif" alt="logo"class="w3-image"  width=100px">
   <div class= "w3-dark-grey w3-text-white">
	<h2>Registeration Form</h2>
   </div>
</div>
	<form  name="_form" onsubmit ="return validForm()" action="demo.php" method="post" enctype="multipart/form-data">
     
	<div class="w3-container">
     <table style="width:100%">
        <tr>	
         <th> First name:</th>
	  <td><input type= "text" name ="firstname" required></td>
        </tr>
        <tr>
	  <th>Last name:</th>
	  <td><input type ="text" name ="lastname" required></td>
        </tr>
	  <tr>
          <th> Age:</th>
	  <td><input type="text" name="age"required></td>
	</tr>	  
 	<tr>
	   <th>Gender:</th>
	 <td><input type="radio" name="gender" value="male" checked> Male
	  <input type="radio" name="gender" value="female"> Female
	  <input type="radio" name="gender" value="other"> Other</td>
          </tr>
	  <tr>
          <th>Roll no:</th>
          <td><input type="text" name="rollno" required></td>
	  </tr>
<tr>
          <th>Branch:</th>
          <td><input type="radio" name="branch" value="CSE" checked>CSE
<input type="radio" name="branch" value="CSE">ECE
<input type="radio" name="branch" value="CSE">IT
</td>
	  </tr>
	<tr>
	<th>Semester:</th>
        <td> <select name="semester" size="3">
        
        <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
       
</select></td>
</tr>
          <tr>
	  <th>Address:</th>
	  <td><textarea rows="2" cols="25" name="address"required></textarea></td>
	  </tr>
	  <tr>
          <th>Upload photo:</th>
	  <td><input type="file" name="myfile" id="filetoupload" required></td>
	 </tr>
	 <tr>
	 <th>upload signature:</th>
         <td><input type="file" name="signature" id="signtoupload" required></td>
 </table>
	  <div class="w3-xlarge w3-center"><input type="submit" value="submit" class="w3-hover-dark-grey" onclick="returnvalidation();">
        </div>
	 
	 </div>

   </div>
    
    
  
 	
</form>


<script>
function validForm()

{
 var x=document.forms["_form"]["age"].value;
 if (x<18) 
 {alert("age above 18 years only");
     return false;}
var syntax=document.forms["_form"]["signature"].value;
var syn=document.forms["_form"]["myfile"].value;

if((syntax.slice(syntax.length-4,syntax.length)===".jpg" || syntax.slice(syntax.length-4,syntax.length)===".png") &&(syn.slice(syn.length-4,syn.length)===".jpg" || syn.slice(syn.length-4,syn.length)===".png") )
{

}
else
{
alert("Sorry, only JPG, PNG files are allowed.")
return false ;
}


}
</script>

</body>
</html>
