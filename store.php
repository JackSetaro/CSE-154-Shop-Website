<!-- 2213829 -->
<?php
  $page_name = "Store";
  session_start();

  include('inc/header.php');
  include('inc/lib.php');
  require_once('inc/cards.php');
  
  if (isset($_POST['add'])){
    print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
      $cart_ids = array_column($_SESSION['cart'], "product_id");

      $count = count($_SESSION['cart']);
      $cart = array('product_id' => $_POST['product_id']);
      $_SESSION['cart'][$count] = $cart;

    }else{

      $cart = array('product_id' => $_POST['product_id']);

      // Create the session 
      $_SESSION['cart'][0] = $cart;
    }
}
?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="shortcut icon" href="images/bunny.png"/> <!-- Photo Credit: https://1000logos.net/bad-bunny-logo/ -->
  <title>Bad Bunny</title>
  <style type="text/css">
  body{
    overflow-x: hidden;
  }
  </style>
</head>

<body>
</br>

<!-- Photo Credit: https://badbunnymerch.us/bad-bunny-un-verano-sweatshirt/ -->
<!-- Photo Credit: https://www.etsy.com/uk/listing/1236360241/un-verano-sin-ti-case-bad-bunny-phone -->
<!-- Photo Credit: https://i.etsystatic.com/25420036/r/il/d818dc/3856883330/il_570xN.3856883330_tfmj.jpg -->
<!-- Photo Credit: https://i.etsystatic.com/31091074/r/il/ce618c/4621685431/il_340x270.4621685431_2fdh.jpg -->
<!-- Photo Credit: https://www.etsy.com/uk/listing/1217913717/bad-bunny-poster-yhlqmdlg-poster -->

<?php
  connect();
  $sql = "SELECT * FROM Store_Items";
  $result = mysqli_query($conn, $sql);
  
  // Check there are some results
  if (mysqli_num_rows($result) > 0) {
      
    // There were results so loop through each result
    while($row = mysqli_fetch_assoc($result)) {
      //Read data to the component function
      card($row["name"],$row["img_URL"], $row["description"], $row["date_published"], $row["price"], $row["ID"]);
    }	
  } else {
    // There were no rows in the table that matched the query
    echo "0 results";
  }
  
  // Close the database connection
  mysqli_close($conn);
  ?>
</br>
<!-- Second Row for Correct Spacing -->
<div class="row">
  </br>
</div>
</br>

</body>

<?php
include('inc/footer.php');
?>
