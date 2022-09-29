<?php
include 'layout/header.php';
include 'config/config.php';
?>
<div class="main-container">
  <div class="sub-container-A">
    <div class="back">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
      </svg>
    </div>
    <form action="orderConfirm.php" method="post">
      <fieldset>
        <input placeholder="Company Name..." type="text" tabindex="1" required autofocus name="companyName">
      </fieldset>
      <fieldset>
        <input class="gst" placeholder="GST Number..." type="text" maxlength="15" tabindex="2" required name="gst">
      </fieldset>
      <fieldset>
        <input placeholder="Mobile Number..." type="text" maxlength="10" tabindex="2" id="mob-num" required name="mobile">
      </fieldset>
      <fieldset>
        <select name="country" id="" required tabindex="6">
          <option disabled>Country</option>
          <option value="" Selected>India</option>
        </select>
      </fieldset>
      <?php
      $statesData = mysqli_query($con, "select * from states where country_id='101' ");
      ?>
      <fieldset>
        <select name="states" id="states" required tabindex="6">
          <option value="">Select State</option>
          <?php
          while ($row = mysqli_fetch_array($statesData)) { ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
          <?php }
          ?>
        </select>
      </fieldset>
      <fieldset>
        <select name="city" id="city" required tabindex="6">
          <option value="">Select State First </option>
        </select>
      </fieldset>
      <fieldset>
        <input placeholder="Town/City..." type="text" tabindex="5" required name="town">
      </fieldset>
      <fieldset>
        <textarea id="w3review" rows="4" cols="66" name="address"></textarea>
      </fieldset>


      <fieldset class="dual-input">
        <label for="">Quantity</label>
        <input class='range__slider' id='slider' max='20' min='1' oninput='amount.value=slider.value' type='range' value='1'>
        <input class='range__amount' id='amount' oninput='slider.value=amount.value' type='text' value='1' readonly name="quantity">
      </fieldset>
      <button class="btn-bn" type="submit">Confirm order</button>
    </form>
  </div>
</div>
</section>
<script>
  $(document).ready(function() {
    console.log("well");
    $("#states").change(function() {
      var c = $(this).val();
      $.ajax({
        url: "getCity.php",
        method: "post",
        data: {
          id: c
        },
        dataType: "html",
        success: function(strMsg) {
          $("#city").html("");
          $("#city").html(strMsg);
        }

      })

    })

  });
  $('.gst1').on('change', function() {
    var inputvalues = $(this).val();
    console.log(inputvalues);
    var gstinformat = new RegExp('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]1}[1-9A-Z]{1}Z[0-9A-Z]{1}$');
    if (gstinformat.test(inputvalues)) {
      return true;
    } else {
      alert('Please Enter Valid GSTIN Number');
      $(".gst").val('');
      $(".gst").focus();
    }
  });
</script>
<?php include 'layout/footer.php'; ?>