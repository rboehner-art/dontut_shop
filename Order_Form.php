<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="shopping_cart.php" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <style>
        @media (max-width: 600px) {
        body {
          font-size: 16px;
        }
        h1 {
          font-size: 24px;
        }
      }
    html {
        box-sizing: border-box;
        font: 62.5% "Noto Sans JP", sans-serif;
      }
      
      *, *:before, *:after {
        box-sizing: inherit;
      }
      
      body {
        background: #fff7ae;
        font-size: 1.6em;
        margin: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      
      h3, p {
        margin: 0;
        padding-bottom: .5em;
      }
      
      h3 {
        font-family: font-family: 'Crimson Text', serif;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2em;
      }
      
      p {
        font-family: font-family: 'Crimson Text', serif;
        font-family: 'Montserrat', sans-serif;
        font-size: 1em;
        font-weight: 300;
      }
      
      .container {
        display: flex;
      }
      
      /* PRODUCT CARD */
      
      .product-card {
        background-color: #f5f6fa;
        border-radius: 10px;
        color: #2f3640;
        margin: 0 2em;
        transition: all linear .2s;
        width: 250px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      
      .product-card:hover,
      .product-card:active {
        box-shadow: .2em .5em .5em rgba(0, 0, 0, 0.4);
        transform: scale(1.1);
      }
      
      .product-img {
        border-radius: 10px 10px 0 0;
        height: 150px;
        max-width: 100%;
      }
      
      .img-one {
        background-image: url(https://cdn.pixabay.com/photo/2018/06/02/11/35/donut-3448210_960_720.jpg);
      }
      
      .img-two {
        background-image: url(https://images.pexels.com/photos/867452/pexels-photo-867452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
      }
      
      .img-three {
        background-image: url(https://images.pexels.com/photos/6940977/pexels-photo-6940977.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
      }
      .img-four{
        background-image: url(https://images.pexels.com/photos/12347692/pexels-photo-12347692.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
      }
      .img-five{
        background-image: url(Image/doughnut-ice-cream-sandwich-072822-TOH-07-Lauren-Habermehl-JVedit.jpeg);
      }

      .img-one,
      .img-two,
      .img-three,
      .img-four,
      .img-five {
        background-size: cover;
        background-position: center;
      }
      
      .product-text {
        padding: 1em;
        text-align: center;
      }
      
      .product-cart button{
        border: 0;
        border-radius: 0 0 10px 10px;
        color: #f5f6fa;
        cursor: pointer;
        font-family: inherit;
        padding: 1em;
        text-transform: uppercase;
        transition: all linear .3s;
        width: 100%;
      }
      
      .product-cart button:hover {
        font-weight: 500;
        letter-spacing: .1em;
      }
      
      /* color */
     button{
        background-color:#cb9173;
     }
     h3{
        color: #320a28;
     }
      
      .product-card:<div class="product-card">
          <div class="product-img img-one"></div>
          <div class="product-text">
            <h3>Coffee</h3>
            <p>A chocolate donut with a light coffee taste.</p>
          </div>
          <div class="product-cart">
            <button type="submit">Add to cart</button>
          </div>
        </div> button {
        background-color: #0097e6;
      }
      
   
        
        .product-card {
          margin: 1.5em;
        }
      </style>

    <title>Document</title>
</head>
<body>

<div class="cart">
  
  <h2>Cart</h2>
  <ul>
    <!-- This is where the items in the cart will be displayed -->
  </ul>
</div>
    <div class="container">
    <div class="product-card">
  <div class="product-img img-one"></div>
  <div class="product-text">
    <h3>Coffee</h3>
    <p>A chocolate donut with a light coffee taste.</p>
  </div>
  <div class="product-cart">
    <form action="" method="post" onsubmit="addToCart(event, 'Coffee')">
      <input type="hidden" name="item" value="Coffee">
      <button type="submit">Add to Cart</button>
    </form>
  </div>
</div>
         
          
<div class="product-card">
  <div class="product-img img-two"></div>
  <div class="product-text">
    <h3>Pink</h3>
    <p>A pink donut with sprinkles.</p>
  </div>
  <div class="product-cart">
    <form action="" method="post" onsubmit="addToCart(event, 'Pink')">
      <input type="hidden" name="item" value="Pink">
      <button type="submit">Add to Cart</button>
    </form>
  </div>
      </div>

      <div class="container">
    <div class="product-card">
  <div class="product-img img-three"></div>
  <div class="product-text">
    <h3>Zibra</h3>
    <p>Chocolate and White frosting</p>
  </div>
  <div class="product-cart">
    <form action="" method="post" onsubmit="addToCart(event, 'Zibra')">
      <input type="hidden" name="item" value="Zibra">
      <button type="submit">Add to Cart</button>
    </form>
  </div>
</div>
        
<div class="container">
    <div class="product-card">
  <div class="product-img img-four"></div>
  <div class="product-text">
    <h3>Brownie</h3>
    <p>A donut and a brownie?</p>
  </div>
  <div class="product-cart">
    <form action="" method="post" onsubmit="addToCart(event, 'Brownie')">
      <input type="hidden" name="item" value="Brownie">
      <button type="submit">Add to Cart</button>
    </form>
  </div>
</div>
<div class="container">
    <div class="product-card">
  <div class="product-img img-five"></div>
  <div class="product-text">
    <h3>Special</h3>
    <p>Chef Creation</p>
  </div>
  <div class="product-cart">
    <p>Customize Ice Cream</p>
    <form action="" method="post" onsubmit="addToCart(event, 'Special','Vanilla')">
      <input type="hidden" name="item" value="Special">
      <input    type="radio" id="Chocolate" name="item" value="Chocolate">
??            <label  for="Chocolate">Chocolate </label><br>
              <input type="radio" id="Vanilla" name="item" value="Vanilla">
??            <label for="Vanilla">Vanilla</label><br>
              <input type="radio" id="Raspberry" name="item" value="Raspberry">
??             <label for="Raspberry">Raspberry</label><br>
                     <button  type="submit">Add to Cart</button>
    </form>
  </div>
</div>
<script src="javaScript.js"></script>

</body>
</html>