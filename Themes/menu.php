<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Menu - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
  <style>
  .ui-menu { width: 150px; }
  </style>
</head>
<body>
 
<ul id="menu">
  <li class="ui-state-disabled">Trang chủ</li>
  <li>Giới thiệu</li>
  <li>Sản phẩm
    <ul>
      <li>Quần áo</li>
      <li>Giày dép</li>
      <li>Túi xách</li>
	  <li>Bóp, ví</li>
	  <li>Nón</li>
    </ul>
  </li>
</ul>
 
 
</body>
</html>