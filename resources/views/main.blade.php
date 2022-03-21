<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shop Around</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{ asset('shop-around/css/style.css') }}" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="{{ asset('shop-around/js/jquery-1.4.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('shop-around/js/jquery.jcarousel.pack.js') }}" type="text/javascript"></script>
<script src="{{ asset('shop-around/js/jquery-func.js') }}" type="text/javascript"></script>
</head>
<body><!-- Shell -->

<div class="shell">

  @include('header')    
  
  <!-- Main -->
  <div id="main">
    @include('content')
    @include('sidebar')
    <div class="cl">&nbsp;</div>
    
    <div class="cl">&nbsp;</div>
   
  </div>
  <!-- End Main -->

  @include('sidefull')
  @include('footer')

</div>
<!-- End Shell -->
</body>
</html>