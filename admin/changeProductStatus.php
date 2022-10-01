<?php
include '../config/config.php';
if (isset($_POST['id']) && isset($_POST['approveStatus'])) {

    $id = $_POST['id'];
    $status = $_POST['approveStatus'];
    $sql = "UPDATE `order_details` SET `approval_status`= " . $status . " WHERE `id` =" . $id;

    $orderList = mysqli_query($con, "select*from order_details  where id='$id'");
    $orderData = $orderList->fetch_array(MYSQLI_ASSOC);
    $productId =  $orderData['product_id'];
    $quantity =  $orderData['quantity'];

    $productData = mysqli_query($con, "select*from products  where id='$productId'");
    $orderData = $productData->fetch_array(MYSQLI_ASSOC);
    $productQuantity = $orderData['quantity'];

    if ($quantity <= $productQuantity) {
        $newQuantity = $productQuantity - $quantity;
        $updateProduct = "UPDATE `products` SET `quantity`= " . $newQuantity . " WHERE `id` =" . $productId;
        if (mysqli_query($con, $sql) && mysqli_query($con, $updateProduct)) {
            echo 'success';
        } else {
            echo "Failed";
        }
    } else {
        echo "OutOfStock";
    }
}
if (isset($_POST['id']) && isset($_POST['transactionStatus'])) {

    $id = $_POST['id'];
    $status = $_POST['transactionStatus'];
    $sql = "UPDATE `order_details` SET `transaction_status`= " . $status . " WHERE `id` =" . $id;
    if (mysqli_query($con, $sql)) {
        echo '2';
    } else {
        echo "0";
    }
}
if (isset($_POST['id']) && isset($_POST['deliveryStatus'])) {

    $id = $_POST['id'];
    $status = $_POST['deliveryStatus'];
    $sql = "UPDATE `order_details` SET `delivery_status`= " . $status . " WHERE `id` =" . $id;
    if (mysqli_query($con, $sql)) {
        echo '1';
    } else {
        echo "0";
    }
}
if (isset($_POST['id']) && isset($_POST['activeStatus'])) {
    $updateQuery1 = $con->query("UPDATE products set active_status=0");
    $id = $_POST['id'];
    $status = $_POST['activeStatus'];
    $sql = "UPDATE `products` SET `active_status`= " . $status . " WHERE `id` =" . $id;
    if (mysqli_query($con, $sql)) {
        echo '1';
    } else {
        echo "0";
    }
}
