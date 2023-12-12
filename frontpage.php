<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="merge3.css">
  <script src="webdev-project.js"></script>
  <title>WEBDEV PROJECT</title>
</head>
<body>
  <div class="container">
    <div class="hamburger-icon" id="hamburger_icon" onclick="hamburgerIcon()">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>

    <img src="pic/rvgwhite.png">
    
    <div class="box" id="box_1">
      <nav>
        <ul>
          <li><a href="merge3.html">Home</a></li>
          <li><a href="calendar-merge.html">Calendar</a></li>
          <li><a href="merge2.html">To Do List</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="login.html" class="logout">Log Out</a></li>
        </ul>
      </nav>
      <!-- <button id="logout-button">Log Out</button> -->
    </div>
  </div>
  <div class="div-box">
    <h1 class="jt --debug">
      <span class="jt__row">
        <span class="jt__text">welcome</span>
        <span class="jt__text">to my</span>
        <span class="jt__text">website</span>
      </span>
      <span class="jt__row jt__row--sibling" aria-hidden="true">
        <span class="jt__text">welcome</span>
        <span class="jt__text">to my </span>
        <span class="jt__text"> website</span>
      </span>
      <span class="jt__row jt__row--sibling" aria-hidden="true">
        <span class="jt__text">welcome</span>
        <span class="jt__text">to my </span>
        <span class="jt__text">website</span>
      </span>
      <span class="jt__row jt__row--sibling" aria-hidden="true">
        <span class="jt__text">welcome</span>
        <span class="jt__text">to my</span>
        <span class="jt__text">website</span>
      </span>
    </h1>
  </div>


</body>
</html>
