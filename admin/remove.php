<?php
include "database.php";
$id = $_POST['id'];
$val = $_POST['value'];
$product = mysqli_query($con, "select*from products  where id='$id'");
$sample = mysqli_fetch_assoc($product);

$imagePath = "../uploads/";
if ($val == 1) {
    if ($sample['image_1']) {
        $image = $sample['image_1'];
        $location = $imagePath . $image;

        //
        if (file_exists($location)) {
            if (unlink($location)) {
                $query1 = mysqli_query($con, "UPDATE products SET image_1='' WHERE  id=$id");
                echo true;
            }
        }
    }
} else if ($val == 2) {
    if ($sample['image_2']) {
        $image = $sample['image_2'];
        $location = $imagePath . $image;

        //
        if (file_exists($location)) {
            if (unlink($location)) {
                $query1 = mysqli_query($con, "UPDATE products SET image_2='' WHERE  id=$id");
                echo true;
            }
        }
    }
} else if ($val == 3) {
    if ($sample['image_3']) {
        $image = $sample['image_3'];
        $location = $imagePath . $image;

        //
        if (file_exists($location)) {
            if (unlink($location)) {
                $query1 = mysqli_query($con, "UPDATE products SET image_3='' WHERE  id=$id");
                echo true;
            }
        }
    }
}
