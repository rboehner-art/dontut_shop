<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping_Cart</title>
</head>
<body>
<h2>Cart</h2>
<ul>
  <?php foreach ($_SESSION['cart'] as $item): ?>
    <li><?= $item ?></li>
  <?php endforeach; ?>
</ul>
</body>
</html>