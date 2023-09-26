<!-- 2213829 -->
<?php
//Function that reads info from DB to create card
function card($name, $imgurl, $proddes, $date, $price, $prodid){
//HTML for card item
$element= "
<div class='column'>
    <div class='card'>
      <h1>$name</h1>
      <img src='$imgurl' style='width:100%'> 
      <p>$proddes</p>
      <p>$date</p>
      <p class='price'>$$price</p>
      <form method='POST'>
      <button type='submit' name='add'>Add to Cart</button>
        <input type='hidden' name='product_id' value='$prodid'>
      </form>
    </div> 
  </div>
";
echo $element; //display
}
