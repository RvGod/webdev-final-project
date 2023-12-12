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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>WEBDEV PROJECT</title>
  <style>
    .logout {
      margin-top: 350px;
    }

    .material-symbols-outlined {
      right: 50px;
      top: 25px;
      cursor: pointer;
      position: absolute;
      font-size: 62px;
      color:white;
      opacity:0.7;
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24
    }

    .material-symbols-outlined:hover {
      color: aqua;
      opacity: 0.5;
    }
  </style>
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
          <li><a href="merge3.php">Home</a></li>
          <li><a href="calendar-merge.php">Calendar</a></li>
          <li><a href="todo-merge.php">To Do List</a></li>
          <li><a href="Personal/Personal/index.php">About Me</a></li>
          <!-- <li><a href="crud.php">account</a></li> -->
          <li><a href="logout.php" class="logout">Log Out</a></li>
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
<div>
<a href="crud.php"><span class="material-symbols-outlined">
settings_account_box
</span></a>
</div>
  <!-- <script src="https://kit.fontawesome.com/c4be472e7b.js" crossorigin="anonymous"></script> -->
</body>
</html>
