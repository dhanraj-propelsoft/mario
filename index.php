<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
<?php
include 'layout/header.php';
include 'config/config.php';

?>

<style>
@keyframes slider {
    0% {
        left: 0;
    }

    9% {
        left: 0;
    }

    18% {
        left: -100vw;
    }

    27% {
        left: -100vw;
    }

    36% {
        left: -200vw;
    }

    45% {
        left: -200vw;
    }

    54% {
        left: -300vw;
    }

    63% {
        left: -300vw;
    }

    72% {
        left: -400vw
    }

    81% {
        left: -400vw;
    }

    90% {
        left: -500vw;
    }

    99% {
        left: -500vw;
    }

    /* 100%{left:-600vw;} */

}

.slider {
    width: 600vw;
    height: 100%;

    position: relative;
    animation: slider 20s infinite;

}

.slide-img-container {
    width: 100vw;
    height: 100%;
    position: reltive;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    float: left;
}

.slide-img-container img {
    width: 100%;
    min-height: 100%;
    height: auto;
    object-position: center;
    /* animation:slider 10s infinite; */

}
</style>
<section id="home" class="section-container">
    <div class="slider">
        <div class="slide-img-container">
            <img src="https://car-o-liner.com/wp-content/uploads/2019/10/FullBannerWelders_02.jpg" alt="">
        </div>
        <div class="slide-img-container">
            <img src="https://car-o-liner.com/wp-content/uploads/2021/03/xBanner-CDR1_VAS.png.pagespeed.ic.kAFib00wf2.webp"
                alt="">
        </div>
        <div class="slide-img-container">
            <img src="assets/img/spare-parts.jpg" alt="">
        </div>
        <div class="slide-img-container">
            <img src="https://car-o-liner.com/wp-content/uploads/2021/03/xBanner-CDR1_VAS.png.pagespeed.ic.kAFib00wf2.webp"
                alt="">
        </div>
        <div class="slide-img-container">
            <img src="slideImage/img1.jpg" alt="">
        </div>
        <div class="slide-img-container">
            <img src="https://car-o-liner.com/wp-content/uploads/2019/10/FullBannerWelders_02.jpg" alt="">
        </div>
    </div>
</section>

