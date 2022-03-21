<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">shoparound</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong>4</strong></span> &nbsp;&nbsp; <span>Cost: <strong>$250.99</strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/support">Support</a></li>
        <li><a href="/account">My Account</a></li>
        <li><a href="/store">The Store</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->

  <!-- Main -->
  <div id="main">
   @yield('content')
  </div>
  <!-- End Main -->

  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="/">Home</a> <span>|</span> <a href="/support">Support</a> <span>|</span> <a href="/account">My Account</a> <span>|</span> <a href="/store">The Store</a> <span>|</span> <a href="/contact">Contact</a> </p>
    <p class="right"> &copy; 2010 Shop Around. Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
