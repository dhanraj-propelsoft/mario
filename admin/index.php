<?php
include "layout/header.php";
include '../config/config.php';

$productList = mysqli_query($con, "select*from products");

?>
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
<h1>Products</h1>

<div class="container">
<a href="add_product.php"><button style="float:right;height:30px;width:150px;margin:40px 40px 5px 0;">Add Product</button></a>
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
                <th>Show</th>
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
                        <td> <label class="switch">
                                <input type="checkbox" class="activeProductSwitch" <?php echo ($row['active_status']) ? "checked" : ""; ?> <?php echo ($row['active_status']) ? "disabled" : ""; ?> data-id="<?php echo $row['id']; ?>">
                                <span class="slider round"></span>
                            </label></td>

                        <td> <a href="viewProduct.php?product_id=<?php echo $row['id']; ?>" class="button">view<i class="glyphicon glyphicon-edit"></i></a></td>
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
        margin:0 auto;
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
<script type="text/javascript">
    $('.activeProductSwitch').on('change', function() {
        var returnVal = confirm("Are you Sure Show Website?");
        var id = $(this).attr('data-id');
        var isChecked = $(this).is(":checked");
        var checkResult = ($(this).is(":checked")) ? 1 : 0;
        if($(this).is(":checked")){
            $(this).attr("disabled",true);
        }
       
        $.ajax({
            type: "POST",
            url: "changeProductStatus.php",
            data: {
                id: id,
                activeStatus: checkResult
            },
            success: function(res) {
                location.reload();
            }
        });


    });
</script>
<?php
include "layout/footer.php";
?>