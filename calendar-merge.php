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
  <link rel="stylesheet" href="calendar-merge.css">
  <!-- <link rel="stylesheet" href="final-calendar copy.css"> -->

  <!-- <script src="calendar-merge.js"></script> -->
  <title>WEBDEV PROJECT</title>
</head>
<body>
  <div class="container1">
    <div class="hamburger-icon" id="hamburger_icon" onclick="hamburgerIcon()">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>

    <img src="pic/rvgwhite.png">
    
    <div class="box" id="box_1">
      <nav>
        <ul>
          <li><a href="webdev-project.html">Home</a></li>
          <li><a href="calendar-merge.html">Calendar</a></li>
          <li><a href="merge2.html">To Do List</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="login.html" class="logout">Log Out</a></li>
        </ul>
      </nav>    
      <!-- <button id="logout-button">Log Out</button> -->
    </div>
  </div>

  <div class="container2">
    <div id="navButtons">
      <button id="previous" onclick="prevMonth()">&#8249;</button>
      <button id="next" onclick="nextMonth()">&#8250;</button>
    </div>

    <div id="monthYear"></div>
    <div id="calendar"></div>    
  </div>

  <!-- <script src="webdev-project.js"></script>
  <script src="final-calendar copy.js"></script> -->
  <script src="calendar-merge.js"></script>
</body>
</html>
