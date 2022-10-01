<?php
include "layout/header.php";
include '../config/config.php';
 
$productList = mysqli_query($con, "select*from products");

?>
<h1>Products</h1>
<a href="add_product.php"><button style="float:right;height:30px;width:150px;">Add Product</button></a>
<br>
<br>
<div class="container">

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>MRP</th>
                <th>Special Price</th>
                <th>Total Quantity</th>
                <th>Current Quantity</th>              
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($productList) > 0) {
                $n = 1;
                while ($row = mysqli_fetch_array($productList)) {
                    ?> <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($row['date'])); ?></td>
                        <td><?php echo $row['mrp']; ?></td>

                        <td><?php echo $row['sprice']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                                             

                        <td> <a href="viewProduct.php?product_id=<?php echo $row['id']; ?>" class="btn btn-primary">view<i class="glyphicon glyphicon-edit"></i></a></td>
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