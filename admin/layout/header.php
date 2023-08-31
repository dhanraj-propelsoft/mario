<?php  
session_start();  
  
if(!$_SESSION['name'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mario Precision</title>
  <link rel="stylesheet" href="../assets/admincss/index.css">
  <script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
</head>

<body>

  <header class="top-bar">
    <div class="title-container">

      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="brand-name">
        <h1><span>M</span>ario <span>P</span>recision <span>A</span>utomotive</h1>
      </div>
      <!-- <a href="logout.php" class="login">Logout here</a> -->
    </div>
    <div class="login-btn-container">
    <button type="button" onclick="location.href='logout.php'" class="login" style="float: right;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>&nbsp;&nbsp;&nbsp;Log out</button>&nbsp;&nbsp;
    </div>
  </header>
  <section class="body-container">
    <section class="side-bar">

      <ul class="menu">

        <a href="index.php">
          <li class='<?php if($page == "product"){ echo "active"; } ?>'> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32L0 160H208V32H64zM240 160H448L384 32H240V160zm208 32H0V480H448V192z"/></svg>Product</li>
        </a>
        <a href="orderRequests.php">
          <li class='<?php if($page == "cr"){ echo "active"; } ?>'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M0 48C0 21.5 21.5 0 48 0H368c26.5 0 48 21.5 48 48V96h50.7c17 0 33.3 6.7 45.3 18.7L589.3 192c12 12 18.7 28.3 18.7 45.3V256v32 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H48c-26.5 0-48-21.5-48-48V48zM416 256H544V237.3L466.7 160H416v96zM160 464c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm368-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM257 95c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l39 39H96c-13.3 0-24 10.7-24 24s10.7 24 24 24H262.1l-39 39c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9L257 95z"/></svg>Customer Request</li>
        </a>
        <a href="inbox.php">
          <li class='<?php if($page == "inbox"){ echo "active"; } ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-exclamation" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
</svg>inbox</li>
        </a>
      </ul>
    </section>
    <script>
      
    </script>
    <div class="main-container">