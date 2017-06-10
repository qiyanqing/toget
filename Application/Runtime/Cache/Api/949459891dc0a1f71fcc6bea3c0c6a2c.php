<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title></title>
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<style type="text/css">
		html,body {
			font-size: 62.5%;
		}
		.head {
			text-align: center;
			font-size: 1.6rem;
		}
		.cancel {
			float: left;
			margin-left: 2rem;
			border: none;
			background: #fff;
			color: #42bd56;
			font-size: 1.6rem;
		}
		.input-box {
			margin-top: 3rem;
		}
		input[name='email'], input[name='password'] {
			width: 93%;
			padding-left: 1rem;
			height: 3rem;
			margin-left: 2%;
			border: 1px solid #ccc;
			border-top-left-radius: 3px;
    		border-top-right-radius: 3px;
    		outline: none;
		}
		input[value='邮箱'],input[value='密码']{
			color: #aaa;
			font-size: 1.6rem;
		}
		.login{
			width: 94%;
			height: 3rem;
			text-align: center;
			line-height: 3rem;
			background: #17AA52;
			border:1px solid #17AA52;
			color:#fff;
			margin-top: 1rem;
			font-size: 1.6rem;
			margin-left: 2%;
		}
		input[name='email'] {
			border-bottom: 0;
		}
		.text{
			text-align: center;
			margin-top: 5px;
			font-size: 1.6rem;
			margin-left: 2%;
			color: #aaa;
		}
		.register {
			margin-left: 2%;
			text-align: center;
			color: #17AA52;
		}
		.down{
			margin-left: 5px;
			color: #17AA52;
			text-decoration: none;
		}
		.ps-img{
			position: relative;
		}
		.ps-img img{
			width: 1.6rem;
			height: 1.6rem;
			display: block;
			position: absolute;
			bottom: 20%;
			right: 5%;
		}
	</style>
</head>
<body>
	<div class="head">
		<button class="cancel">取消</button>
		<strong>登录豆瓣</strong>
	</div>
	<div class="input-box">
		<input type="text" name="email" placeholder="邮箱">
		<div class="ps-img">
			<input type="password" name="password" placeholder="密码">
			<img src="./images/ic_pwd.png">
		</div>
		
	</div>
	<div class="login">
		登录
	</div>
	<div class="text">	
		<p>使用其他方式登录&找回密码</p>
	</div>
	<div class="register">
		<span><a class="down" href="">注册豆瓣账号</a></span>
		<span ><a  class="down" href="">下载豆瓣APP</a></span>
	</div>
	<script type="text/javascript">
		$(".login").click(function(){
			var email = $("input[name='email']").val();
			var password = $("input[name='password']").val();
			if(email=="") {
				alert("用户名不能为空！");
				return false;
			};
			if (password=="") {
				alert("密码不能为空");
				return false;
			}
			$.ajax({
				url:"/index.php/home/user/login",
				type:"post",
				dataType:"json",
				data: {
					email:email,
					password:password,

				},
				success:function(res){
					alert(res.msg);
					var user_id=res.info.user_id;
					localStorage.setItem("user_id",user_id);
					console.log(user_id)
					location.href="/index.php/Api/index/index.html";				
				},
				error:function(){
					alert("网络错误");
				}
			})
		})
	</script>
</body>
</html>