<?php include 'config/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alexander (br4ndy-code)"/>
  <meta name="description" content="App for leaving a feedback about Alexander (br4ndy-code)"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/style/style.css">
  <title>Leave Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      VANTA.DOTS({
        el: "#vanta",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        size: 4.50,
        spacing: 30.00,
        showLines: false
      })
    })
  </script>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div id="vanta"></div>
    <div class="container">
      <a class="navbar-brand fw-bold text-light" href="index.php">Alexander [br4ndy-code]</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         <li class="nav-item">
              <a class="nav-link text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="feedback.php">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="about.php">About</a>
            </li>
        </ul>
      </div>
  </div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center">