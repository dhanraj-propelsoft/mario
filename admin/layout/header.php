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
          <li> Product</li>
        </a>
        <a href="orderRequests.php">
          <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>Customer Request</li>
        </a>
    

      </ul>
    </section>
    <div class="main-container">