<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <?php
        $products = [
            ['name' => 'Donut', 'price' => 2.99],
            ['name' => 'Cake', 'price' => 3.99],
            ['name' => 'Croissant', 'price' => 1.99],
            ['name' => 'Baguette', 'price' => 1.49],
            ['name' => 'Bread', 'price' => 2.99]
        ];
        
        foreach ($products as $product) {
            ?>
            <div class="product-card">
                <!-- product image -->
                <div class="product-img">
                    <!-- change image based on product name -->
                    <?php if ($product['name'] === 'Donut') { ?>
                        <img src="https://cdn.pixabay.com/photo/2018/06/02/11/35/donut-3448210_960_720.jpg" alt="Donut">
                    <?php } elseif ($product['name'] === 'Cake') { ?>
                        <img src="https://images.pexels.com/photos/867452/pexels-photo-867452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Cake">
                    <?php } elseif ($product['name'] === 'Croissant') { ?>
                        <img src="https://images.pexels.com/photos/6940977/pexels-photo-6940977.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Croissant">
                    <?php } elseif ($product['name'] === 'Baguette') { ?>
                        <img src="https://images.pexels.com/photos/12347692/pexels-photo-12347692.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Baguette">
                    <?php } elseif ($product['name'] === 'Bread') { ?>
                        <img src="Image/aleisha-kalina-DxSW4Ws4JO8-unsplash.jpg" alt="Bread">
                    <?php } ?>
                </div>
                <!-- product name and price -->
                <div class="product-text">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>$<?php echo $product['price']; ?></p>
                </div>
                <!-- add to cart button -->
                <div class="product-cart">
                    <form action
</body>
</html>