<html>
<body>
 <?php
$firstname=filter_input(INPUT_POST,'firstname');
$lastname=filter_input(INPUT_POST,'lastname');
$age=filter_input(INPUT_POST,'age');
$gender=filter_input(INPUT_POST,'gender');
$address=filter_input(INPUT_POST,'address');
$rollno=filter_input(INPUT_POST,'rollno');
$semester=filter_input(INPUT_POST,'semester');
$branch=filter_input(INPUT_POST,'branch');
$target_dir = "uploads/";
$sign_dir="signs/";
$target_file=$target_dir.basename($_FILES["myfile"]["name"]);
$sign_file=$sign_dir.basename($_FILES["signature"]["name"]);
 include 'connfile.php';
 include 'uploadcheck.php';
 $sql = "INSERT INTO form (firstname, lastname, age,gender,address,rollno,semester,branch,myfile,signature)
VALUES ('$firstname','$lastname','$age','$gender','$address','$rollno','$semester','$branch','$target_file','$sign_file')";
//new code begins
$result=$conn->query("select rollno from fees where rollno='$rollno'");
$row=$result->fetch_assoc();
$frollno=$row['rollno'];
if($result->num_rows!=0)
{ 
  if($rollno==$frollno)
  {
    if ($conn->query($sql) === TRUE) 
    {
        echo  "<script>alert('values submitted')
                window.location.href='printx.php?rollno=$rollno&semester=$semester'
               </script>";
    } 
    else 
       {
    echo "Error: " . $sql . "<br>" . $conn->error;
       }
  }
  }
   else
      {
       echo"<script> alert('fees not submitted')
       window.location.href='fees.php'</script>";
      }

   

//$sql = "SELECT id, firstname, lastname ,age,gender,address,myfile FROM form";
/*$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Gender: " .$row["gender"]." - age: " . $row["age"]." - myfile: " . $row["myfile"]."<br>";    }
} 
else {
    echo "0 results";
}
$extract=$conn->query("SELECT * FROM form WHERE gender='female'");
echo "<br><h3>number of records with gender female are : $extract->num_rows <br>";

if ($extract->num_rows > 0) {
    // output data of each row
    while($row = $extract->fetch_assoc()) {
echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Gender: " .$row["gender"]." - age: " . $row["age"]."<br>"; }}
       
else {
    echo "0 results";
}*/
//$conn->close(); 

?>


</body>
</html>
