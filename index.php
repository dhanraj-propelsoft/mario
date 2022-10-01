<?php
include 'layout/header.php';
include 'config/config.php';
$productList = mysqli_query($con, "select*from products WHERE active_status='1' LIMIT 1");
?>
<link rel="stylesheet" href="assets/css/splashScreen.css">


<h1>Today's Deal</h1>
<div class="item-container">
    <?php
    while ($row = mysqli_fetch_array($productList)) {

        $path = "uploads/";
        ?>
        <div class="sub-container-A">

            <p class="product-title"><?php echo $row['name']; ?>
            </p>
            <div class="product-image-container">
                <div class="product-full-image">
                    <img src="<?php echo $path . $row['image_1']; ?>" alt="">
                </div>
                <div class="product-bit-image-container">
                    <div class="product-bit-images"><img src="<?php echo $path . $row['image_2']; ?>" alt=""></div>
                    <div class="product-bit-images"><img src="<?php echo $path . $row['image_3']; ?>" alt=""></div>
                    <div class="product-bit-images"><iframe width="560" height="315" src="<?php echo $row['youtube_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="myVideoOverlay"></div>
                    </div>
                </div>
            </div>
            <div class="price-container">
                <p class="mrp">MRP : ₹ <s><?php echo $row['mrp']; ?></s></p>
                <p class="sp">Special Price : ₹ <?php echo $row['sprice']; ?></p>
            </div>
            <div class="price-container">
                <p class="desc">Description :</p>
                <p class="qty">Available Quantity : <?php echo $row['quantity']; ?></p>
            </div>
            <p>
                <?php echo $row['description']; ?>

            </p>
            <a href="order.php?productId=<?php echo $row['id'];?>"><button class="btn-bn">Book Now</button></a>
           
        </div>
    <?php } ?>
</div>



</section>
<div class="splash-screen">
    <div class="splash-content">
        <p class="splash-deal">Today's Deal <br> From</p>
        <h1 class="brand-name"><span>M</span>ario <span>P</span>recision <span>A</span>utomotive</h1>
        <p>Powered by propel soft</p>
    </div>

</div>
<script>
    var a = $("iframe");
  for (let i = 0; i< a.length; i++) {
    var aSplit = a[i].getAttribute("src").split("/");
    if (aSplit[2] == "youtu.be") {
        var aSplitl = aSplit.length - 1;
        a[i].setAttribute("src", "https://www.youtube.com/embed/" + aSplit[aSplitl]);
    }
  }
</script>
<?php include 'layout/footer.php'; ?>
<!-- MRP : 9900 Special Price : 4999
Available Qty : 5Description
Polishing pad can be used in pneumatic or electric polishing 
machine, which for car detail polishing. Adhesive backing, 
you can change pads just in seconds. The back of the disk 
has Velcro, so you can easily change the sponge or woolen -->