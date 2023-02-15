function openChildWindow() {
  var windowFeatures = "width=1000, height=600, left=" + (window.outerWidth / 2 - 200) + ", top=" + (window.outerHeight / 2 - 150);
  window.open("Order_Form.php", "Child Window", windowFeatures);
}


function openChildWindowTwo(){
  var windowFeatures = "width=1000, height=600, left=" + (window.outerWidth / 2 - 200) + ", top=" + (window.outerHeight / 2 - 150);
  window.open("https://tinyurl.com/yzr4ct28", "Child Window", windowFeatures);
}

//contact form page
function openWindow() {
  window.open ("Donut_Contact.php","_blank");
}

// jobs button
function openJobs(){
  alert("If I was a real Donut shop we would have real jobs.")
}

// add to cart
function addToCart(event, item) {
  event.preventDefault(); // Prevent the form from submitting

  // Find the cart element and the ul element inside it
  const cart = document.querySelector('.cart');
  const cartList = cart.querySelector('ul');

  // Create a new li element to represent the item in the cart
  const li = document.createElement('li');
  li.textContent = item;

  // Add the li to the ul
  cartList.appendChild(li);
}
