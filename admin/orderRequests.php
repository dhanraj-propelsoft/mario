<?php
$page="cr";  
include "layout/header.php";
include '../config/config.php';
$orderList = mysqli_query($con, "select order_details.*, products.name as productName,order_details.date,cities.name as cityName from order_details LEFT JOIN cities
ON cities.id = order_details.dist_id LEFT JOIN products
ON products.id = order_details.product_id ORDER BY id DESC ;");
?>

<center>
    <h1>Customer Request</h1>
</center>
<br>
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 45px;
        height: 20px;
        vertical-align: middle;
        margin-top: 8px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #A1A6AB;
        -webkit-transition: .4s;
        transition: .4s;

    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 14px;
        left: 2px;
        bottom: 2px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #800080;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<div class="container">

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Company Name</th>
                <th>Date</th>
                <th>Gst</th>
                <th>Mobile</th>
                <th>Quantity</th>
                <th>Town</th>
                <th>District</th>
                <th>Address</th>

                <th>Order Confirm</th>
                <th>Payment Confirm</th>
                <th>Delivery Status </th>

            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($orderList) > 0) {
                $n = 1;
                while ($row = mysqli_fetch_array($orderList)) {
                    ?> <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $row['productName']; ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($row['date'])); ?></td>
                        <td><?php echo $row['gst']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['town']; ?></td>
                        <td><?php echo $row['cityName']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td> <label class="switch">
                                <input type="checkbox" class="orderConfirmSwitch" <?php echo ($row['approval_status']) ? "disabled" : ""; ?> <?php echo ($row['approval_status']) ? "checked" : ""; ?> data-id="<?php echo $row['id']; ?>">
                                <span class="slider round"></span>
                            </label></td>
                        <td> <label class="switch">
                                <input type="checkbox" class="paymentConfirmSwitch" <?php echo ($row['transaction_status']) ? "disabled" : ""; ?> <?php echo ($row['transaction_status']) ? "checked" : ""; ?> data-id="<?php echo $row['id']; ?>">
                                <span class="slider round"></span>
                            </label></td>
                        <td> <label class="switch">
                                <input type="checkbox" class="deliveryConfirmSwitch" <?php echo ($row['delivery_status']) ? "checked" : ""; ?> data-id="<?php echo $row['id']; ?>">
                                <span class="slider round"></span>
                            </label></td>
                    </tr><?php
                                    $n++;
                                }
                            }

                            ?>
        </tbody>
    </table>
</div>
<style>
    body {
        width: 100vw;
        overflow-x: hidden;
    }

    * {
        margin: 0;

    }

    .container {
        width: 98%;
        margin: auto;
        overflow-x: auto !important;
    }

    table {
        min-width: 100%;
        max-width: 100%;

        border-collapse: collapse;
    }

    tr:nth-of-type(odd) {
        background: #eee;
    }

    th {
        background: #3498db;
        color: white;
        font-weight: bold;
    }

    td,
    th {
        padding: 10px;
        /* border: 1px solid #ccc;  */
        text-align: left;
        font-size: 18px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript">
    $('.orderConfirmSwitch').on('change', function() {
        if (ConfirmDelete()) {

            var id = $(this).attr('data-id');
            var isChecked = $(this).is(":checked");
            var checkResult = ($(this).is(":checked")) ? 1 : 0;

            $.ajax({
                type: "POST",
                url: "changeProductStatus.php",
                data: {
                    id: id,
                    approveStatus: checkResult
                },
                success: function(res) {
                    console.log(res);
                    //window.location.reload(true);
                    if (res == "OutOfStock") {
                        alert("out of stock");
                        window.location.reload(true);
                    }else if(res == "Failed"){
                        alert("Something Wrong On");
                        window.location.reload(true);
                    }else{
                        alert("Successfully Confirmed Order");
                        window.location.reload(true);
                    }
                }

            });

        } else {
            console.log("else spot");
            if ($(this).is(':checked'))
                $(this).prop('checked', false);
            else
                $(this).prop('checked', true);
        }

    });

    function ConfirmDelete() {
        return confirm("Are you sure you want to Update?");
    }

    $('.paymentConfirmSwitch').on('change', function() {
        if (ConfirmDelete()) {

            console.log("if spot");

            var id = $(this).attr('data-id');
            var isChecked = $(this).is(":checked");
            var checkResult = ($(this).is(":checked")) ? 1 : 0;

            $.ajax({
                type: "POST",
                url: "changeProductStatus.php",
                data: {
                    id: id,
                    transactionStatus: checkResult
                },
                success: function(res) {
                    window.location.reload(true);

                }
            });


        } else {
            console.log("else spot")
            if ($(this).is(':checked'))
                $(this).prop('checked', false);
            else
                $(this).prop('checked', true);
        }
    });
    $('.deliveryConfirmSwitch').on('change', function() {

        if (ConfirmDelete()) {
            var id = $(this).attr('data-id');
            var isChecked = $(this).is(":checked");
            var checkResult = ($(this).is(":checked")) ? 1 : 0;

            $.ajax({
                type: "POST",
                url: "changeProductStatus.php",
                data: {
                    id: id,
                    deliveryStatus: checkResult
                },
                success: function(res) {
                    window.location.reload(true);

                }
            });
        } else {
            console.log("else spot")
            if ($(this).is(':checked'))
                $(this).prop('checked', false);
            else
                $(this).prop('checked', true);
        }
    });
</script>
<?php

include "layout/footer.php";
?>