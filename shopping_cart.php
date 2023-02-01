<form action="submit-form.php" method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
  </div>
  <div>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
  </div>
  <div>
    <label for="payment">Payment Method:</label>
    <select id="payment" name="payment">
      <option value="credit">Credit Card</option>
      <option value="debit">Debit Card</option>
      <option value="paypal">Paypal</option>
    </select>
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>