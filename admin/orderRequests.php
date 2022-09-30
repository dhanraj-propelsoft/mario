<?php
include "layout/header.php";
include '../config/config.php';
$orderList = mysqli_query($con, "select order_details.*, products.name as productName,order_details.date,cities.name as cityName from order_details LEFT JOIN cities
ON cities.id = order_details.dist_id LEFT JOIN products
ON products.id = order_details.product_id;");
?>

<center>
    <h1>Customer Request</h1>
</center>
<br>
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

<?php
include "layout/footer.php";
?>