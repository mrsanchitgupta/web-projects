<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$sign_dir="signs/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$sign_file=$sign_dir.basename($_FILES["signature"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
strtolower(pathinfo($sign_file,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, PNG  files are allowed.";
    $uploadOk = 0;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["myfile"]["tmp_name"]);
   
    if($check) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)&&file_exists($sign_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["myfile"]["size"]&&$_FILES["signature"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}




}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)&&move_uploaded_file($_FILES["signature"]["tmp_name"],$sign_file)) {
        //echo "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} 


?>

</body>
</html>
