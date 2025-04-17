<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout | MarciaUno</title>
  <link rel="stylesheet" href="../index.css" type="text/css" />
  <link rel="icon" href="../assets/logos/logo.jpg" type="image/x-icon" />
</head>

<body>
  <?php
  include "../components/load.html";
  include "../components/header.html";
  ?>

  <div id="formContainer">
    <div id="inputForm">
      <form action="">
        <label class="title">Shipping</label>

        <div class="formElement">
          <img src="assets/user.svg" alt="" />
          <input type="text" id="fullName" placeholder="Full Name" required />
        </div>

        <div class="formElement">
          <img src="assets/phone.svg" alt="" />
          <input
            type="text"
            id="phoneNum"
            placeholder="Phone Number"
            required />
        </div>

        <div class="formElement">
          <img src="assets/address.svg" alt="" />
          <input type="text" id="address" placeholder="Address" required />
        </div>

        <div class="formElement">
          <img src="assets/card.svg" alt="" />
          <input
            type="text"
            id="cardNum"
            placeholder="Card Number"
            required />
        </div>

        <div class="formElement">
          <input type="text" id="cvv" placeholder="cvv" required />

          <div class="expirationDate">
            <select name="expirationMonth" id="expirationMonth" required>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>

            <select name="expirationYear" id="expirationYear" required>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
              <option value="2031">2031</option>
              <option value="2032">2032</option>
              <option value="2033">2033</option>
              <option value="2034">2034</option>
            </select>
          </div>
        </div>

        <div class="formElement">
          <button type="submit" id="bigButton">submit</button>
        </div>
      </form>
    </div>
  </div>
  <?php include "../components/footer.html" ?>

</body>

</html>