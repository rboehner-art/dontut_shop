<?php
session_start();

// Check if the cart exists in the session, if not create it
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check if the item is already in the cart
  $found = false;
  foreach ($_SESSION['cart'] as &$item) {
    if ($item['name'] == $_POST['item']) {
      $item['quantity']++;
      $found = true;
      break;
    }
  }

  // Add the item to the cart if it's not already there
  if (!$found) {
    array_push($_SESSION['cart'], array(
      'name' => $_POST['item'],
      'quantity' => 1
    ));
  }
}

// Check if the checkout form was submitted
if (isset($_POST['checkout'])) {
  // Process the checkout
  echo "Processing the checkout...<br>";
  echo "Contents of the cart:<br>";
  foreach ($_SESSION['cart'] as $item) {
    echo $item['name'] . " x " . $item['quantity'] . "<br>";
  }

  // Clear the cart
  $_SESSION['cart'] = array();
}
?>

<!-- Display the "Add to Cart" form -->
<form action="" method="post">
  <input type="hidden" name="item" value="item1">
  <button type="submit">Add to Cart</button>
</form>

<!-- Display the checkout form -->
<form action="" method="post">
  <input type="hidden" name="checkout" value="1">
  <button type="submit">Checkout</button>
</form>