<section id="product" style="background:white;" class="section-container">
    <div class="product-brand-container">
        <div class="brand-info">
            <h1>Our Products</h1>
            Select a Brand to Explore our Products
        </div>
        <div class="brand-slider">
            <div class="carousel-wrap">
                <div class="owl-carousel">
                    <div class="item"><img
                            src="https://www.snapon.com/Snap-on-Files/photos/00_home/our-brands-carousel/bluepoint.png"
                            alt="" class="car-o"
                            frame-src="https://www.snapon-bluepoint.com.sg/Category/Tool-Tray-Sets">
                    </div>
                    <div class="item"><img
                            src="https://www.snapon.com/Snap-on-Files/photos/00_home/our-brands-carousel/ecotechnics.png"
                            alt="" class="car-o" frame-src="https://www.ecotechnics.com/world/"></div>
                    <div class="item"><img
                            src="https://www.snapon.com/Snap-on-Files/photos/00_home/our-brands-carousel/caroliner.png"
                            alt="" class="car-o" frame-src="https://car-o-liner.com/products/">
                    </div>
                    <div class="item"><img
                            src="https://www.schumakindia.in/wp-content/uploads/2019/09/SCHUMAK-Logo2.png" alt=""
                            class="car-o" frame-src="https://www.schumakindia.in/">
                    </div>
                    <div class="item"><img
                            src="assets/img/yato.png" alt=""
                            class="car-o" frame-src="https://yato.com/?lang=en">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .product-brand-container {
        display: flex;
        justify-content: space-evenly;
        padding: 100px 10px;
        font-size: 25px;
        text-align: center;
        /* flex-wrap:wrap; */
    }

    @media screen and (max-width: 1000px) {
        .product-brand-container {
            display: unset;
        }

        .brand-slider {
            width: 100vw !important;
        }
    }

    .brand-info {
        width: 250px;
        margin: auto;
        /* background:red; */
    }

    .brand-slider {
        width: calc(100% - 400px);

    }

    .carousel-wrap {
        margin: auto;
        padding: 40px 5%;
        width: 80%;
        position: relative;
    }

    /* fix blank or flashing items on carousel */
    .owl-carousel .item {
        position: relative;
        z-index: 100;
        -webkit-backface-visibility: hidden;
    }

    /* end fix */
    .owl-nav>div {
        margin-top: -16px;
        position: absolute;
        top: 50%;
        color: #cdcbcd;
    }

    .owl-nav i {
        font-size: 52px;
    }

    .owl-nav .owl-prev {
        left: -35px;

    }

    .owl-nav .owl-next {
        right: -35px;

    }

    .owl-next svg {
        rotate: 180deg;
    }

    .owl-nav svg {
        width: 20px;
        fill: red;

    }
    </style>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            "<svg  viewBox='0 0 93 151' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M89.5475 16.0243C90.5034 15.1527 91.2617 14.1179 91.779 12.979C92.2963 11.8402 92.5626 10.6195 92.5626 9.38684C92.5626 8.15414 92.2963 6.93351 91.779 5.79465C91.2617 4.65578 90.5034 3.62099 89.5475 2.74934C88.5916 1.87769 87.4568 1.18626 86.2078 0.714527C84.9589 0.242794 83.6202 -9.18432e-09 82.2684 0C80.9165 9.18431e-09 79.5779 0.242794 78.3289 0.714527C77.08 1.18626 75.9452 1.87769 74.9893 2.74934L3.0205 68.3743C2.06305 69.2452 1.30341 70.2797 0.785103 71.4187C0.266795 72.5577 0 73.7787 0 75.0118C0 76.245 0.266795 77.466 0.785103 78.605C1.30341 79.7439 2.06305 80.7785 3.0205 81.6493L74.9893 147.274C76.9198 149.035 79.5382 150.024 82.2684 150.024C84.9986 150.024 87.617 149.035 89.5475 147.274C91.478 145.514 92.5626 143.126 92.5626 140.637C92.5626 138.147 91.478 135.76 89.5475 133.999L24.8373 75.0118L89.5475 16.0243Z' /></svg>",
            "<svg  viewBox='0 0 93 151' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M89.5475 16.0243C90.5034 15.1527 91.2617 14.1179 91.779 12.979C92.2963 11.8402 92.5626 10.6195 92.5626 9.38684C92.5626 8.15414 92.2963 6.93351 91.779 5.79465C91.2617 4.65578 90.5034 3.62099 89.5475 2.74934C88.5916 1.87769 87.4568 1.18626 86.2078 0.714527C84.9589 0.242794 83.6202 -9.18432e-09 82.2684 0C80.9165 9.18431e-09 79.5779 0.242794 78.3289 0.714527C77.08 1.18626 75.9452 1.87769 74.9893 2.74934L3.0205 68.3743C2.06305 69.2452 1.30341 70.2797 0.785103 71.4187C0.266795 72.5577 0 73.7787 0 75.0118C0 76.245 0.266795 77.466 0.785103 78.605C1.30341 79.7439 2.06305 80.7785 3.0205 81.6493L74.9893 147.274C76.9198 149.035 79.5382 150.024 82.2684 150.024C84.9986 150.024 87.617 149.035 89.5475 147.274C91.478 145.514 92.5626 143.126 92.5626 140.637C92.5626 138.147 91.478 135.76 89.5475 133.999L24.8373 75.0118L89.5475 16.0243Z' /></svg>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</section>

<section id="todaydeal" class="section-container">
    <h1>
        Today Deal's
    </h1>
    <?php $productList = mysqli_query($con, "select*from products WHERE active_status='1' LIMIT 1"); ?>
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
                    <div class="product-bit-images"><iframe width="560" height="315"
                            src="<?php echo $row['youtube_link']; ?>" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
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

<section id="services" class="we-offer-area text-center section-container">
    <h1>Our Services</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading text-center">
                    <h2>What we <span>Offer</span></h2>
                    <h4>Lorem Ipsum is simply dummy text</h4>
                </div>
            </div>
        </div>
        <div class="row our-offer-items less-carousel">
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-pen-fancy"></i>
                    <h4>Project creation</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-dharmachakra"></i>
                    <h4>Software Development</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-tasks"></i>
                    <h4>Porject Management</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-tachometer-alt"></i>
                    <h4>Porject Impliment</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-recycle"></i>
                    <h4>Software Update</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 Support</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</section>

