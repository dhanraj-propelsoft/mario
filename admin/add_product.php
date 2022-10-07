<?php
$page = "product";
include "layout/header.php";
include '../config/config.php'; ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" />
<style>
    /* * {
        box-sizing: border-box;
    } */

    input[type=text],
    input[type=date],
    input[type=number],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 50%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* image upload start*/

    .profilepic {
        position: relative;
        width: 250px;
        height: 250px;
        
        overflow: hidden;
        background-color: #111;
    }

    .profilepic:hover .profilepic__content {
        opacity: 1;
    }

    .profilepic:hover .profilepic__image {
        opacity: .5;
    }

    .profilepic__image {

        background-position: center;
        background-size: cover;
        object-fit: none;
        opacity: 1;
        transition: opacity .2s ease-in-out;
    }

    .profilepic__content {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }

    .profilepic__icon {
        color: white;
        padding-bottom: 8px;
    }

    .fas {
        font-size: 20px;
    }

    .profilepic__text {
        text-transform: uppercase;
        font-size: 12px;
        width: 50%;
        text-align: center;
    }

    .btn-rmv1 {
        height: 40px;
        width: 250px;
       
    }

    /* image upload end*/

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    input[type="file"] {
        display: block;
    }

    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }

    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }

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
<div class="container">
    <form enctype="multipart/form-data" action="storeProduct.php" method="post" id="order_form">
        <div class="row">
            <div class="col-25">
                <label for="date">Date</label>
            </div>
            <div class="col-75">
                <input type="date" id="date" name="date" required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="productName">Product Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="productName" name="productName" placeholder="Product Name.." required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mrp">MRP</label>
            </div>
            <div class="col-75">
                <input type="number" id="mrp" name="mrp" placeholder="MRP.." required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="sprice">Special Price</label>
            </div>
            <div class="col-75">
                <input type="number" id="sprice" name="sprice" placeholder="Special Price.." required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="quantity">Quantity</label>
            </div>
            <div class="col-75">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity.." required="required">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="youtubeLink">Youtube Link</label>
            </div>
            <div class="col-75">
                <input type="text" id="youtubeLink" name="youtubeLink" placeholder="youtubeLink..">
            </div>
        </div>
        <p id="filep"></p>


        <div class="row">
            <div class="col-25">
                <label for="files">Image</label>
            </div>

            <div class="col-25">
                <div class="profilepic">
                    <label for="imgInp1">
                        <input accept="image/*" type='file' id="imgInp1" name="files[]" style="display:none" />
                        <img id="blah1" class="profilepic__image w-100 h-100 " src="" alt="your image" />
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <span class="profilepic__text">Add Image</span>
                        </div>
                    </label>

                </div>
                <input type="button" id="removeImage1" value="Remove Image" class="btn-rmv1" />

            </div>
            <div class="col-25">
                <div class="profilepic">
                    <label for="imgInp2">
                        <input accept="image/*" type='file' id="imgInp2" name="files[]" style="display:none" />
                        <img id="blah2" class="profilepic__image " src="" alt="your image" />
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <span class="profilepic__text">Add Image</span>

                        </div>
                    </label>
                </div>
                <input type="button" id="removeImage2" value="Remove Image" class="btn-rmv1" />
            </div>

            <div class="col-25">
                <div class="profilepic">
                    <label for="imgInp3">
                        <input accept="image/*" type='file' id="imgInp3" name="files[]" style="display:none"/>
                        <img id="blah3" class="profilepic__image " src="" alt="your image" />
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <span class="profilepic__text">Add Image</span>
                        </div>
                    </label>
                </div>
                <input type="button" id="removeImage3" value="Remove Image" class="btn-rmv1" />
            </div>

        </div>
</div>

<br>
<div class="col-md-3 col-sm-3 col-xs-3">

    <div class="row">
        <input type="submit" value="Submit">
        <button type="button" onclick="location.href='index.php'" class="cancelBtn">Cancel</button>&nbsp;&nbsp;
    </div>
    </form>
</div>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#removeImage1").click(function(e) {
        e.preventDefault();
        $("#imgInp1").val("");
        $("#blah1").attr("src", "");
    });
    $("#removeImage2").click(function(e) {
        e.preventDefault();
        $("#imgInp2").val("");
        $("#blah2").attr("src", "");
    });
    $("#removeImage3").click(function(e) {
        e.preventDefault();
        $("#imgInp3").val("");
        $("#blah3").attr("src", "");
    });
</script>
<script>
    imgInp1.onchange = evt => {
        const [file] = imgInp1.files
        if (file) {
            blah1.src = URL.createObjectURL(file)
        }
    }
    imgInp2.onchange = evt => {
        const [file] = imgInp2.files
        if (file) {
            blah2.src = URL.createObjectURL(file)
        }
    }
    imgInp3.onchange = evt => {
        const [file] = imgInp3.files
        if (file) {
            blah3.src = URL.createObjectURL(file)
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#order_form").validate({
            rules: {
                productName: {
                    required: true,
                    minlength: 3
                },
                mrp: {
                    required: true,
                    minlength: 2
                },
                sprice: {
                    required: true,
                    minlength: 2
                },
                quantity: {
                    required: true,
                    minlength: 1
                },


            }
        });

        if (window.File && window.FileList && window.FileReader) {

            $("#files").on("change", function(e) {

                var files = e.target.files,
                    filesLength = files.length;

                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove image</span>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".pip").remove();
                        });

                        // Old code here
                        /*$("<img></img>", {
                          class: "imageThumb",
                          src: e.target.result,
                          title: file.name + " | Click to remove"
                        }).insertAfter("#files").click(function(){$(this).remove();});*/

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>
<?php
include "layout/footer.php";
?>