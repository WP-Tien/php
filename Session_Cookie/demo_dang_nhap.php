<!DOCTYPE html>
<?php
session_start();

if($_POST)
{
	//print_r($_POST);
	if($_POST["ten_dang_nhap"] == "hungnguyen")
	{
		if($_POST["mat_khau"] == "123456")
		{
			//$_SESSION["ten_dang_nhap"] = $_POST["ten_dang_nhap"];
			setcookie("ten_dang_nhap", $_POST["ten_dang_nhap"], time() + 3600);
			echo "<script>alert('Đăng nhập thành công')</script>";
			header("location: demo_dang_nhap.php");
		}
		else
		{
			echo "<script>alert('Mật khẩu không đúng! Vui lòng kiểm tra lại')</script>";
		}
	}
	else
	{
		echo "<script>alert('Tài khoản không tồn tại! Vui lòng đi đăng ký dùm cái!')</script>";
	}
}

if($_GET["logout"] == 1)
{
	//unset($_SESSION["ten_dang_nhap"]);
	setcookie("ten_dang_nhap","",time() - 3600);
	header("location: demo_dang_nhap.php");
}
?>
<html>
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  .thao_tac{
	  display:none;
  }
  
  .abc:hover .thao_tac{
	  display:block;
  }
  </style>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <?php
  if($_COOKIE["ten_dang_nhap"])//($_SESSION["ten_dang_nhap"])
  {
	  ?>
	  <div class="abc">
	  Chào bạn: 
	  <?php
	  echo $_COOKIE["ten_dang_nhap"];//$_SESSION["ten_dang_nhap"];
	  ?>
		<div class="thao_tac">
			<div><a href="#">Xem thông tin cá nhân</a></div>
			<div><a href="demo_dang_nhap.php?logout=1">Đăng xuất</a></div>
		  </div>
	  </div>
	  
	  <?php
  }
  else
  {
  ?>
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Đăng nhập</button>
  <?php
  }
  ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Đăng nhập</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Tên đăng nhập</label>
              <input name="ten_dang_nhap" type="text" class="form-control" id="usrname" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu:</label>
              <input name="mat_khau" type="password" class="form-control" id="psw" placeholder="Mật khẩu">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Ghi nhớ</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng nhập</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
          <p><a href="#">Đăng ký tại đây</a></p>
          <p>Quên <a href="#">Mật khẩu?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
