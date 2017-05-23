<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>章节</title>
	<script src="/Public/Api/js/vue.js"></script>
	<!-- <link rel="stylesheet" href="./css/home.css"> -->
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<link rel="stylesheet" href="/Public/Api/css/classlist.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/Api/js/function.js"></script>
</head>
<body>
<div id="opp">
	<div class="app">
		<p class="app_p"><img src="/Public/Api/image/return.png">java语言程序设计<img src="/Public/Api/image/star.png"></p>
	</div>
	<div>
		<p class="opp_p" v-for="items in drug.lists" @click="click">{{items.name}}<img src="/Public/Api/image/more.png" alt=""></p>
	</div>
	
</div>
<script>
var id=getQueryStr("course_id");
	var vm=new Vue({
		el:"#opp",
		data:{
			drug:{},
			// name:"",
		},
		mounted:function(){
			this.s();
		},
		methods:{
			s:function(res){
				
				// var name=getQueryStr("name");
				$.ajax({
					type:"post",
					dataType:"json",
					url:"/index.php/home/course/getchapter",
					data:{
						course_id:id,
						// name:name,
					},
					success:function(res){
						if(res.status!="error"){
							this.drug=res;
							console.log(res);
						}
					}.bind(this)
 
				})
			},
			click:function(){
				var course_id=id;
				var num=1
				window.location.href="question.html?id="+course_id+"&num="+num+"";
			}
		}
	})
</script>
</body>
</html>