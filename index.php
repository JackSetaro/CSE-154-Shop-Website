<!-- W3 schools was referenced in some cases in the development of my HTML -->
<!-- 2213829 -->
<?php
  $page_name = "Home";
  include('inc/header.php');
?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="shortcut icon" href="images/bunny.png"/> <!-- Photo Credit: https://1000logos.net/bad-bunny-logo/ -->
  <title>Bad Bunny</title>
</head>

<!-- Set large background image -->
<div class="bg">
</div>

<div>
  <img id="mainlogo" width="30%" height="30%" src="images/logo.png" alt="Bad Bunny text logo">
</div>

<div class="midWhite">
  <div class="midTextWhite">
    <h2>
      <center>Latest Album<center>
        <img width="30%" height="30%" src="images/uvst.jpg" alt="Un verano sin ti album cover"></img>
      </h2>
      <center><h2>Un Verano Sin Ti</h2></center>
      <center><h3>Released 2022</h3></center>
    </div>
  </div>

  <div class="parallax"></div> <!-- Photo Credit: https://wallpapercave.com/bad-bunny-desktop-wallpapers -->

  <div class="midWhite">
    <div class="midTextWhite">
      <h2>
        <center>Trending Merchandise<center>
          <!-- Photo Credit: https://badbunnymerch.us/bad-bunny-un-verano-sweatshirt/ -->
          <img width="30%" height="30%" src="images/hoodie.jpg" alt="Tan Bad Bunny crew neck"></img>
        </h2>
        <center><h2>Bad Bunny Crew Neck</h2></center>
        <center><h3>35$</h3></center>
        <center><a href="store.php"><button >Go to Shop</button></a></center>
      </div>
    </div>

    <div class="parallax2"></div> <!-- Photo Credit: https://www.pinterest.com/pin/quick-saves--1072138255016773623/ -->

    </body>
  </html>

<?php
include('inc/footer.php');
?>