<section id="aboutus" class="section-container">
    <h1>About us</h1>
    <div class="about-overlay">
        <p> We, <b>MARIO PRECISION AUTOMOTIVE</b> - Established in the year 2016, based in Trichy, Tamil Nadu under the
            guidelines of vast experienced Automotive Garage M/s Trichy Car Care an established professional Automotive
            workshop from the year of 2000. </p><br>
        <p>
        <h2>Authorised Distributor/Dealer for World Class Brand of Snap-On for their Automobile Garage Tools &
            Equipments in brands.</h2>

        </p><br>
        <ol>


            <li>Bluepoint (Hand Tools, Pneumatic Tools, Shop Equipments, Torque Tools, Tools Storage, Body Shop Tools ….
                Etc )</li>
            <br>

            <li> ECOTECHNICS (AC Recovery Machines), </li><br>

            <li> CAR-O-LINER (Body Shop / Crash Equipments) which comes under the umbrella of Snap-On </li><br>
        </ol>
        <h2>We also represent for the below brands </h2><br>
        <ol>
            <li> SCHUMAK (Car Wash Equipments), </li>
            <br>
            <li>YATO (Carriage special tools)</li>
        </ol> <br>
        <h2>Our Strength in this Business…</h2><br>
        <ol>
            <li> Supply of Quality Tools & Equipments to our Customer.</li><br>
            <li>We are strong on After Sales Support</li><br>
            <li>Technical Support & Proper Training Support for our Supplied Tools & Equipments.</li><br>
            <li>Service @ your door step.</li><br>
            <li>Application Based recommendation for the required Tools & Equipments to our customers. Which will help
                to buy proper tools to ensure correct tools been used in the workshops.
                Complete range of Tools & Equipments can be supplied with Top Class Genuine Products with coordination
                of Brand Manufacturing Team.</li><br>

        </ol>


        <p>
            With all of the above our biggest strength is our Parental company M/s Trichy Car Care, where we have rich
            exposure of 25 Years and above on Automobile Workshop by which we had thousands of our satisfied customers
            in Tamilnadu

            We also undertake New Workshop Startup Project for Others where we do from Design Creation (from the Layout
            Design to creating 3D Video visualization of Workshop design) & supplies of complete Workshop Tools &
            Equipments through our Trichy Car Care with our past 25 Years Plus of vast experience. We had done many
            projects to many OEM Workshops, Bosch Workshops & many independent workshops. Also we had done the same with
            few of Tire Shops too.

            We are Proud to be a Satisfied Supplier to many Customers, which will prove with our long list of accredited
            Customers base list , which include many OEM Workshops, BOSCH Workshops, Independent / Multi-Brand
            Workshops, Our Own Created workshop for Others Business .

            It all happened with the support of our Customers & our highly committed, experienced and knowledgeable
            Sales / Service Engineers located in all important districts of Tamil Nadu.

            We assure to ensure for providing our best service towards all your satisfaction on coming days too.
        </p>
    </div>
</section>

