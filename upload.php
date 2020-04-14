<?php
$target_file =  basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

//CHECK if got username or password
if(isset($_POST['username']) && isset($_POST['password'])){
    //check if username and password is correct
    if(trim($_POST['username']) == 'yourusername' && trim($_POST['password'])=='yourpassword'){
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            die();
        // if everything is ok, try to upload file
        } else {
            $uniqid = uniqid();
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uniqid.'.'.$imageFileType)) {
                // $link_address = 'http://adbroslan.com/imgr/'. $uniqid.'.'.$imageFileType;
                // echo 'The link is here <a href='.$link_address.'>'.$link_address.'</a>';
                header("Location: index.php?id=$uniqid&type=$imageFileType");
                die();
            } else {
                echo "Sorry, there was an error uploading your file.";
                die();
            }
        }
    }
   
}
header("Location: index.php?e=t");
die();


?>