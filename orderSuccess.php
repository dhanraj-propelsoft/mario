
    <?php include 'layout/header.php'; ?>
    <div class="main-container">
      <div class="sub-container-A">
        <div class="back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg>
        </div>
        <form action="bankDetails.php">
        <fieldset>
      <input placeholder="Company Name..." type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Contact Number..." type="text" maxlength="10" tabindex="2"  required>
    </fieldset>
    <fieldset>
    <input placeholder="Address Line 1..." type="text" tabindex="3" required >
    </fieldset>
    <fieldset>
    <input placeholder="Address Line 2..." type="text" tabindex="4"  >
  </fieldset>
  <fieldset class="dual-input">
  <fieldset style="width:50%;">
    <input placeholder="Town/City..." type="text" tabindex="5" required >
    </fieldset>
    <fieldset style="width:50%;">
   <select name="" id="" required tabindex="6" >
     <option disabled selected>Districts</option>
   </select>
    </fieldset>
    </fieldset>
    <fieldset>
   <select name="" id="" required tabindex="6" >
     <option disabled>State</option>
     <option value="" Selected>Tamilnadu</option>
   </select>
    </fieldset>
    <fieldset>
   <select name="" id="" required tabindex="6" >
     <option disabled>Country</option>
     <option value="" Selected>India</option>
   </select>
    </fieldset>
    <fieldset>
      <input placeholder="GST Number..." type="text" maxlength="10" tabindex="2"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number..." type="text" maxlength="10" tabindex="2" id="mob-num" required>
    </fieldset>
    <fieldset class="dual-input">
        <label for="">Quantity</label>
        <input class='range__slider' id='slider' max='20' min='1' oninput='amount.value=slider.value' type='range' value='1'>
    <input class='range__amount' id='amount' oninput='slider.value=amount.value' type='text' value='1'  readonly>
    </fieldset>
 <button class="btn-bn" type="submit">Confirm order</button>
 </form>
        </div>
    </div>
    </section>
    <?php include 'layout/footer.php'; ?>