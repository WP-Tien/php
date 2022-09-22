<?php
session_start();
require_once('libraries/class.phpmailer.php');
include_once('config.php');

$config = new config();


//echo "<pre>",print_r($_POST),"</pre>";

if(count($_SESSION["ds_gui_mail"]) > 0)
{
	sleep(rand(10,30));
	//print_r($_POST);
	$mail = new PHPMailer(); // tao doi tuong
	$mail->IsSMTP(); // ket noi smtp
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 1; // debug de xuat loi
	$mail->SMTPAuth = true; // kiem tra quyen truy cap
	$mail->SMTPSecure = 'ssl'; // bat bao mat gui mail loai SSL
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // co the dung port 587
	$mail->IsHTML(true);
	$mail->Username = $config->mail_user;
	$mail->Password = $config->mail_pass;
	$mail->SetFrom("bot_auto_send_mail");
	$mail->From = "bot_auto_send_mail";
	$mail->Subject = $_SESSION["tieu_de"];
	$mail->Body = $_SESSION["noi_dung"];
	$mail->AddAddress($_SESSION["ds_gui_mail"][count($_SESSION["ds_gui_mail"]) - 1]);
	if(!$mail->Send())
	{
		echo "<script> alert('Trong lúc gửi mail xảy ra sự cố: " . $mail->ErrorInfo . "');</script>";
	}
	else
	{
		//echo "<script> alert('Mail liên hệ của bạn đã được gửi đến chúng tôi!');</script>";
		unset($_SESSION["ds_gui_mail"][count($_SESSION["ds_gui_mail"]) - 1]);
		header("location: demo.php");
	}
}



if($_POST)
{
	$ds_gui_mail = explode(",",$_POST["list_email"]);
	//print_r($ds_gui_mail);
	$_SESSION["ds_gui_mail"] = $ds_gui_mail;
	$_SESSION["noi_dung"] = $_POST["noi_dung"];
	$_SESSION["tieu_de"] = $_POST["tieu_de"];
	header("location: demo.php");
}

?>
<meta charset="utf-8" />
<section class="container-fluid">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Bạn muốn liên hệ với chúng tôi?</legend>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					Email
				</div>
				<div class="col-md-9">
					<textarea style="width: 300px;" name="list_email" id="email"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					Tiêu đề
				</div>
				<div class="col-md-9">
					<input type="text" name="tieu_de" id="tieu_de" class="form-control" value="" required="required" title="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					Nội dung
				</div>
				<div class="col-md-9">
					<textarea name="noi_dung" id="noi_dung" class="form-control" rows="3" required="required"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-sm-offset-3">
					<button type="submit" class="btn btn-primary">Gửi mail liên hệ</button>
				</div>
			</div>
		</form>
	</div>
</section>