<section id="contactus" class="section-container">

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.5404317981213!2d78.70377398000142!3d10.784173788097117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed48e2cc104d0fc6!2sMario%20Precision%20Automotive!5e1!3m2!1sen!2sin!4v1666002640492!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-form">

        <div class="formbg-outer">
            <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                    <h1 style="color:white;">Contact</h1>
                    <form id="stripe-login">
                        <div class="field padding-bottom--24">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name...">
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email...">
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="Message">Message</label>
                            <textarea name="Message" placeholder="Enter Your Message..." cols="30" rows="5"></textarea>

                        </div>
                        <div class="field padding-bottom--24 ">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                </div>
            </div>
        </div>

        <style>
        .contact-form {
            background: url('assets/img/none.webp');
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-root {
            background: #fff;
            display: flex;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
        }

        .loginbackground {
            min-height: 692px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 0;
            overflow: hidden;
        }

        .flex-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .center-center {
            align-items: center;
            justify-content: center;
        }

        .box-root {
            box-sizing: border-box;
        }

        .flex-direction--column {
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .loginbackground-gridContainer {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
            grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
            -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
            grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
            justify-content: center;
            margin: 0 -2%;
            transform: rotate(-12deg) skew(-12deg);
        }

        .box-divider--light-all-2 {
            box-shadow: inset 0 0 0 2px #e3e8ee;
        }

        .box-background--blue {
            background-color: #5469d4;
        }

        .box-background--white {
            background-color: #ffffff;
        }

        .box-background--blue800 {
            background-color: #212d63;
        }

        .box-background--gray100 {
            background-color: #e3e8ee;
        }

        .box-background--cyan200 {
            background-color: #7fd3ed;
        }

        .padding-top--64 {
            padding-top: 64px;
        }

        .padding-top--24 {
            padding-top: 24px;
        }

        .padding-top--48 {
            padding-top: 48px;
        }

        .padding-bottom--24 {
            padding-bottom: 24px;
        }

        .padding-horizontal--48 {
            padding: 48px;
        }

        .padding-bottom--15 {
            padding-bottom: 15px;
        }


        .flex-justifyContent--center {
            -ms-flex-pack: center;
            justify-content: center;
        }

        .formbg-outer {
            /* display:flex; */
            /* align-items:center; */
            /* justify-content:center; */
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
        }

        .formbg {

            margin: 10px auto;
            width: 100%;
            max-width: 448px;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            /* border-radius: 10px;
            box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px; */
        }

        label {
            margin-bottom: 10px;
        }

        .reset-pass a,
        label {
            font-size: 14px;
            font-weight: 600;
            display: block;
        }

        .reset-pass>a {
            text-align: right;
            margin-bottom: 10px;
        }

        .grid--50-50 {
            display: grid;
            grid-template-columns: 50% 50%;
            align-items: center;
        }

        .field input,
        .field textarea {
            transition: 0.2s;
            font-size: 16px;
            line-height: 28px;
            padding: 8px 16px;
            width: 100%;
            min-height: 44px;
            border: unset;
            border-radius: 4px;
            outline-color: rgb(84 105 212 / 0.5);
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        }

        input[type="submit"] {
            background-color: rgb(248, 42, 42);
            box-shadow: 0 0 20px rgba(255, 0, 43, 0.6);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        .field-checkbox input {
            width: 20px;
            height: 15px;
            margin-right: 5px;
            box-shadow: unset;
            min-height: unset;
        }

        .field-checkbox label {
            display: flex;
            align-items: center;
            margin: 0;
        }

        input:focus,
        textarea:focus {
            outline: none;

        }

        .web-frame {
            width: 100%;
            height: 80vh;


        }
        </style>
    </div>
</section>
<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <label class="close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
</svg></label>

        <iframe src="" frameborder="0" class="web-frame">
        </iframe>
    </div>

</div>
<!-- <div class="iframe-container">
    <iframe src="www.google.com" frameborder="0"></iframe>
</div> -->
<div class="lds-hourglass"></div>
<script>
var a = $("iframe");
for (let i = 0; i < a.length; i++) {
    var aSplit = a[i].getAttribute("src").split("/");
    if (aSplit[2] == "youtu.be") {
        var aSplitl = aSplit.length - 1;
        a[i].setAttribute("src", "https://www.youtube.com/embed/" + aSplit[aSplitl]);
    }
}

var hash = location.hash.substr(1);
if (hash == '') {
    $("a[href='#home']").addClass('menu-active');
} else {
    $("a[href='#" + hash + "']").addClass('menu-active');

}

$(".for-active a").click(function() {
    $('.menu-active').removeClass('menu-active');
    $(this).addClass('menu-active');

});
var DeviceHeight = window.innerHeight;

window.addEventListener("scroll", (event) => {
    var section = $('.section-container');

    for (let i = 0; i < section.length; i++) {
        var top = section[i].getBoundingClientRect().top;
        var bottom = section[i].getBoundingClientRect().bottom;
        if (top < DeviceHeight / 2 && bottom > DeviceHeight / 2) {
            
            var activeAttr = section[i].getAttribute('id');
    
            $(".menu-active").removeClass('menu-active');
            $("a[href='/#" + activeAttr + "']").addClass('menu-active');


            break;
        }

    }

});
</script>
<script>
$(".car-o").click(function() {
    event.stopPropagation();
    $('#myModal').css('display', 'block');
    $('.modal-content').addClass('spinnerframe');
    var src = $(this).attr('frame-src');

    $(".web-frame").attr('src', src);


});

$(".web-frame").load(function(){
    $(".lds-ring").hide();
});

$('#myModal').click(function() {
    event.stopPropagation();
});
$("body").click(function() {
    $('#myModal').css('display', 'none');
    $(".web-frame").removeAttr('src');
});
$(".close").click(function() {
   
    $('#myModal').css('display', 'none');
    $(".web-frame").removeAttr('src');
});
</script>
<?php include 'layout/footer.php'; ?>