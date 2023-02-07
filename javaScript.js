function openChildWindow() {
  var windowFeatures = "width=1000, height=600, left=" + (window.outerWidth / 2 - 200) + ", top=" + (window.outerHeight / 2 - 150);
  window.open("Order_Form.php", "Child Window", windowFeatures);
}