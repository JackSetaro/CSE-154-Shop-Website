<!-- 2213829 -->
<?php
  $page_name = "Cart";
  include('inc/header.php');
?>


<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="shortcut icon" href="images/bunny.png"/> <!-- Photo Credit: https://1000logos.net/bad-bunny-logo/ -->
  <title>Bad Bunny</title>
</head>

<div>
<div class="row-cart">
  <div class="column-cart">
    <div class="card-checkout">
    <h1>Bad Bunny Devil Mug</h1>
    <img src="images/mug.jpg" alt="Bad bunny devil mug">
    <p class="price">$15</p>
    <p><button>Remove</button></p>
  </div> 
  </div>
</div>
<div>

<h1 id="total">Total: 15$</h1>
<p><button id="cartbutton">Checkout</button></p>


</body>
</html>

<?php
include('inc/footer.php');
?>