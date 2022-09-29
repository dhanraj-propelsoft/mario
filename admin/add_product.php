<?php 
include "layout/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" />
    <style>
    .profilepic {
        position: relative;
        width: 260px;
        height: 260px;
        border-radius: 2%;
        overflow: hidden;
        background-color: #111;
        margin: 20px 0 0 500px;
    }

    .profilepic:hover .profilepic__content {
        opacity: 1;
    }

    .profilepic:hover .profilepic__image {
        opacity: .5;
    }

    .profilepic__image {
        object-fit: cover;
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
    </style>
</head>

<body>

    <div>

        <div class="profilepic">
            <label for="image"><i class="bi bi-upload"></i>
                <input type="file" id="image" onchange="readURL(this);" style="display:none;" />
                <img id="blah" src="upload\3003-2019-073824028772008687703-01.jpeg.jpg" alt="your image" />
                <div class="profilepic__content">
                    <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                    <span class="profilepic__text">Edit Profile</span>
            </label>
        </div>
    </div>


    <div class="profilepic">
        <label for="image"><i class="bi bi-upload"></i>
            <input type="file" id="image" onchange="readURL(this);" style="display:none;" />
            <img id="blah2" src="upload\3003-2019-073824028772008687703-01.jpeg.jpg" alt="your image" />
            <div class="profilepic__content">
                <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                <span class="profilepic__text">Edit Profile</span>
        </label>
    </div>
    </div>

<div>
<form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>

    </div>

</body>

</html>
<?php 
include "layout/footer.php";
?>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>