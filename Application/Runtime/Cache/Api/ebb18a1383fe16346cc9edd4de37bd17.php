<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类</title>
	<script src="/Public/Api/js/vue.js"></script>
	<!-- <link rel="stylesheet" href="./css/home.css"> -->
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<link rel="stylesheet" href="/Public/Api/css/classify.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/Public/Api/js/function.js"></script>
</head>
<body>
<div id="opp">
	<div class="classify">
		<p class="app_p">学科分类</p>
		<div class="classify_div">
			<ul class="classify_ul clearfix">
			<li v-for="(items,index) in drug" @click="technology(index)" :id="items.id"><i class="fa" v-bind:class="items.icon"></i>{{items.name}}</li>
			</ul>
		</div>
	</div>
	<div class="bottom clearfix">
		<div class="bottom_div" @click="ok">
			<img src="/Public/Api/image/book.png" alt=""><p>题库</p>
		</div>
		<div class="bottom_div">
			<img src="/Public/Api/image/classify.jpg" alt=""><p class="color">分类</p>
		</div>
		<div class="bottom_div" @click="mine">
			<img src="/Public/Api/image/person.png" alt=""><p>我的</p>
		</div>
	</div>
</div>	
<script>
	var vm=new Vue({
		el:"#opp",
		data:{
			drug:[],
		},
		mounted:function(){
			this.s();
		},
		methods:{
			s:function(res){
				$.ajax({
					type:"post",
					dataType:"json",
					url:"http://toget.cn/index.php/home/category/lists",
					data:{
						
					},
					success:function(res){
						if(res.status=="ok"){
							this.drug=res.lists;
						}
					}.bind(this)
 
				})
			},
			technology:function(index){
				var name=this.drug[index].name;
				var parent_id=this.drug[index].id;
				window.location.href="cate.html?parent_id="+parent_id+"&name="+name+"";
			},
			ok:function(){
				window.location.href="/index.php/Api/index/index.html";
			},
			mine:function(){
				window.location.href="/index.php/Api/user/reg";
			}

		}
	})
</script>
</body>
</html>