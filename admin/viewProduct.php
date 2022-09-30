<style>

.cancelBtn {
        background-color: orange;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
         margin-right: 5px;
    }

</style>
<?php
include "layout/header.php";
include '../config/config.php';
$id = $_GET['product_id'];
$productList = mysqli_query($con, "select*from products  where id='$id'");



//echo $id;
while ($row = mysqli_fetch_array($productList)) {
    $path = "../uploads/";
    ?>
 <button type="button"  onclick="location.href='index.php'" class="cancelBtn" >Back</button>&nbsp;&nbsp;
    <div class="item-container">
   
        <div class="sub-container-A">

            <p class="product-title"><?php echo $row['name'];?>
            </p>
            <div class="product-image-container">
                <div class="product-full-image">
                    <img src="<?php echo $path.$row['image_1']; ?>" alt="">
                </div>
                <div class="product-bit-image-container">
                    <div class="product-bit-images"><img src="<?php echo $path.$row['image_2']; ?>" alt=""></div>
                    <div class="product-bit-images"><img src="<?php echo $path.$row['image_3']; ?>" alt=""></div>
                    <div class="product-bit-images"><iframe width="560" height="315" src="<?php echo $row['youtube_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="myVideoOverlay"></div>
                    </div>
                </div>
            </div>
            <div class="price-container">
                <p class="mrp">MRP : ₹ <s>9660</s></p>
                <p class="sp">Special Price : ₹ 3660</p>
            </div>
            <div class="price-container">
                <p class="desc">Description :</p>
                <p class="qty">Available Quantity : 5</p>
            </div>
            <p>
                Polishing pad can be used in pneumatic or electric polishing machine, which for car detail polishing.
                Adhesive backing, you can change pads just in seconds. The back of the disk has Velcro, so you can easily
                change the sponge or woolen buffer pad.

            </p>
            <a href="edit_product.php?id=<?php echo $id;?>"><button class="btn-bn">Edit</button></a>
            
        </div>
    </div>
<?php } ?>
<script>
    var a=$("iframe").attr("src");
    var  aSplit=a.split("/");
    if(aSplit[2] == "youtu.be"){
    var aSplitl=aSplit.length - 1;
      $("iframe").attr("src","https://www.youtube.com/embed/" + aSplit[aSplitl]);
      }
</script>
<?php include 'layout/footer.php'; ?>