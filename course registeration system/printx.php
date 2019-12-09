<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet"> 
</head>
<style>
html,h1,h2,h3,h4,h5,h6,body
{
font-family: 'Playfair Display SC', serifaa;
font-size:20px;
text-shadow:4px 4px 4px #aaa;
 }
th,td{
padding:7px;
}


</style>
<body>  
<center>
<?php

$firstname=filter_input(INPUT_POST,'firstname');
$lastname=filter_input(INPUT_POST,'lastname');
$age=filter_input(INPUT_POST,'age');
$gender=filter_input(INPUT_POST,'gender');
$address=filter_input(INPUT_POST,'address');
$branch=filter_input(INPUT_POST,'branch');
$rollno=$_GET['rollno'];
$semester=$_GET['semester'];



 include 'connfile.php';
?>
<h1 style='text-align:center'> FORM DETAILS </h1>  
<?php $sql = "SELECT * FROM form WHERE rollno='$rollno'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$myfile=$row['myfile'];
?>
<div class="w3-responsive w3-margin">
<table style="width:100%">
  <tr><img src='<?php echo $myfile;?>' alt="photo" style="width:100px;height:100px"></tr>
  <tr><th>Firstname:</th><td>
   <?php echo"  $row[firstname] ";?></td></tr>                                                                                                                                                                                                                                                                                                                                       


<tr><th>Lastname:</th><td> 
<?php echo"$row[lastname]";?></td></tr>
 <tr><th>age:</th><td>
   <?php echo "$row[age]";?></td></tr>
 <tr><th> gender:</th><td><?php echo "
   $row[gender]";?></td></tr>
<tr><th>address:</th><td><?php echo "
   $row[address] ";?></td></tr>
<tr><th> branch:</th><td><?php echo "
   $row[branch]" ;?></td></tr>
<tr><th> semester:</th><td><?php echo"
   $row[semester]";?></td></tr>
<tr><th> rollno:</th><td> <?php echo "
   $row[rollno]";?> </td></tr>
</table>

<?php

$sql="select * FROM semcourses WHERE semester='$semester'";
$output=$conn->query($sql);
?>
<table style="width:100%" class="w3-center w3-striped w3-border">
<tr class=' w3-khaki'><th>course code</th><th>subject</th><th>credits</th></tr>
<?php
$signature=$row['signature'];
while($data=$output->fetch_assoc())
{ ?>
<tr><td><?php echo $data['coursecode'];?></td><td> <?php echo $data['subject'];?></td><td><?php echo $data['credits']?></td></tr>

 <?php } ?>

</table> 
 <div class="w3-container w3-right">
 <h1>student signature :</h1>
<img src='<?php echo $signature;?>' alt="photo" style="width:100px;height:100px">



</div>
<center><button onclick="printfunc()" class="w3-hover-dark-grey w3-hover-text-white">print</button></center>

<script>
function printfunc()
{ window.print();
}
</script>
</body>
</html>


