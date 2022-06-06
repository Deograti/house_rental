<?php

error_reporting(0);
 

$msg = "";
 
// If upload button is clicked ...

if (isset($_POST['upload'])) {
 

    $filename = $_FILES["uploadfile"]["name"];

    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "./image/" . $filename;
 

    $conn= new mysqli('localhost','root','','house_rental_db')or die("Could not connect to mysql".mysqli_error($con));
 

    // Get all the submitted data from the form

    $sql = "INSERT INTO houses (filename) VALUES ('$filename')";
 

    // Execute query

    mysqli_query($db, $sql);
 

    // Now let's move the uploaded image into the folder: image

    if (move_uploaded_file($tempname, $folder)) {

        echo "<h3>  Image uploaded successfully!</h3>";

    } else {

        echo "<h3>  Failed to upload image!</h3>";

    }
}
?>