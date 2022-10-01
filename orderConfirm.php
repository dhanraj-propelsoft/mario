<?php
include 'config/config.php';
$productId = $_POST['productId'];
$companyName = $_POST['companyName'];
$gst = $_POST['gst'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$town = $_POST['town'];
$address = $_POST['address'];
$quantity = $_POST['quantity'];
$date = date("Y-m-d");
$insert_order = "INSERT INTO order_details(
    product_id,
    company_name,
    gst,
    mobile,
    dist_id,
    town,
    address,
    quantity,
    date
)
VALUES('$productId',
    '$companyName',
    '$gst',
    '$mobile',
    '$city',
    '$town',
    '$address',
    '$quantity','$date')";

$run_order = mysqli_query($con, $insert_order);
if ($run_order) {
    echo "<script>alert('Order Request has been Completed successfully')</script>";
    echo "<script>window.open('bankDetails.php', '_self')</script>";
} else {
    echo mysqli_error($con);
}
