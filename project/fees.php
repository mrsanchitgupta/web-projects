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
