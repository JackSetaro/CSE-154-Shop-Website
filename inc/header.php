<!-- 2213829 -->
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/styles.css"/>
</head>
<div class="nav-bar">
  <div id="nav-container">
    <!-- Photo Credit: https://1000logos.net/bad-bunny-logo/ -->
    <a href="index.php"><img src="images/bunny.png" width="35px" height="50px" alt="Bad Bunny logo"></a>
    <ul>
      <li>
        <?php
        if ( $page_name == "Home") { echo "<em>";}
        ?>
          <a href="index.php" class="active">Home</a>
        <?php
        if ( $page_name == "Home") { echo "</em>";}
        ?>
      </li>

      <li>
        <?php
        if ( $page_name == "About") { echo "<em>";}
        ?>
          <a href="about.php" class="active">About</a>
        <?php
        if ( $page_name == "About") { echo "</em>";}
        ?>
      </li>
      
      <li>
        <?php
        if ( $page_name == "Store") { echo "<em>";}
        ?>
          <a href="store.php" class="active">Shop</a>
        <?php
        if ( $page_name == "Store") { echo "</em>";}
        ?>
      </li>

      <li>
        <?php
        if ( $page_name == "Cart") { echo "<em>";}
        ?>
          <a href="cart.php"><img width="40px" height="40px" src="images/cart.png"></a>
        <?php
        if ( $page_name == "Cart") { echo "</em>";}
        ?>
        <?php
        if (isset($_SESSION['cart'])){ // Session item counter
          $count = count($_SESSION['cart']);
            echo "<span id='cart_count' >$count</span>";
          }else{
            echo "<span id='cart_count'>0</span>";
          }?>
      </li>
      <li>
      
      </li>
    </ul>
  </div>
</div>