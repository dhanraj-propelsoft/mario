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
 <!-- <button type="button"  onclick="location.href='index.php'" class="cancelBtn" >Back</button>&nbsp;&nbsp; -->
    <div class="item-container">
   
        <div class="sub-container-A">
        <div class="back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
        </div>
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
                <p class="mrp">MRP : ₹ <s><?php echo $row['mrp'];?></s></p>
                <p class="sp">Special Price : ₹ <?php echo $row['sprice'];?></p>
            </div>
            <div class="price-container">
                <p class="desc">Description :</p>
                <p class="qty">Available Quantity :<?php echo $row['quantity'];?></p>
            </div>
            <p>
            <?php echo $row['description'];?>

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