<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Place Order</title>

  <!-- Favicon -->
  <link rel="icon" href="../assets/favicon.jpg" sizes="160x160" type="image/png"/>
  <!-- Meta data -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Place Order" />
  <meta property="og:title" content="placeOrder" />
  <meta name="og:description" content="Place order | MakeMyPart"/>
  <meta property="og:image" content="http://makemypart.in/assets/ordermetaImg.png"/>
  <meta property="og:image:width" content="800" />
  <meta property="og:image:height" content="450" />
  <meta property="og:url" content="http://makemypart.in/order/index.php">
  
  <link rel="stylesheet" href="main.css">
  <!-- Bootstrap  -->
  <link href="../common/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../common/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="../common/navbarMobile/style.css">
  <script src="../common/jquery/common.js"></script>
</head>
<body class="bg-light">
    <!-- navbar -->
    <nav class="navbarDesktop">
        <div class="navLogo">
            <div class="navLogoTitle">MakeMyPart</div>
            <div class="navLogoDesc">WE MADE CUSTOMIZED PARTS EASY FOR YOU.</div>
        </div>
        <div class="navSection">
            <a href="../#home">Home</a>
            <a href="../#services">Services</a>
            <a href="../#aboutUs">About Us</a>
            <a href="../#quote">Place Order</a>
            <a href="../#contactUs">Contact Us</a>
            <a href="../faq/index.html">FAQ</a>
        </div>
    </nav>

    <!-- Navbar Mobile -->
    <div w3-include-html="../common/navbarMobile/index.html" class="navigation"></div>

  <div class="order">
    <div class="imgOrder"><img src="order.jpg" alt="tick list"></div>
    <div class="containerOrder">
      <form action="thank.html" id="form" target="_blank" autocomplete="off" onsubmit="return Response();" >
        <h3>I want to purchase...</h3>
        <div class="form-group">
          <label>Product Name*</label>
          <input type="text" class="form-control" name="entry.1236896618" id="pname" placeholder="Enter product name" required>
        </div>
        <div class="form-group">
          <label>Quantity*</label>
          <input type="number" class="form-control" name="entry.1590762336" id="quantity" placeholder="Enter quantity" required>
        </div>
        <div class="form-group">
          <label>Your Name*</label>
          <input type="text" class="form-control" name="entry.1052244184" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label>Your Email*</label>
          <input type="email" class="form-control" name="entry.46929244" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label>Whatsapp Number*</label>
          <input type="number" pattern="^\d{10}$" name="entry.1884134641" class="form-control" id="number" placeholder="Enter number" required>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control is-valid" name="entry.1354142428" id="desc" rows="3" placeholder="Enter number"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script src="main.js"></script>
  
  <footer>
        <div class="footerTitle">
            Copyright © 2020 MakeMyPart
        </div>
    </footer>
    <script src="../common/navbarMobile/script.js"></script>
    <script>
        includeNav();
        includeHTML();
  </script>
</body>
</html>