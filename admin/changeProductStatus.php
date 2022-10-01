<?php
include '../config/config.php';
if (isset($_POST['id']) && isset($_POST['checkResult'])) {
  
    $id = $_POST['id'];
    $status = $_POST['checkResult'];
    $sql = "UPDATE `order_details` SET `approval_status`= " . $status . " WHERE `id` =" . $id;
    if (mysqli_query($con, $sql)) {
        echo '2';
    } else {
       echo "0";
    }
}
?>