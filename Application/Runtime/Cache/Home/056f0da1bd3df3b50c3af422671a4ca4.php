<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/Home/register/css/register.css">
	<!-- <link href="./css/font-awesome.min.css" rel="stylesheet"> -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<!--<script type="text/javascript" src="./js/jquery.tmpl.min.js"></script>-->
	<script src="./js/register.js"></script>
	<title>微博注册</title>
</head>
<body>
	<div class="wb_register">
		<div class="wb_header_logo"></div>
		<div class="wb_wave">
			<div class="wb_logo"></div>
		</div>
		<div class="wb_main">
			<div class="wb_main_header">
				<a href="" class="border_bottom">个人注册</a><span>|</span><a href="" class="">官方注册</a>
			</div>
			<div class="wb_main_bottom">
				<div class="wb_main_left clearfix">
					<div class="phone_register">
						<div class="phone_logo"><span class="p_l"></span><span style="color:red">*</span> 手机 : </div>
						<div class="phone_country"><span class="country"></span><span class="area">0086</span><input placeholder="请输入您的手机号码"></div>
						<div class="email_register">或使用<a href="http://sina.wb/index.php/Home/register/email_register">邮箱注册</a></div>
					</div>
					<div class="password_register">
						<div class="password_logo"><span style="color:red">*</span> 设置密码 : </div>
						<input class="password">
					</div>
					<div class="wb_submit">
						<div class="inp">立即注册</div>
					</div>
					<div></div>
				</div>
				<div class="wb_main_right"></div>

			</div>
		</div>
	</div>
</body>
</html>