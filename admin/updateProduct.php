<?php
include '../config/config.php';
$id = $_POST["id"];
$productName = $_POST["productName"];

$mrp = $_POST["mrp"];
$sprice = $_POST["sprice"];
$quantity = $_POST["quantity"];
$description = $_POST["description"];
$youtube_link = $_POST["youtubeLink"];

$image1 = $_FILES["image1"]["name"];


$image2 = $_FILES["image2"]["name"];
$image3 = $_FILES["image3"]["name"];

$productList = mysqli_query($con, "select*from products  where id='$id'");
$resultData = $productList->fetch_array(MYSQLI_ASSOC);

$oldImage1 =  $resultData['image_1'];
$oldImage2 =  $resultData['image_2'];
$oldImage3 =  $resultData['image_3'];


$targetDir = "../uploads/";
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'jfif');

$insertQuery1 = $con->query("UPDATE products set name='$productName',mrp='$mrp',quantity='$quantity',sprice='$sprice',description='$description',youtube_link='$youtube_link' where id ='$id'");

if ($image1) {
    $oldImagePath1 = $targetDir . $oldImage1;
    if (file_exists($oldImagePath1)) {
        unlink($oldImagePath1);
    }

    // File upload path 
    $fileOldName = basename($_FILES['image1']['name']);
    $fileName = ($id . "_" . $fileOldName);

    $targetFilePath = $targetDir . $fileName;

    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (in_array($fileType, $allowTypes)) {


        // Upload file to server 
        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath)) {

            $insert = $con->query("UPDATE products set  image_1 ='$fileName' WHERE id='$id'");
            if (!$insert) {

                echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
        } else {

            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    } else {

        echo "<script>alert('Sorry,Not In Type your file Format .')</script>";
    }
}
if ($image2) {
    $oldImagePath2 = $targetDir . $oldImage2;
    if (file_exists($oldImagePath2)) {
        unlink($oldImagePath2);
    }

    // File upload path 
    $fileOldName = basename($_FILES['image2']['name']);
    $fileName = ($id . "_" . $fileOldName);

    $targetFilePath = $targetDir . $fileName;

    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (in_array($fileType, $allowTypes)) {


        // Upload file to server 
        if (move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath)) {

            $insert = $con->query("UPDATE products set  image_2 ='$fileName' WHERE id='$id'");
            if (!$insert) {
                echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
        } else {

            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    } else {

        echo "<script>alert('Sorry,Not In Type your file Format .')</script>";
    }
}
if ($image3) {
    $oldImagePath3 = $targetDir . $oldImage3;
    if (file_exists($oldImagePath3)) {
        unlink($oldImagePath3);
    }

    // File upload path 
    $fileOldName = basename($_FILES['image3']['name']);
    $fileName = ($id . "_" . $fileOldName);

    $targetFilePath = $targetDir . $fileName;

    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (in_array($fileType, $allowTypes)) {


        // Upload file to server 
        if (move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath)) {

            $insert = $con->query("UPDATE products set  image_3 ='$fileName' WHERE id='$id'");
            if (!$insert) {

                echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
        } else {

            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    } else {

        echo "<script>alert('Sorry,Not In Type your file Format .')</script>";
    }
}

if ($insertQuery1) {

    echo "<script>alert('product has been inserted successfully')</script>";
    echo "<script>window.open('index.php', '_self')</script>";
}
