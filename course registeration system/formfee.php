<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date]  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=date]{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:  #2196F3;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action='signup.php' method='post' enctype='multipart/form-data'>
  <div class="container">
    <h1>Fee Payment</h1>
    <hr>


    <label for="Fullname"><b>Name</b></label>
    <input type="text" placeholder="Enter Fullname" name="name" required>

    <label for="referenceno"><b>Bank Reference Number</b></label>
    <input type="text" placeholder="Reference Number" name="referenceno" required>

	<label for="ifsc"><b>Bank IFSC Code</b></label>
	<input type="text" placeholder="IFSC Code" name="ifsc" required>
	
	<label for="amount"><b>Fee Amount</b></label>
    <input type="text"placeholder="Enter Amount" name="amount" required>	

    <label for="psw"><b>Roll Number</b></label>
    <input type="text" placeholder="Enter Roll Number" name="rollno" required>

    <label for="semester"><b>Semester</b></label>
    <input type="text" placeholder="Enter Semester" name="semester" required>
    
    <label for="dob"><b>Date of Birth</b></label>
	<input type="date" name="date"  required>
    
    <hr>


    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>

<?php
$name=filter_input(INPUT_POST,'name');
$ifsc=filter_input(INPUT_POST,'ifsc');
$referenceno=filter_input(INPUT_POST,'referenceno');
$dob=filter_input(INPUT_POST,'dob');
$rollno=filter_input(INPUT_POST,'rollno');
$semester=filter_input(INPUT_POST,'semester');
$amount=filter_input(INPUT_POST,'amount');


include 'connfile.php' ;
$sql = "INSERT INTO fees (referenceno,ifsc,name,rollno,semester,dob,amount)
VALUES ('$referenceno','$ifsc','$name','$rollno','$semester','$dob','$amount')";
if ($conn->query($sql) === TRUE) {
    echo  "<script>alert('values submitted')
window.location.href='form.php?rollno=$rollno&semester=$semester'
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>
