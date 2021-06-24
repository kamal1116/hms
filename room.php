<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="roo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
    <form method="post" action="room.php">
  <?php include('errors.php'); ?>
  <input type="text" name="rom" placeholder="Deluxe">
  <input type="submit" name="avail" value="Check Availability">
    </form>

    <div class="container">
      <div class="product">
        <div class="product-card">
          <h2 class="name">Deluxe room</h2>
          <span class="price">Rs.10,000</span>
          <a class="popup-btn">Quick View</a>
          <img src="der.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="der.png" alt="">
            </div>
            <div class="info">
              <h2>Deluxe room<br><span>Rs.10,000</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">Rs.10,000</span>
              <a href="availability.php" name="avail" value="deluxe" class="add-cart-btn">Book</a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-card">
          <h2 class="name">Executive Room</h2>
          <span class="price">Rs.15,000</span>
          <a class="popup-btn">Quick View</a>
          <img src="exr.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="exr.png" alt="">
            </div>
            <div class="info">
              <h2>Executive Room<br><span>Rs.15,000</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">Rs.15,000</span>
             <a href="availability.php" name="avail" value="deluxe" class="add-cart-btn">Book</a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-card">
          <h2 class="name">Suite Room</h2>
          <span class="price">Rs.25,000</span>
          <a class="popup-btn">Quick View</a>
          <img src="sur.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="sur.png" alt="">
            </div>
            <div class="info">
              <h2>Suite Room<br><span>Rs.25,000</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">Rs.25,000</span>
              <a href="availability.php" name="avail" value="deluxe" class="add-cart-btn">Book</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    
    var popup = function(popupClick){
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
    </script>

  </body>
</html>
      