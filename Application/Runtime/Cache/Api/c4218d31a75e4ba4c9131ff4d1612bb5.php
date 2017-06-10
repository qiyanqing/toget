<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<link rel="stylesheet" href="/Public/Api/css/details.css">
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/Api/js/vue.js"></script>
	<script src="/Public/Api/js/details.js"></script>
	<script src="/Public/Api/js/function.js"></script>
</head>
<body>
<div id="opp">
	<div class="app">
		<p class="app_p" v-if="renter"><img src="/Public/Api/image/return.png" @click="hold">{{drug.name}}<img src="/Public/Api/image/star.png"></p>
	</div>
	<div class="comment">
		<div class="carousel">
			<ul class="carousel_ul clearfix">
				<li class="carousel_li"><a><img :src="drug.image" alt=""></a></li>
			</ul>
		</div>
		<div class="pointer">
			<p><span class="owner"></span></p>
		</div>
	</div>
	<div class="center">
		<ul class="center_ul clearfix">
			<li class="center_li" @click="onClick"><a href="#"><i class="fa fa-map"></i>章节练习</a><p>{{drug.zj_num}}</p></li>
			<li class="center_li"><a href="#"><i class="fa fa-map"></i>真题训练</a><p>{{drug.zt_num}}</p></li>
			<li class="center_li"><a href="#"><i class="fa fa-map"></i>模拟试卷</a><p>{{drug.mn_num}}</p></li>
		</ul>
		<p class="center_p"><i class="fa fa-map"></i>我的题本<img src="/Public/Api/image/more.png" alt=""></p>
	</div>
</div>
<script>
	var id=getQueryStr("id");
	var name=getQueryStr("name");
	var vm=new Vue({
		el:"#opp",
		data:{
			renter:false,
			drug:{},
		},
		mounted:function(){
			this.s();
		},
		methods:{
			s:function(res){
				$.ajax({
					type:"post",
					dataType:"json",
					url:"/index.php/home/course/detail",
					data:{
						id:id,
						name:name,
					},
					success:function(res){
						if(res.status=="ok"){
							this.renter=true;
							this.drug=res.info;
							console.log(res)
						}
					}.bind(this)
 
				})
			},
			hold:function(){
				window.history.go(-1);
			},
			onClick:function(){
				var course_id=id;
				console.log(course_id)
				window.location.href="/index.php/Api/chapter/chap.html?course_id="+course_id+"";
			}
			// practice:function(index){
			// 	var id=this.drug.name.id;
			// 	// var name=this.drug.num[index].name;
			// 	if(index==0){
			// 		window.location.href="classlist.html?id="+id+"&name="+name+"";
			// 	}
			// 	if(index==1){
			// 		window.location.href="training.html?id="+id+"&name="+name+"";
			// 	}
				
			// },
			
		}
	})
</script>	
</body>
</html>