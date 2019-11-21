

<html>
<body>
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css"> 
<style>
html,h1,h2,h3,h4,h5,h6,body
{
font-family: 'Playfair Display SC', serifaa;
font-size:20px;
text-shadow:4px 4px 4px #aaa;
 }
</style>

<div class="w3-row">
   <div class="w3-col l6 s12">
      <div class="w3-card-4">
      <div class="w3-container w3-cyan w3-text-white w3-center"> <h1>Register</h1>
      </div>
<form action='signup.php' method='post' enctype='multipart/form-data'>
<table style="width:100% ;height:300px">
    <tr>
       <td>
           Enter your full name:
       </td>
       <td>
        <input type="text" name='fullname' required>
        </td>
    </tr>
    <tr>
        <td>
           Enter the username:
        </td>  
        <td>
           <input type='text' name='username' required> 
        </td>
    </tr>
    <tr>
        <td>
        Enter your password:
        </td>
        <td>
        <input type='password' name='password'  required>
        </td> 
    </tr>
    <tr> 
        <td>
        Please re-enter your password:
        </td>
        <td>
        <input type='password' name='rpassword' required>
        </td>
    </tr>
    <tr>
        <td>
        Enter your date of birth:
        </td>
        <td> 
        <input type='date' name='date' required>
        </td>
  
    </tr> 

    </table>
<br>
<input type='submit' value="SUBMIT" class="w3-hover-grey" onclick ="returnvalidation();">
  </form>
</div>
<div class= "w3-container w3-button w3-text-purple">
<a href="login.php"><h2>Login</h2></a>
</div>
</div>

<div class="w3-col l6 s12">
<div class="w3-container">
<img src="images/6.jpg" class="w3-image" width="100%" height="">

</div>

</div>
</div>



<?php
$fullname=filter_input(INPUT_POST,'fullname');
$username=filter_input(INPUT_POST,'username');
$password=md5(filter_input(INPUT_POST,'password'));
$rpassword=md5(filter_input(INPUT_POST,'rpassword'));
$date= date("Y-m-d");

include 'connfile.php';
$namecheck=$conn->query("SELECT username FROM login WHERE username='$username'");
if($namecheck->num_rows!=0)
{die("username already exists !");}
if($fullname&&$username&&$password&&$rpassword&&$date)
{
  if($password==$rpassword)
   { 
    if (strlen($password)>6)
    {
     $conn->query("INSERT INTO login(fullname,username,password,date) VALUES ('$fullname','$username','$password','$date')");
     echo " You have been succesfully registered !";
    }
    else
    { 
     echo"password length must be greater than 6";

    }
   }
  else
   {
    echo "your passwords don't match !";
   }
}

?>

<br>


<footer class="w3-center w3-grey w3-padding-16">
<p>powered by s946</p>
</footer>

</body>
</html>
  
